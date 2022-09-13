<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'branch_id',
        'originBranch_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function branch(){
        return $this->hasOne(Branch::class);
    }

    public function originBranch(){
        return $this->hasOne(Branch::class);
    }

    public function productBranch(){
        return $this->hasOne(Branch::class);
    }
}
