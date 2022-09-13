<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ndinvoice extends Model
{
    use HasFactory;

    protected $fillable = [

        'total',
        'totalIva',
        'totalPay',
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
