<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ndinvoice extends Model
{

    protected $fillable = [

        'total',
        'total_iva',
        'total_pay',
        'pay',
        'balance',
        'status',
        'user_id',
        'branch_id',
        'invoice_id',
        'customer_id'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
