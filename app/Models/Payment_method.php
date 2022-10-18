<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{

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
