<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $fillable = [

        'invoice',
        'type_document',
        'type_operation',
        'due_date',
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

    public function paymentForm(){
        return $this->belongsTo(PaymentForm::class);
    }

    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function ndinvoice()
    {
        return $this->hasOne(Ndinvoice::class);
    }

    public function ncinvoice()
    {
        return $this->hasOne(Ncinvoice::class);
    }

    public function payInvoice()
    {
        return $this->belongsToMany(Payinvoice::class);

    }
    public function retention(){
        return $this->hasOne(Retention::class);
    }
}
