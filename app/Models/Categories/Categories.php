<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories\Traits\CategoriesRelations;
use App\Models\Categories\Traits\CategoriesScopes;

class Categories extends Model
{

	/**
	 * 	use categoriesRelations and CategoriesScopes
	 */
	
	use CategoriesRelations, CategoriesScopes;

}
