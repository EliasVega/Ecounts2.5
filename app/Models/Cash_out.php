<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cash_out extends Model
{

    protected $fillable = [
        'sail_box_id',
        'user_id',
        'branch_id',
        'admin_id',
        'payment',
        'admin'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sailbox(){
        return $this->belongsTo(Sale_box::class);
    }
}
