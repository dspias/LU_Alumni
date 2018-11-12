<?php

namespace App\Models\Events\Traits;
use App\Models\Events\Events;

trait EventsRelations
{
   /**
     * Get the club that owns the evnet.
     */
    public function club()
    {
        return $this->belongsTo('App\Models\Clubs');
    }

    /**
     * Get the user that owns the evnet.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}