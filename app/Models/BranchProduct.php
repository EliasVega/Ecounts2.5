<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchProduct extends Model
{
    use HasFactory;

    protected $fillable = [


        'stock',
        'orderProduct',
        'branch_id',
        'product_id'
    ];



    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function productPurchases(){
        return $this->hasMany(ProductPurchase::class);
    }

    public function ncpurchases(){
        return $this->hasMany(Ncpurchase::class);
    }

    public function ndpurchases(){
        return $this->hasMany(Ndpurchase::class);
    }



    public function Productoventas(){
        return $this->hasMany(ProductoVenta::class);
    }



    public function ntcventa(){
        return $this->belongsToMany(Ntcventa::class);
    }
}
