<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    //Relacion 1 a 1

    public function profile(){
        return $this->hasOne('app\Models\profile');
    }

    //Relacion 1 a muchos  --  relacion de los profesores a los cursos, 1 curso puede tener un profesor pero 1 profesor puede tener muchos cursos

    public function courses_dictated(){
        return $this->hasMany('app\Models\course');
    }

    public function comments(){
        return $this->hasMany('app\Models\comment');
    }

    public function reactions(){
        return $this->hasMany('app\Models\reaction');
    }
    
    //Relacion 1 a muchos inversa

    public function reviews(){
        return $this->hasMany('app\Models\review');
    }



    //Relacion muchos a muchos  --  relacion de los estudiantes a los cursos, 1 estudiante puede tener muchos cursos y 1 curso puede tener muchos profesores

    public function courses_enrolled(){
        return $this->belongsToMany('app\Models\course');
    }

    public function lessons(){
        return $this->belongsToMany('app\Models\lesson');
    }
}
