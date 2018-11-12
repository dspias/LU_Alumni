<?php

namespace App\Models\Tags\Traits;
use App\Models\Tags\Tags;

trait TagsRelations
{
    /**
     * The posts that belong to the tags.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Posts');
    }

}