<x-filament::page>
    <div class="text-2xl font-bold">Selamat datang, {{ auth()->user()->name }} 🎉</div>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <x-filament::card>
            <div class="text-lg font-semibold">Total Area Parkir</div>
            <div class="text-2xl text-blue-600 font-bold">42</div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-semibold">Jumlah Kendaraan</div>
            <div class="text-2xl text-green-600 font-bold">123</div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-semibold">Transaksi Hari Ini</div>
            <div class="text-2xl text-red-600 font-bold">18</div>
        </x-filament::card>
    </div>
</x-filament::page>
