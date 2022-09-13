<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNcinvoiceRequest extends FormRequest
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
            'invoice'     => '',
            'total'       => 'required',
            'totalIva'    => 'required',
            'totalPay'    => 'required',
            'branch_id'   => '',
            'invoice_id'  => '',
            'customer_id' => ''
        ];
    }
}
