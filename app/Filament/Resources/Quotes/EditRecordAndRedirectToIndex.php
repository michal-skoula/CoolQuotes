<?php

namespace App\Filament\Resources\Quotes;

use Filament\Resources\Pages\EditRecord;

class EditRecordAndRedirectToIndex extends EditRecord
{
	protected function getRedirectUrl(): string
	{
		return $this->getResource()::getUrl('index');
	}
}