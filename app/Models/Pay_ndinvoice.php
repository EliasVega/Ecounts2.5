<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_ndinvoice extends Model
{
    protected $fillable = [
        'pay',
        'balance_ndinvoice',
        'user_id',
        'branch_id',
        'invoice_id',
    ];

    public function ndinvoice(){
        return $this->belongsTo(Ndinvoice::class);
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
}
