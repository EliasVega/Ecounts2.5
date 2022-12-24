<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_event extends Model
{

    protected $fillable = [
        'origin',
        'destination',
        'document',
        'pay',
        'status'
    ];

    public function Payment_methods(){
        return $this->belongsToMany(Payment_method::class);
    }
}
