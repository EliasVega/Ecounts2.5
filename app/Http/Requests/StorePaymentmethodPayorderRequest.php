<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentmethodPayorderRequest extends FormRequest
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
            'payment'          => 'required',
            'transaction'      => 'required',
            'payOrder_id'      => '',
            'paymentMethod_id' => '',
            'bank_id'          => '',
            'card_id'          => '',
            'payEvent_id'      => ''
        ];
    }
}
