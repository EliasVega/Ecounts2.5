<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Department;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Regime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('branch');
        Session::forget('company');
            $companies = company::where('id', '=', 1)->get();
        return view('admin.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::get();
        $municipalities = Municipality::get();
        $liabilities = Liability::get();
        $organizations = Organization::get();
        $regimes = Regime::get();
        //$users = User::where('role_id', '=', 2)->get();
        return view('admin.company.create', compact('departments', 'municipalities', 'liabilities', 'organizations', 'regimes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        //dd($request->all());
        $company = new company();
        $company->department_id   = $request->department_id;
        $company->municipality_id = $request->municipality_id;
        $company->liability_id    = $request->liability_id;
        $company->organization_id = $request->organization_id;
        $company->regime_id       = $request->regime_id;
        $company->name          = $request->name;
        $company->nit             = $request->nit;
        $company->dv              = $request->dv;
        $company->email           = $request->email;
        $company->emailfe         = $request->emailfe;
        //Handle File Upload
        if($request->hasFile('logo')){
            //Get filename with the extension
            $filenamewithExt = $request->file('logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('logo')->guessClientExtension();

            $image = Image::make($request->file('logo'))->encode('jpg', 75);
            $image->resize(512,448,function($constraint) {
                $constraint->upsize();
            });
            //FileName to store
            $fileNameToStore = time() . '.jpg';
            $company->imageName = $fileNameToStore;
            //Upload Image
            Storage::disk('public')->put("images/logos/$fileNameToStore", $image->stream());
            $fileNameToStore = Storage::url("images/logos/$fileNameToStore");
        } else{
            $company->imageName = 'noimage.jpg';
            $fileNameToStore="/storage/images/logos/noimage.jpg";
        }
        $company->logo=$fileNameToStore;
        $company->save();

        return redirect('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        Session::put('company', $company->id, 60 * 24 * 365);
        Session::put('name', $company->name, 60 * 24 * 365);

        return redirect('branch');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $departments    = Department::get();
        $municipalities = Municipality::get();
        $liabilities    = Liability::get();
        $organizations  = Organization::get();
        $regimes        = Regime::get();
        return view("admin.company.edit", compact('company', 'departments', 'municipalities', 'liabilities', 'organizations', 'regimes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //dd($request->all());
        $company->department_id   = $request->department_id;
        $company->municipality_id = $request->municipality_id;
        $company->liability_id    = $request->liability_id;
        $company->organization_id = $request->organization_id;
        $company->regime_id       = $request->regime_id;
        $company->name            = $request->name;
        $company->nit             = $request->nit;
        $company->dv              = $request->dv;
        $company->email           = $request->email;
        $company->emailfe         = $request->emailfe;
        $currentImage = $company->imageName;
        //Handle File Upload
        if($request->hasFile('logo')){
            if ($currentImage != 'noimage.jpg') {
                Storage::disk('public')->delete("images/logos/$currentImage");
            }
            //Get filename with the extension
            $filenamewithExt = $request->file('logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('logo')->guessClientExtension();

            $image = Image::make($request->file('logo'))->encode('jpg', 75);
            $image->resize(512,448,function($constraint) {
                $constraint->upsize();
            });
            //FileName to store
            $fileNameToStore = time() . '.jpg';
            $company->imageName = $fileNameToStore;
            //Upload Image
            Storage::disk('public')->put("images/logos/$fileNameToStore", $image->stream());
            $fileNameToStore = Storage::url("images/logos/$fileNameToStore");
        } else{
            $company->imageName = 'noimage.jpg';
            $fileNameToStore="/storage/images/logos/noimage.jpg";
        }
        $company->logo=$fileNameToStore;
        $company->update();

        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function getmunicipalities(Request $request, $id)
    {
        if($request)
        {
            $municipalities = municipality::where('department_id', '=', $id)->get();

            return response()->json($municipalities);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('name');
       // \Session::forget('company');

        return redirect('admin/company');
    }
}
