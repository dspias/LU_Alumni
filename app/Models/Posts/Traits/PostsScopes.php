<?php

namespace App\Models\Posts\Traits;

trait PostsScopes
{
	public function scopeDelete($query)
	{
		return $query->whereNotNull('deleted_at');
	}
}