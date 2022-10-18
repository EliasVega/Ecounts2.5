<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale_box extends Model
{

    protected $fillable = [
        'cash_box',
        'in_order_cash',
        'in_order',
        'in_invoice_cash',
        'in_invoice',
        'in_pay_cash',
        'in_pay',
        'in_pay_event',
        'out_cash',
        'cash',
        'out',
        'total',
        'sale',
        'order',
        'cod_verif_open',
        'cod_verif_close',
        'status',
        'user_id',
        'user_open',
        'user_close',
        'branch_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function cashOut(){
        return $this->hasMany(Cashout::class);
    }

}
