<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    public function payInvoicePaymenMethod(){
        return $this->BelongsToMany(PayinvoicePaymentmethod::class);
    }

    public function paymenmethodPayorder(){
        return $this->BelongsToMany(PayinvoicePaymentmethod::class);
    }
}
