<?php

namespace App\Models\Comments\Traits;
use App\Models\Comments\Comments;

trait CommentsRelations
{
    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Posts');
    }

    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}