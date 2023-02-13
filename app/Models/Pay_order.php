<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_order extends Model
{

    protected $fillable = [
        'pay',
        'balance_order',
        'user_id',
        'branch_id',
        'order_id',
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function Payment_methods(){
        return $this->belongsToMany(Payment_method::class);
    }

    public function cashReceipt()
    {
        return $this->morphMany(Cash_receipt::class, 'payable');
    }
}
