<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account_class extends Model
{
    public $table = 'account_classes';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'code',
        'name'
    ];

    protected $guarded = [
        'id'
    ];

    public function account_groups(){
        return $this->hasMany(Account_group::class);
    }
}
