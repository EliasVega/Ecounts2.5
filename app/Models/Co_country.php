<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Co_country extends Model
{
    use HasFactory;

    public $table = 'co_countries';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'code',
        'code_phone'
    ];

    protected $guarded = [
        'id'
    ];

    public function co_departments(){
        return $this->hasMany(Department::class);
    }
}
