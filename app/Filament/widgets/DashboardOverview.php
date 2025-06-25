<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\AreaParkir;
use App\Models\Jenis;
use App\Models\Kampus;
use App\Models\Kendaraan;
use App\Models\Transaksi;
use Carbon\Carbon;




class DashboardOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Area Parkir', AreaParkir::count()),
            Card::make('Total Jenis', Jenis::count()),
            Card::make('Total Kampus', Kampus::count()),
            Card::make('Total Kendaraan', Kendaraan::count()),
            Card::make('Transaksi Hari Ini', Transaksi::count()),
        ];
    }
}
