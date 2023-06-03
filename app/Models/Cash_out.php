<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cash_out extends Model
{

    protected $fillable = [
        'sale_box_id',
        'user_id',
        'branch_id',
        'admin_id',
        'payment',
        'reason',
        'admin'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function adminId(){
        return $this->hasOne(User::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function salelBox(){
        return $this->belongsTo(Sale_box::class);
    }
}
