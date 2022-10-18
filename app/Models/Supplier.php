<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    protected $fillable = [

        'name',
        'number',
        'dv',
        'address',
        'phone',
        'email',
        'contact',
        'phone_contact',
        'department_id',
        'municipality_id',
        'document_id',
        'liability_id',
        'organization_id',
        'tax_id'
    ];

    public function document(){
        return $this->belongsTo(Document::class);
    }

    public function liability(){
        return $this->belongsTo(Liability::class);
    }

    public function organization(){
        return $this->belongsTo(Organization::class);
    }

    public function tax(){
        return $this->belongsTo(Tax::class);
    }

    public function regime(){
        return $this->belongsTo(Regime::class);
    }

    public function purchases(){
        return $this->belongsToMany(Purchase::class);
    }

    public function departament()
    {
        return $this->belongsTo(departament::class);
    }

    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }

    public function ncpurchases(){
        return $this->belongsToMany(Ncpurchase::class);
    }

    public function ndpurchases(){
        return $this->belongsToMany(Ndpurchase::class);
    }
}
