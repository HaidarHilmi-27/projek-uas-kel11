<x-guest-layout>
    <div class="max-w-md mx-auto bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl">
        <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">Daftar Akun Baru</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama Lengkap -->
            <div>
                <x-input-label for="name" :value="__('Nama Lengkap')" class="text-blue-800" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" />
                <p class="text-xs text-gray-500 mt-1">Masukkan nama lengkap Anda sesuai identitas.</p>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-blue-800" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autocomplete="username" />
                <p class="text-xs text-gray-500 mt-1">Gunakan email aktif untuk verifikasi dan login.</p>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-blue-800" />
                <x-text-input id="password" class="block mt-1 w-full" type="password"
                    name="password" required autocomplete="new-password" />
                <p class="text-xs text-gray-500 mt-1">Minimal 8 karakter. Gunakan kombinasi huruf & angka.</p>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Konfirmasi Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-blue-800" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <p class="text-xs text-gray-500 mt-1">Ulangi password yang sama untuk konfirmasi.</p>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Aksi -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-blue-600 hover:underline"
                    href="{{ route('login') }}">
                    {{ __('Sudah punya akun? Masuk') }}
                </a>

                <x-primary-button class="bg-blue-600 hover:bg-blue-700 text-white">
                    {{ __('Daftar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
