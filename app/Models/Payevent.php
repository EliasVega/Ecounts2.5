<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payevent extends Model
{
    use HasFactory;

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
