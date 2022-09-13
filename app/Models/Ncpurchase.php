<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ncpurchase extends Model
{
    use HasFactory;

    protected $fillable = [

        'purchase',
        'total',
        'totalIva',
        'totalPay',
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
