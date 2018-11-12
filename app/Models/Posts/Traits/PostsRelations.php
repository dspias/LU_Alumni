<?php

namespace App\Models\Posts\Traits;
use App\Models\Posts\Posts;

trait PostsRelations
{
    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the categories for the blog post.
     */
    public function categorie()
    {
        return $this->belongsTo('App\Models\Categories');
    }

    /**
     * Get the likes for the blog post.
     */
    public function likes()
    {
        return $this->hasMany('App\Models\Likes');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comments');
    }

    /**
     * The tags that belong to the posts.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags');
    }

}