<?php

namespace App\Models\Likes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Likes\Traits\LikesRelations;
use App\Models\Likes\Traits\LikesScopes;

class Likes extends Model
{
   /**
	 * 	use LikesRelations and LikesScopes
	 */
	
	use LikesRelations, LikesScopes;

}
