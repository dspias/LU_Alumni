<?php

namespace App\Models\Profils;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profils\Traits\ProfilsRelations;
use App\Models\Profils\Traits\ProfilsScopes;

class Profils extends Model
{
	/**
	 * 	use ProfilsRelations and ProfilsScopes
	 */
	
	use ProfilsRelations, ProfilsScopes;
   
}
