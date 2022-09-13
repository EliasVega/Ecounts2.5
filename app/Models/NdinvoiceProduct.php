<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NdinvoiceProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'price',
        'ndinvoice_id',
        'product_id'
    ];
    /*
    public function ndinvoice(){
        return $this->hasOne(Ndinvoice::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }*/
}
