<?php

namespace App\Http\Controllers;

use App\Models\PaymentForm;
use App\Http\Requests\StorePaymentFormRequest;
use App\Http\Requests\UpdatePaymentFormRequest;

class PaymentFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $paymentForms = PaymentForm::get();

            return datatables()
            ->of($paymentForms)
            ->addColumn('edit', 'admin/paymentForm/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.paymentForm.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paymentForm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentFormRequest $request)
    {
        $paymentForm = new PaymentForm();
        $paymentForm->code = $request->code;
        $paymentForm->name = $request->name;
        $paymentForm->save();
        return redirect('paymentForm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentForm  $paymentForm
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentForm $paymentForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentForm  $paymentForm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentForm = PaymentForm::findOrFail($id);
        return view('admin.paymentForm.edit', compact('paymentForm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentFormRequest  $request
     * @param  \App\Models\PaymentForm  $paymentForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentFormRequest $request, $id)
    {
        $paymentForm = PaymentForm::findOrFail($id);
        $paymentForm->code = $request->code;
        $paymentForm->name = $request->name;
        $paymentForm->update();
        return redirect('paymentForm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentForm  $paymentForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentForm $paymentForm)
    {
        //
    }
}
