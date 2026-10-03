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
                    Подтверждение пароля
                </h1>

                <p class="rpg-auth-subtitle">
                    Это защищённая область Life RPG.
                    Подтверди пароль, чтобы продолжить.
                </p>
            </div>

            {{-- Форма --}}
            <form
                method="POST"
                action="{{ route('password.confirm') }}"
            >
                @csrf

                {{-- Password --}}
                <div class="mb-4">
                    <label
                        for="password"
                        class="rpg-auth-label"
                    >
                        Пароль
                    </label>

                    <input
                        id="password"
                        class="form-control rpg-auth-input"
                        type="password"
                        name="password"
                        required
                        autofocus
                        autocomplete="current-password"
                        placeholder="Введи свой пароль"
                    >

                    @if ($errors->get('password'))
                        <div class="rpg-auth-error mt-2">
                            @foreach ($errors->get('password') as $error)
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
                     Подтвердить
                </button>
            </form>

            <div class="rpg-auth-footer">
                ✦ Life RPG ✦
            </div>

        </div>
    </div>
</x-guest-layout>