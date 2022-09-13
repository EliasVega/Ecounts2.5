<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NcpurchaseProduct extends Model
{
    use HasFactory;

    protected $fillable = [

        'quantity',
        'price',
        'ncpurchase_id',
        'product_id'
    ];

    public function ncpurchases(){
        return $this->hasMany(Ncpurchase::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
