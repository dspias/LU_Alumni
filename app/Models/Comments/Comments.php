<?php

namespace App\Models\Comments;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comments\Traits\CommentsRelations;
use App\Models\Comments\Traits\CommentsScopes;


class Comments extends Model
{

    /**
     *  use CommentsRelations and CommentsScopes
     */
    
    use CommentsRelations, CommentsScopes;
    
    
}
