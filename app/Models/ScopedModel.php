<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

abstract class ScopedModel extends Model
{
	protected static function booted(): void
	{
		static::addGlobalScope(function($query) {
			if(auth()->hasUser()) {
				$query->where('user_id', auth()->id());
			}
		});
	}
}