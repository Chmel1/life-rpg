<x-guest-layout>

<x-auth-session-status
    class="mb-3"
    :status="session('status')"
/>

<div class="text-center mb-4">
    <h1 class="h3 mb-2">Вход</h1>
    <p class="text-body-secondary mb-0">
        Войдите в свой аккаунт Life RPG
    </p>
</div>

<form method="POST" action="{{ route('login') }}">
    @csrf

    {{-- Email --}}
    <div class="mb-3">
        <x-input-label
            for="email"
            :value="__('Email')"
        />

        <x-text-input
            id="email"
            type="email"
            name="email"
            :value="old('email')"
            required
            autofocus
            autocomplete="username"
        />

        <x-input-error
            :messages="$errors->get('email')"
        />
    </div>

    {{-- Password --}}
    <div class="mb-3">
        <x-input-label
            for="password"
            :value="__('Password')"
        />

        <x-text-input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
        />

        <x-input-error
            :messages="$errors->get('password')"
        />
    </div>

    {{-- Remember me --}}
    <div class="form-check mb-3">
        <input
            id="remember_me"
            type="checkbox"
            class="form-check-input"
            name="remember"
        >

        <label
            for="remember_me"
            class="form-check-label"
        >
            {{ __('Remember me') }}
        </label>
    </div>

    <div class="d-flex align-items-center justify-content-between">

        @if (Route::has('password.request'))
            <a
                href="{{ route('password.request') }}"
                class="link-secondary"
            >
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-primary-button>
            {{ __('Log in') }}
        </x-primary-button>

    </div>

</form>

</x-guest-layout>