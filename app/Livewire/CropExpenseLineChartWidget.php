<?php

namespace App\Livewire;

use Filament\Widgets\ChartWidget;

class CropExpenseLineChartWidget extends ChartWidget
{
    protected ?string $heading = 'Crop Expense Line Chart Widget';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
