<x-guest-layout>
    <div class="rpg-auth-page">
        <div class="rpg-auth-card">

            {{-- Логотип --}}
            <div>
                <img
                    src="{{ asset('images/life-rpg-icon.png') }}"
                    alt="Life RPG"
                    class="rpg-auth-logo"
                >
            </div>

            {{-- Заголовок --}}
            <div class="text-center mb-4">
                <h1 class="rpg-auth-title">
                    Новый пароль
                </h1>

                <p class="rpg-auth-subtitle">
                    Создай новый пароль для своего героя
                    и продолжи свой путь.
                </p>
            </div>

            <form
                method="POST"
                action="{{ route('password.store') }}"
            >
                @csrf

                {{-- Password Reset Token --}}
                <input
                    type="hidden"
                    name="token"
                    value="{{ $request->route('token') }}"
                >

                {{-- Email --}}
                <div class="mb-4">
                    <label
                        for="email"
                        class="rpg-auth-label"
                    >
                        Email
                    </label>

                    <input
                        id="email"
                        class="form-control rpg-auth-input"
                        type="email"
                        name="email"
                        value="{{ old('email', $request->email) }}"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="hero@example.com"
                    >

                    @if ($errors->get('email'))
                        <div class="rpg-auth-error mt-2">
                            @foreach ($errors->get('email') as $error)
                                <div>⚠ {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Password --}}
                <div class="mb-4">
                    <label
                        for="password"
                        class="rpg-auth-label"
                    >
                        Новый пароль
                    </label>

                    <input
                        id="password"
                        class="form-control rpg-auth-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Введи новый пароль"
                    >

                    @if ($errors->get('password'))
                        <div class="rpg-auth-error mt-2">
                            @foreach ($errors->get('password') as $error)
                                <div>⚠ {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Confirm Password --}}
                <div class="mb-4">
                    <label
                        for="password_confirmation"
                        class="rpg-auth-label"
                    >
                        Подтверждение пароля
                    </label>

                    <input
                        id="password_confirmation"
                        class="form-control rpg-auth-input"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Повтори новый пароль"
                    >

                    @if ($errors->get('password_confirmation'))
                        <div class="rpg-auth-error mt-2">
                            @foreach ($errors->get('password_confirmation') as $error)
                                <div>⚠ {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Кнопка --}}
                <button
                    type="submit"
                    class="btn rpg-auth-button w-100"
                >
                    ⚔ Установить новый пароль
                </button>
            </form>

            <div class="rpg-auth-footer">
                ✦ Life RPG ✦
            </div>

        </div>
    </div>
</x-guest-layout>