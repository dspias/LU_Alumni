<?php

namespace App\Models\Profils\Traits;
use App\Models\Profils\Profils;

trait ProfilsRelations
{
     /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}