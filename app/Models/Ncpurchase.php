<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ncpurchase extends Model
{

    protected $fillable = [

        'purchase',
        'total',
        'total_iva',
        'total_pay',
        'user_id',
        'branch_id',
        'purchase_id',
        'supplier_id'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
