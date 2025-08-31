<?php

namespace App\Models;

use App\Observers\ScopedModelObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends ScopedModel
{
	/** @use HasFactory<\Database\Factories\QuoteFactory> */
	use HasFactory;

	protected $fillable = ['quote', 'author'];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
