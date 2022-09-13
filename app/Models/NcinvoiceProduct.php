<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NcinvoiceProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'precio',
        'ncinvoice_id',
        'product_id'
    ];
    /*
    public function ncinvoice(){
        return $this->hasOne(Ncinvoice::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }*/
}
