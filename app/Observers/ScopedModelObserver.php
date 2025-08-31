<?php

namespace App\Observers;

use App\Models\Quote;
use App\Models\ScopedModel;

class ScopedModelObserver
{
    /**
     * Handle the ScopedModel "creating" event.
     */
    public function creating(ScopedModel $scopedModel): void
    {
        if(auth()->hasUser()) {
			$scopedModel->user_id = auth()->id();
		}
    }
}
