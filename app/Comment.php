<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function thread()
    {
        # Comment belongs to Thread
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Thread');
    }

    public function user()
    {
        # Comment belongs to User
        # Define an inverse one-to-many relationship
        return $this->belongsTo('App\User');
    }
}
