<?php

namespace App\Filament\Resources\Quotes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class QuoteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('quote')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('author')
                    ->required(),
            ]);
    }
}
