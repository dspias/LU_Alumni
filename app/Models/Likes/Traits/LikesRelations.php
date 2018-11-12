<?php

namespace App\Models\Likes\Traits;
use App\Models\Likes\Likes;

trait LikesRelations
{
     /**
     * Get the post that owns the like.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Posts');
    }

}