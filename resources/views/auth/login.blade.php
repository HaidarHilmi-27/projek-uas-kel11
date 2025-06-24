<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-blue-300 px-4 py-8">
        <div class="w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

            <!-- Kolom Kiri: Info Kampus -->
            <div class="bg-blue-600 text-white flex flex-col items-center justify-center px-8 py-12">
                <div class="text-6xl mb-6">
                    <i class="fas fa-university"></i>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-2">Sistem Parkir Kampus</h2>
                <p class="text-center text-sm md:text-base">STT Nurul Fikri</p>
                <p class="text-center text-sm mt-1 md:text-base">Login sebagai admin untuk mengelola area parkir</p>
            </div>

            <!-- Kolom Kanan: Form Login -->
            <div class="bg-blue-50 px-8 py-10 md:px-12">
                <!-- Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                            required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-700">{{ __('Ingat saya') }}</span>
                        </label>
                    </div>

                    <!-- Aksi -->
                    <div class="flex items-center justify-between mt-6">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-600 hover:underline"
                                href="{{ route('password.request') }}">{{ __('Lupa password?') }}</a>
                        @endif

                        <x-primary-button class="bg-blue-600 hover:bg-blue-700 text-white">
                            {{ __('Masuk') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Daftar -->
                <div class="text-center mt-6 text-sm text-gray-600">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-blue-700 hover:underline">Daftar di sini</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
