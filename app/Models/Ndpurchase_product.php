<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ndpurchase_product extends Model
{

    protected $fillable = [

        'cantidad',
        'precio',
        'ntdcompra_id',
        'producto_id'
    ];

    public function Ndpurchase(){
        return $this->hasOne(Ntdcompra::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
