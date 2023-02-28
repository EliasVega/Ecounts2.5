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

    public function paymentMethod(){
        return $this->hasMany(Payment_method::class);
    }
}
