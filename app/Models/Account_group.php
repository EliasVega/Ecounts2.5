<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account_group extends Model
{
    public $table = 'account_groups';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'account_class_id',
        'code',
        'name'
    ];

    protected $guarded = [
        'id'
    ];

    public function account_class(){
        return $this->belongsTo(Account_class::class);
    }
    public function accounts(){
        return $this->hasMany(Account::class);
    }
}
