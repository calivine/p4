<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function threads()
    {
        # User has many threads
        # Define a one-to-many relationship
        return $this->hasMany('App\Thread');
    }

    public function comments()
    {
        # User has many comments
        # Define a one-to-many relationship
        return $this->hasMany('App\Comment');
    }

    public function roles()
    {
        # User has many roles
        # Define a many-to-many relationship
        return $this->belongsToMany('App\Role')->withTimestamps();
    }


}
