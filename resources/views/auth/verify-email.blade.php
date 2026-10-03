<x-guest-layout>
    <style>
        .rpg-auth-info {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 14px 16px;
    border: 1px solid rgba(13, 202, 240, 0.25);
    border-radius: 12px;
    background: rgba(13, 202, 240, 0.06);
    color: #a9c7d8;
    font-size: 0.9rem;
    line-height: 1.5;
}

.rpg-auth-logout-button {
    background: none;
    border: 0;
    padding: 0;
    cursor: pointer;
}
    </style>
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
                    Подтверждение email
                </h1>

                <p class="rpg-auth-subtitle">
                    Почти готово, герой.
                    Подтверди свой email, чтобы открыть полный доступ
                    к своему персонажу.
                </p>
            </div>

            {{-- Основное сообщение --}}
            <div class="rpg-auth-info mb-4">
                📜
                <span>
                    Мы отправили письмо со ссылкой для подтверждения
                    на указанный тобой email.
                </span>
            </div>

            {{-- Успешная повторная отправка --}}
            @if (session('status') === 'verification-link-sent')
                <div class="rpg-auth-success mb-4">
                    ✓ Новая ссылка для подтверждения отправлена
                    на твой email.
                </div>
            @endif

            {{-- Повторная отправка --}}
            <form
                method="POST"
                action="{{ route('verification.send') }}"
            >
                @csrf

                <button
                    type="submit"
                    class="btn rpg-auth-button w-100"
                >
                    ✉ Отправить письмо повторно
                </button>
            </form>

            {{-- Выход --}}
            <div class="text-center mt-4">
                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >
                    @csrf

                    <button
                        type="submit"
                        class="rpg-auth-link rpg-auth-logout-button"
                    >
                        Выйти из аккаунта
                    </button>
                </form>
            </div>

            <div class="rpg-auth-footer">
                ✦ Life RPG ✦
            </div>

        </div>
    </div>
</x-guest-layout>