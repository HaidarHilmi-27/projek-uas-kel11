<x-filament::page>
    <div class="text-2xl font-bold mb-4">Selamat Datang di Dashboard Parkiran!</div>

    <div>Total User: {{ $totalUser }}</div>
    <div>Total Kendaraan: {{ $totalKendaraan }}</div>
    <div>Total Slot Tersedia: {{ $totalSlotTersedia }}</div>
    <div class="mt-4 text-gray-600">Berikut adalah ringkasan informasi parkir Anda.</div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <x-filament::card>
            <div class="text-xl">Jumlah Kendaraan</div>
            <div class="text-3xl font-semibold text-primary">123</div>
        </x-filament::card>
        
        <x-filament::card>
            <div class="text-xl">Slot Tersedia</div>
            <div class="text-3xl font-semibold text-success">42</div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-xl">Total Pengguna</div>
            <div class="text-3xl font-semibold text-info">10</div>
        </x-filament::card>
    </div>
</x-filament::page>
