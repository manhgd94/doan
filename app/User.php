<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * This mutator automatically hashes the password.
     *
     * @var string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make($value);
    }

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function rate()
    {
        return $this->hasOne('App\Rate');
    }
}
