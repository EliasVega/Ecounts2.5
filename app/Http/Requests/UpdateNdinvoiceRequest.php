<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNdinvoiceRequest extends FormRequest
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

            'total'       => 'required',
            'total_iva'   => 'required',
            'total_pay'   => 'required',
            'pay'         => '',
            'balance'     => '',
            'status'      => '',
            'branch_id'   => '',
            'invoice_id'  => '',
            'customer_id' => ''
        ];
    }
}
