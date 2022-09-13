<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payorder extends Model
{
    use HasFactory;

    protected $fillable = [
        'pay',
        'balanceOrder',
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

    public function paymentMethods(){
        return $this->belongsToMany(PaymentMethod::class);
    }
}
