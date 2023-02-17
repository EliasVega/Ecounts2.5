<?php

namespace App\Http\Controllers;

use App\Models\Pay_expense;
use App\Http\Requests\StorePay_expenseRequest;
use App\Http\Requests\UpdatePay_expenseRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PayExpenseController extends Controller
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
    public function store(StorePay_expenseRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pay_expense $pay_expense): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pay_expense $pay_expense): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePay_expenseRequest $request, Pay_expense $pay_expense): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pay_expense $pay_expense): RedirectResponse
    {
        //
    }
}
