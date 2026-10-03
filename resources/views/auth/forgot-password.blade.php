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
                    Восстановление пароля
                </h1>

                <p class="rpg-auth-subtitle">
                    Введи email своего героя, и мы отправим ссылку
                    для создания нового пароля.
                </p>
            </div>

            {{-- Session Status --}}
            <x-auth-session-status
                class="rpg-auth-success mb-4"
                :status="session('status')"
            />

            {{-- Форма --}}
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

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
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
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

                {{-- Кнопка --}}
                <button
                    type="submit"
                    class="btn rpg-auth-button w-100"
                >
                     Отправить ссылку
                </button>
            </form>

            {{-- Назад ко входу --}}
            <div class="text-center mt-4">
                <a
                    href="{{ route('login') }}"
                    class="rpg-auth-link"
                >
                    ← Вернуться ко входу
                </a>
            </div>

            <div class="rpg-auth-footer">
                ✦ Life RPG ✦
            </div>

        </div>
    </div>
</x-guest-layout>