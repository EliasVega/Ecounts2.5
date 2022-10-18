<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{

    protected $fillable = [

        'purchase',
        'total',
        'total_iva',
        'total_pay',
        'status',
        'user_id',
        'branch_id',
        'supplier_id',
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function productPurchases(){
        return $this->hasMany(ProductPurchase::class);
    }

    public function ncpurchase(){
        return $this->hasOne(Ncpurchase::class);
    }

    public function Products(){
        return $this->hasMany(Product::class);
    }

    public function ndpurchase(){
        return $this->hasOne(Ndpurchase::class);
    }
}
