<?php

namespace App\Filament\Widgets;

use App\Models\Quote;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NumberOfQuotesWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
				label: 'Total Quotes',
				value: count(auth()->user()->quotes))
        ];
    }
}
