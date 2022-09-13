<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'branch_id',
        'operation',
        'number',
        'quantity',
        'stock'
    ];

    public function product(){
        return $this->hasOne(Producto::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
