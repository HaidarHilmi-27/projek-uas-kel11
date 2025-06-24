<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;


class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Filament::serving(function () {
            Route::get('/admin/logout', function () {
                auth()->logout();

                // Redirect ke halaman login Breeze atau ke landing page
                return redirect('/login'); // atau ganti dengan '/' jika mau ke beranda
            })->name('filament.logout');
        });
    }
}
