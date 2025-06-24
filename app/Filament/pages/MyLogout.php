<?php

namespace App\Filament\Pages;

use Filament\Pages\Actions\Action;
use Illuminate\Support\Facades\Auth;

class MyLogout extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'logout';
    }

    public function handle(): mixed
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/'); // ubah ke '/login' jika ingin ke login
    }
}
