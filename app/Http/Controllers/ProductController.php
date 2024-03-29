<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Imports\ProductImport;
use App\Models\Branch_product;
use App\Models\Category;
use App\Models\Unit_measure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $products = product::get();

            return datatables()
            ->of($products)
            ->addColumn('edit', 'admin/product/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        $measures = Unit_measure::where('status', 'activo')->get();

        return view("admin.product.create", compact('categories', 'measures'));
    }

    public function createImport()
    {
        return view('admin.product.import');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //dd($request->all());
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->unit_measure_id = $request->unit_measure_id;
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->stock = 0;
        //Handle File Upload
        if($request->hasFile('image')){
            //Get filename with the extension
            $filenamewithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->guessClientExtension();

            $image = Image::make($request->file('image'))->encode('jpg', 75);
            $image->resize(512,448,function($constraint) {
                $constraint->upsize();
            });
            //FileName to store
            $fileNameToStore = time() . '.jpg';
            $product->imageName = $fileNameToStore;
            //Upload Image
            Storage::disk('public')->put("images/products/$fileNameToStore", $image->stream());
            $fileNameToStore = Storage::url("images/products/$fileNameToStore");
        } else{
            $product->imageName = 'noimage.jpg';
            $fileNameToStore="/storage/images/products/noimage.jpg";
        }
        $product->image=$fileNameToStore;
        $product->save();
            //metodo para agregar producto a la sede
        $branch_product = new Branch_product();
        $branch_product->branch_id = 1;
        $branch_product->product_id = $product->id;
        $branch_product->stock = 0;
        $branch_product->order_product = 0;
        $branch_product->save();

        return redirect('product');
    }

    public function import(Request $request)
    {
        $product = $request->file('product');
        Excel::import(new ProductImport, $product);

        $message = 'Importacion de Productos realizada con exito';
        toast($message,'success');
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::select('id', 'name')->get();

        return view("admin.product.show", compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::select('id', 'name')->get();
        $measures = Unit_measure::where('status', 'activo')->get();

        return view("admin.product.edit", compact('product', 'categories', 'measures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //dd($request->all());
        $product->category_id = $request->category_id;
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->stock = $request->stock;
        $product->status = 1;

        $currentImage = $product->imageName;
        //Handle File Upload
        $currentImage = $product->imageName;
        //Handle File Upload
        if($request->hasFile('image')){
            if ($currentImage != 'noimage.jpg') {
                Storage::disk('public')->delete("images/products/$currentImage");
            }
            //Get filename with the extension
            $filenamewithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->guessClientExtension();

            $image = Image::make($request->file('image'))->encode('jpg', 75);
            $image->resize(512,448,function($constraint) {
                $constraint->upsize();
            });
            //FileName to store
            $fileNameToStore = time() . '.jpg';
            $product->imageName = $fileNameToStore;
            //Upload Image
            Storage::disk('public')->put("images/products/$fileNameToStore", $image->stream());
            $fileNameToStore = Storage::url("images/products/$fileNameToStore");
        } else{
            $product->imageName = 'noimage.jpg';
            $fileNameToStore="/storage/images/products/noimage.jpg";
        }
        $product->image=$fileNameToStore;
        $product->update();

        $branchProduct = Branch_product::where('product_id', $product->id)->first();
        $branchProduct->stock = $request->stock;
        $branchProduct->update();

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
