<x-guest-layout>
    <div class="container">
        <div class="heading">Sign In</div>
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
            <!-- Email Address -->
            <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail" :value="old('email')" autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <!-- Password -->
            <input required="" class="input" type="password" name="password" id="password" placeholder="Password" autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Forgot Password -->
            <span class="forgot-password">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot Password ?') }}</a>
                @endif
            </span>

            <!-- Submit Button -->
            <input class="login-button" type="submit" value="Login">

            <div class="flex items-center justify-center mt-4">
                <a class="custom-link" href="{{ route('register') }}">
                     {{ __('Dont have an account?') }}
                </a>
            </div>

        </form>
    </div>
</x-guest-layout>
