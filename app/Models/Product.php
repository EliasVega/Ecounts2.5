<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'code',
        'name',
        'price',
        'sale_price',
        'stock',
        'status',
        'image',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function ncpurchases(){
        return $this->belongsToMany(Ncpurchase::class);
    }

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }

    public function ndpurchase(){
        return $this->belongsToMany(Ndpurchase::class);
    }
    /*
    public function productPurchases(){
        return $this->hasMany(ProductPurchase::class);
    }

    public function Productoventas(){
        return $this->hasMany(ProductoVenta::class);
    }*/

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }

    public function ndinvoices()
    {
        return $this->belongsToMany(Ndinvoice::class);
    }

    public function ncinvoices()
    {
        return $this->belongsToMany(Ncpurchase::class);
    }

    public function kardex(){
        return $this->belongsTo(Kardex::class);
    }
}
