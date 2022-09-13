<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ncinvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'total',
        'totalIva',
        'totalPay',
        'user_id',
        'branch_id',
        'invoice_id',
        'customer_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

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
