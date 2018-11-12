<?php

namespace App\Models\User\Traits;
use App\Models\User\User;

trait UserRelations
{
    

    /**
     * Get the posts for the blog user.
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Posts');
    }

    /**
     * Get the comments for the blog user.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comments');
    }

    /**
     * Get the events for the blog user.
     */
    public function events()
    {
        return $this->hasMany('App\Models\Events');
    }

}