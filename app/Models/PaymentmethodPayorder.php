<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentmethodPayorder extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment',
        'transaction',
        'payOrder_id',
        'paymentMethod_id',
        'bank_id',
        'card_id',
        'payEvent_id',
    ];

    public function banks()
    {
        return $this->belongsToMany(Bank::class);
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class);
    }

    public function payevent()
    {
        return $this->hasOne(Payevent::class);
    }
}
