<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_ncinvoice_payment_method extends Model
{
    protected $fillable = [
        'valor',
        'transaction',
        'pay_ncinvoice_id',
        'payment_method_id',
        'bank_id',
        'card_id',
    ];

    public function bank(){
        return $this->belongsTo(Bank::class);
    }

    public function card(){
        return $this->belongsTo(Card::class);
    }
    public function payment_method(){
        return $this->belongsTo(Payment_method::class);
    }
    public function pay_invoice(){
        return $this->belongsTo(Pay_invoice::class);
    }
}
