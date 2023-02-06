<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Co_department extends Model
{
    use HasFactory;

    public $table = 'co_departments';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        //
        'co_country_id',
        'name'
    ];

    public function co_country()
    {
        return $this->belongsTo(Co_country::class);
    }

    public function co_municipalities()
    {
        return $this->hasMany(Co_municipality::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
