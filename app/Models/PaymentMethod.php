<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
    ];

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }

    public function payorders(){
        return $this->belongsToMany(Payorder::class);
    }

    public function payevents(){
        return $this->belongsToMany(Payevent::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function payOrder(){
        return $this->belongsToMany(Payorder::class);
    }

    public function payInvoice(){
        return $this->belongsToMany(Payinvoice::class);
    }
}
