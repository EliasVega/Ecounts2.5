<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSaleboxRequest extends FormRequest
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
            'cashbox'       => '',
            'inOrderCash'   => '',
            'inOrder'       => '',
            'inInvoiceCash' => '',
            'inInvoice'     => '',
            'inPayCash'     => '',
            'inPay'         => '',
            'inPayEvent'    => '',
            'outCash'       => '',
            'cash'          => '',
            'out'           => '',
            'total'         => '',
            'sale'          => '',
            'order'         => '',
            'codverifOpen'  => '',
            'codverifClose' => '',
            'status'        => '',
            'user_id'       => '',
            'branch_id'     => '',
            'userOpen_id'   => '',
            'userClose_id'  => ''
        ];
    }
}
