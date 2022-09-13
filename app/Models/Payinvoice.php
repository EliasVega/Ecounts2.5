<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payinvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'pay',
        'balanceInvoice',
        'user_id',
        'branch_id',
        'invoice_id',
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function paymentMethod(){
        return $this->hasMany(Mediopago::class);
    }

    public function payinvoices(){
        return $this->hasMany(Payinvoice::class);
    }
}
