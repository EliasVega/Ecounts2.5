<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

        'name',
        'number',
        'address',
        'phone',
        'email',
        'password',
        'position',
        'transfer',
        'status',
        'company_id',
        'branch_id',
        'document_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function transfer()
    {
        return $this->hasMany(Transfer::class);
    }

    public function purchases(){
        return $this->hasMany(purchase::class);
    }

    public function ncpurchases(){
        return $this->hasMany(Ncpurchase::class);
    }

    public function ndpurchases(){
        return $this->hasMany(Ndpurchase::class);
    }

    public function ncinvoices(){
        return $this->hasMany(Ncinvoice::class);
    }

    public function ndinvoices(){
        return $this->hasMany(Ndinvoice::class);
    }

    public function invoice(){
        return $this->belongsToMany(Invoice::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function cashOut(){
        return $this->hasMany(Cashout::class);
    }

    public function payorders(){
        return $this->hasMany(Payorder::class);
    }

    public function cod_verif(){
        return $this->hasOne(Cod_verif::class);
    }
}
