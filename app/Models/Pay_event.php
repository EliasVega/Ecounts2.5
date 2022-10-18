<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_event extends Model
{

    protected $fillable = [
        'origin',
        'destination',
        'document',
        'pay',
        'status'
    ];

    public function payinvoicePaymenmethod(){
        return $this->BelongsToMany(PayinvoicePaymentmethod::class);
    }

    public function paymenmethodPayorder(){
        return $this->BelongsToMany(PayinvoicePaymentmethod::class);
    }
}
