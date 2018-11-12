<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;
use App\Models\Posts\Traits\PostsRelations;
use App\Models\Posts\Traits\PostsScopes;

class Posts extends Model
{
    /**
     *  use PostsRelations and PostsScopes
     */
    
    use PostsRelations, PostsScopes;
    
}
