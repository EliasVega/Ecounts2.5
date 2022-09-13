<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'due_date',
        'items',
        'total',
        'totalIva',
        'totalPay',
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

    public function paymentForms(){
        return $this->belongsToMany(PaymentForm::class);
    }

    public function paymentMethods(){
        return $this->belongsToMany(PaymentMethod::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function payorders(){
        return $this->hasMany(Payorder::class);
    }

    public function retention(){
        return $this->hasOne(Retention::class);
    }
}
