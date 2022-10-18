<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'due_date'          => '',
            'items'             => '',
            'total'             => 'required',
            'total_iva'         => 'required',
            'total_pay'         => 'required',
            'pay'               => 'required',
            'balance'           => '',
            'retention'         => '',
            'status'            => '',
            'branch_id'         => '',
            'customer_id'       => 'required',
            'payment_form_id'   => 'required',
            'payment_method_id' => 'required',
            'retention_id'      => '',
        ];
    }
}
