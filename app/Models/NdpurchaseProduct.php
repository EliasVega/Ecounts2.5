<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NdpurchaseProduct extends Model
{
    use HasFactory;

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
