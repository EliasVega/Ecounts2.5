<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Co_municipality extends Model
{
    use HasFactory;

    public $table = 'co_municipalities';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [

        'name',
        'co_department_id'
    ];

    public function co_department()
    {
        return $this->belongsTo(Co_department::class);
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
