<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'due_date',
        'items',
        'total',
        'total_iva',
        'total_pay',
        'pay',
        'balance',
        'retention',
        'status',
        'user_id',
        'branch_id',
        'customer_id',
        'payment_form_id',
        'payment_method_id',
        'retention_id'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function paymentForm(){
        return $this->belongsTo(Payment_form::class);
    }

    public function paymentMethod(){
        return $this->belongsTo(Payment_method::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function pay_orders(){
        return $this->hasMany(Pay_order::class);
    }

    public function retention(){
        return $this->hasOne(Retention::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
