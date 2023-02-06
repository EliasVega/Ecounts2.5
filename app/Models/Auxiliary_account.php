<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auxiliary_account extends Model
{
    public $table = 'auxiliary_accounts';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'subaccount_id',
        'code',
        'name'
    ];

    protected $guarded = [
        'id'
    ];

    public function subaccount(){
        return $this->belongsTo(Subaccount::class);
    }
}
