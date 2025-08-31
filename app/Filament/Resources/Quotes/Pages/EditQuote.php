<?php

namespace App\Filament\Resources\Quotes\Pages;

use App\Filament\Resources\Quotes\EditRecordAndRedirectToIndex;
use App\Filament\Resources\Quotes\QuoteResource;
use Filament\Actions\DeleteAction;

class EditQuote extends EditRecordAndRedirectToIndex
{
    protected static string $resource = QuoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
