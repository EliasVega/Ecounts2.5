<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    protected $fillable = [

        'name',
        'address',
        'phone',
        'mobile',
        'email',
        'manager',
        'department_id',
        'municipality_id',
        'company_id',
    ];

    public function department()
    {
        return $this->belongsTo(department::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }

    public function ncpurchases(){
        return $this->hasMany(Ncpurchase::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }


    public function payorders(){
        return $this->hasMany(Payorder::class);
    }
}
