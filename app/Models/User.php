<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsernameAttribute($username) {
        return ucwords($username); // Svaki put kada pozovemo $jane->username vratice nam sa velikim pcoetnim slovom(aksesor)
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password); //Svaki pwd atribut koji je poslat u User::create() dobija tu vrednost(mutator)
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
