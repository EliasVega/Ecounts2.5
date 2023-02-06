<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'document'           => 'required|string|max:20',
            'items'             => 'integer',
            'tipDoc'            => 'integer',
            'tipOpe'            => 'integer',
            'due_date'          => 'required|date',
            'total'             => 'required|numeric',
            'totalIva'          => 'required|numeric',
            'totalPay'          => 'required|numeric',
            'pay'               => 'nullable|numeric',
            'balance'           => 'required',
            'retention'         => 'nullable|numeric',
            'status'            => 'in_array:active,credit_note,debit_note',
            'branch_id'         => 'integer',
            'customer_id'       => 'required|integer',
            'payment_form_id'   => 'required|integer',
            'payment_method_id' => 'required|integer',
            'percentage_id'      => 'nullable|integer'
        ];
    }
}
