<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_purchase extends Model
{
    protected $fillable = [
        'pay',
        'balance_purchase',
        'user_id',
        'branch_id',
        'purchase_id',
    ];

    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function payment_method(){
        return $this->hasMany(Payment_method::class);
    }

    public function pay_purchases(){
        return $this->hasMany(Pay_purchase::class);
    }
}
