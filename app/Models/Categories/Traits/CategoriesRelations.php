<?php

namespace App\Models\Categories\Traits;
use App\Models\Categories\Categories;

trait CategoriesRelations
{
    /**
     * Get the post that owns the categorie.
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Posts');
    }

}