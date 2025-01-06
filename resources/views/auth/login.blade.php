<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-white" />
            <x-text-input id="email" class="mt-1 block w-full bg-gray-700 border-gray-600 text-gray-200 focus:border-yellow-500 focus:ring focus:ring-yellow-500/50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white" />
            <x-text-input id="password" class="mt-1 block w-full bg-gray-700 border-gray-600 text-gray-200 focus:border-yellow-500 focus:ring focus:ring-yellow-500/50" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#FCD535] shadow-sm focus:ring-[#FCD535]" name="remember">
            <span class="ms-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-200 hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FCD535]" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>

        <div class="flex items-center justify-between mt-4">

            <div class="flex items-center justify-center">
                <a href="{{ route('auth.google') }}" class="inline-flex items-center px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-500 transition-colors duration-200">
                    <i class="fab fa-google mr-2"></i> Login with Google
                </a>
            </div>
            <x-primary-button class="ms-3 bg-[#FCD535] text-gray-900 hover:bg-[#FCD535]/80">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
