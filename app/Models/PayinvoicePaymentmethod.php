<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayinvoicePaymentmethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'valor',
        'transaction',
        'payInvoice_id',
        'paymentMethod_id',
        'bank_id',
        'card_id',
        'payEvent_id'
    ];

    public function bank(){
        return $this->belongsTo(Bank::class);
    }

    public function card(){
        return $this->belongsTo(Card::class);
    }

    public function payEvent(){
        return $this->belongsTo(Payevent::class);
    }
}
