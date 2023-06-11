<?php

namespace App\Models;

use App\Services\DataService;
use App\Services\StringService;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'section_id',
        'classe_id',
        'phone_number', 
        'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Rest omitted for brevity


    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = trim(strtoupper($value));
    }

    public function setPhoneNumberAttribute($value) {
        $this->attributes['phone_number'] = StringService::removerCaracteresEspeciais($value);
    }

    public function getCreatedAtAttribute($value) {
        return DataService::formatarDMY($value);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id', 'id');
    }
    
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

}
