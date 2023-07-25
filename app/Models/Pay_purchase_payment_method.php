<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_purchase_payment_method extends Model
{
    protected $fillable = [
        'valor',
        'transaction',
        'pay_purchase_id',
        'payment_method_id',
        'bank_id',
        'card_id',
        'payment_id',
    ];

    public function bank(){
        return $this->belongsTo(Bank::class);
    }

    public function card(){
        return $this->belongsTo(Card::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(Payment_method::class);
    }
}
