<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
{
	/** @use HasFactory<\Database\Factories\QuoteFactory> */
	use HasFactory;

	protected $fillable = ['quote', 'author'];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
