<?php

namespace App\Models\Clubs;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clubs\Traits\ClubsRelations;
use App\Models\Clubs\Traits\ClubsScopes;

class Clubs extends Model
{

	/**
	 * 	use ClubsRelations and ClubsScopes
	 */
	
	use ClubsRelations, ClubsScopes;

}
