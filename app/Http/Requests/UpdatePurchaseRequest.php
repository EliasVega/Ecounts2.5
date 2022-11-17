<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepurchaseRequest extends FormRequest
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
            'purchase'          => 'required|max:20',
            'due_date'          => 'required',
            'items'             => '',
            'total'             => 'required',
            'total_iva'         => 'required',
            'total_pay'         => 'required',
            'pay'               => '',
            'balance'           => '',
            'status'            => '',
            'branch_id'         => '',
            'supplier_id'       => 'required',
            'payment_form_id'   => '',
            'payment_method_id' => ''
        ];
    }
}
