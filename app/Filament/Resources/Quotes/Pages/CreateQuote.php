<?php

namespace App\Filament\Resources\Quotes\Pages;

use App\Filament\Resources\Quotes\CreateRecordAndRedirectToIndex;
use App\Filament\Resources\Quotes\QuoteResource;

class CreateQuote extends CreateRecordAndRedirectToIndex
{
    protected static string $resource = QuoteResource::class;
}
