<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salebox extends Model
{
    use HasFactory;

    protected $fillable = [
        'cashbox',
        'inOrderCash',
        'inOrder',
        'inInvoiceCash',
        'inInvoice',
        'inPayCash',
        'inPay',
        'inPayEvent',
        'outCash',
        'cash',
        'out',
        'total',
        'sale',
        'order',
        'codVerifOpen',
        'codVerifClose',
        'status',
        'user_id',
        'userOpen',
        'userClose',
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
