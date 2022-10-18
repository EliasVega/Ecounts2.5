<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleboxRequest extends FormRequest
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
            'cash_box'        => '',
            'in_order_cash'   => '',
            'in_order'        => '',
            'in_invoice_cash' => '',
            'in_invoice'      => '',
            'in_pay_cash'     => '',
            'in_pay'          => '',
            'in_pay_event'    => '',
            'out_cash'        => '',
            'cash'            => '',
            'out'             => '',
            'total'           => '',
            'sale'            => '',
            'order'           => '',
            'cod_verif_open'  => '',
            'cod_verif_close' => '',
            'status'          => '',
            'user_id'         => '',
            'branch_id'       => '',
            'user_open_id'    => '',
            'user_olose_id'   => ''
        ];
    }
}
