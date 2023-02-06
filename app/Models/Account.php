<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $table = 'accounts';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'account_group_id',
        'code',
        'name'
    ];

    protected $guarded = [
        'id'
    ];

    public function account_group(){
        return $this->belongsTo(Account_group::class);
    }
    public function subaccounts(){
        return $this->hasMany(Subaccount::class);
    }
}
