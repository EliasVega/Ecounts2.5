<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCashoutRequest extends FormRequest
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
            'admin_id'   => 'required',
            'payment'    => 'required',
            'admin'      => 'required',
            'cashbox_id' => '',
            'user_id'    => '',
            'branch_id'  => ''
        ];
    }
}
