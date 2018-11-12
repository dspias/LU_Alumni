<?php

namespace App\Models\Tags;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tags\Traits\TagsRelations;
use App\Models\Tags\Traits\TagsScopes;

class Tags extends Model
{
    /**
	 * 	use TagsRelations and TagsScopes
	 */
	
	use TagsRelations, TagsScopes;
}
