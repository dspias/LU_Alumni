<?php

namespace App\Models\Clubs\Traits;
use App\Models\Clubs\Clubs;

trait ClubsRelations
{
    /**
     * Get the events for the blog club.
     */
    public function events()
    {
        return $this->hasMany('App\Models\Events');
    }
}