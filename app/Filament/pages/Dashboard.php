<?php

namespace App\Filament\Pages;   

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\DashboardOverview;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            DashboardOverview::class,
        ];
    }
}
