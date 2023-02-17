<?php

namespace App\Http\Controllers;

use App\Models\Pay_expense_payment_method;
use App\Http\Requests\StorePay_expense_payment_methodRequest;
use App\Http\Requests\UpdatePay_expense_payment_methodRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PayExpensePaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePay_expense_payment_methodRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pay_expense_payment_method $pay_expense_payment_method): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pay_expense_payment_method $pay_expense_payment_method): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePay_expense_payment_methodRequest $request, Pay_expense_payment_method $pay_expense_payment_method): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pay_expense_payment_method $pay_expense_payment_method): RedirectResponse
    {
        //
    }
}
