<?php

namespace App\Filament\Resources\AdminResource\Pages;

use App\Filament\Resources\AdminResource;
use Filament\Resources\Pages\Page;

class Dashboard extends Page
{
    protected static string $resource = AdminResource::class;

    protected static string $view = 'filament.resources.admin-resource.pages.dashboard';

//     public function getViewData(): array
// {
//     return [
//         'totalUser' => \App\Models\User::count(),
//         'totalKendaraan' => \App\Models\Kendaraan::count(),
//         // sesuaikan dengan model kamu
//     ];
// }

}
