<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{

    public function comments()
    {
        # Thread has many comments
        # Define a one-to-many relationship.
        return $this->hasMany('App\Comment');
    }
}
