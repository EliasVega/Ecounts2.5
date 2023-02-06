<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subaccount extends Model
{
    public $table = 'subaccounts';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'account_id',
        'code',
        'name'
    ];

    protected $guarded = [
        'id'
    ];

    public function account(){
        return $this->belongsTo(Account::class);
    }

    public function auxiliary_accounts(){
        return $this->hasMany(Auxiliary_account::class);
    }
}
