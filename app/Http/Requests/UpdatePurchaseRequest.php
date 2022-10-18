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

            'purchase'    => 'required|max:20',
            'total'       => 'required',
            'total_iva'   => 'required',
            'total_pay'   => 'required',
            'status'      => '',
            'branch_id'   => '',
            'supplier_id' => 'required'
        ];
    }
}
