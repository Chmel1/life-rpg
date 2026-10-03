<x-guest-layout>

    <style>
        .rpg-auth-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;

            background:
                radial-gradient(
                    circle at 15% 20%,
                    rgba(13, 202, 240, 0.08),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(111, 66, 193, 0.12),
                    transparent 30%
                ),
                #07111f;

            color: #e8eef7;
        }

        .rpg-auth-container {
            width: 100%;
            max-width: 500px;
        }

        .rpg-auth-card {
            position: relative;
            overflow: hidden;

            padding: 42px 40px;

            border-radius: 22px;

            background:
                linear-gradient(
                    145deg,
                    rgba(17, 45, 70, 0.98),
                    rgba(7, 20, 36, 0.98)
                );

            border: 1px solid rgba(13, 202, 240, 0.20);

            box-shadow:
                0 30px 80px rgba(0, 0, 0, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.03);
        }

        .rpg-auth-card::before {
            content: "";
            position: absolute;

            top: -120px;
            right: -120px;

            width: 260px;
            height: 260px;

            border-radius: 50%;

            background: rgba(111, 66, 193, 0.10);

            filter: blur(30px);

            pointer-events: none;
        }

        .rpg-auth-card::after {
            content: "";
            position: absolute;

            bottom: -120px;
            left: -120px;

            width: 260px;
            height: 260px;

            border-radius: 50%;

            background: rgba(13, 202, 240, 0.07);

            filter: blur(30px);

            pointer-events: none;
        }

        .rpg-auth-content {
            position: relative;
            z-index: 1;
        }

        .rpg-auth-logo {
            width: 72px;
            height: 72px;

            margin: 0 auto 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            font-size: 36px;

            background:
                linear-gradient(
                    145deg,
                    #193c56,
                    #0b1d30
                );

            border: 1px solid rgba(13, 202, 240, 0.30);

            box-shadow:
                0 0 35px rgba(13, 202, 240, 0.12),
                inset 0 0 25px rgba(13, 202, 240, 0.05);
        }

        .rpg-auth-title {
            margin: 0;

            text-align: center;

            color: #f1f5f9;

            font-family: Georgia, "Times New Roman", serif;

            font-size: 2rem;
            font-weight: 700;

            letter-spacing: 0.02em;
        }

        .rpg-auth-subtitle {
            margin: 10px 0 28px;

            text-align: center;

            color: #8fa4bb;

            font-size: 0.95rem;
        }

        .rpg-auth-divider {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 24px;

            color: #60758c;

            font-size: 0.72rem;
            font-weight: 700;

            text-transform: uppercase;
            letter-spacing: 0.16em;
        }

        .rpg-auth-divider::before,
        .rpg-auth-divider::after {
            content: "";

            flex: 1;

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(13, 202, 240, 0.25)
                );
        }

        .rpg-auth-divider::after {
            background:
                linear-gradient(
                    90deg,
                    rgba(13, 202, 240, 0.25),
                    transparent
                );
        }

        .rpg-auth-label {
            display: block;

            margin-bottom: 8px;

            color: #b9c8d8;

            font-size: 0.82rem;
            font-weight: 700;

            letter-spacing: 0.03em;
        }

        .rpg-auth-input {
            width: 100%;

            padding: 12px 14px;

            border-radius: 10px;

            color: #e8eef7;

            background: rgba(3, 12, 23, 0.65);

            border: 1px solid rgba(100, 130, 165, 0.20);

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }

        .rpg-auth-input::placeholder {
            color: #53677c;
        }

        .rpg-auth-input:focus {
            color: #e8eef7;

            background: rgba(3, 12, 23, 0.85);

            border-color: rgba(13, 202, 240, 0.55);

            box-shadow:
                0 0 0 3px rgba(13, 202, 240, 0.08),
                0 0 25px rgba(13, 202, 240, 0.05);
        }

        .rpg-auth-field {
            margin-bottom: 18px;
        }

        .rpg-auth-error {
            margin-top: 6px;

            color: #ff7b8a;

            font-size: 0.8rem;
        }

        .rpg-auth-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;

            margin-top: 26px;
        }

        .rpg-auth-login-link {
            color: #7f9ab5;

            font-size: 0.85rem;

            text-decoration: none;

            transition:
                color 0.2s ease;
        }

        .rpg-auth-login-link:hover {
            color: #22d3ee;
        }

        .rpg-auth-button {
            padding: 11px 22px;

            border-radius: 10px;

            color: #06111d;

            background:
                linear-gradient(
                    135deg,
                    #22d3ee,
                    #0dcaf0
                );

            border: 1px solid rgba(34, 211, 238, 0.55);

            font-size: 0.9rem;
            font-weight: 800;

            letter-spacing: 0.02em;

            box-shadow:
                0 8px 25px rgba(13, 202, 240, 0.15);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                filter 0.2s ease;
        }

        .rpg-auth-button:hover {
            color: #06111d;

            transform: translateY(-1px);

            filter: brightness(1.08);

            box-shadow:
                0 10px 30px rgba(13, 202, 240, 0.25);
        }

        .rpg-auth-button:active {
            transform: translateY(0);
        }

        .rpg-auth-footer {
            margin-top: 28px;

            text-align: center;

            color: #53677c;

            font-size: 0.72rem;

            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .rpg-auth-footer span {
            margin: 0 6px;

            color: #7c3aed;
        }

        @media (max-width: 575.98px) {
            .rpg-auth-page {
                padding: 20px 15px;
            }

            .rpg-auth-card {
                padding: 32px 24px;

                border-radius: 18px;
            }

            .rpg-auth-title {
                font-size: 1.7rem;
            }

            .rpg-auth-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .rpg-auth-button {
                width: 100%;
            }

            .rpg-auth-login-link {
                text-align: center;
            }
        }
    </style>

    <div class="rpg-auth-page">

        <div class="rpg-auth-container">

            <div class="rpg-auth-card">

                <div class="rpg-auth-content">

                    <div>
                        <img
                            src="{{ asset('images/life-rpg-icon.png') }}"
                            alt="Life RPG"
                            class="rpg-auth-logo"
                        >
                    </div>

                    <h1 class="rpg-auth-title">
                        Создание героя
                    </h1>

                    <p class="rpg-auth-subtitle">
                        Начни свой путь и создай своего персонажа.
                    </p>

                    <div class="rpg-auth-divider">
                        Новый герой
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Name --}}
                        <div class="rpg-auth-field">

                            <label
                                for="name"
                                class="rpg-auth-label"
                            >
                                Имя героя
                            </label>

                            <input
                                id="name"
                                class="rpg-auth-input"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Введи имя героя"
                            >

                            @error('name')
                                <div class="rpg-auth-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- Email --}}
                        <div class="rpg-auth-field">

                            <label
                                for="email"
                                class="rpg-auth-label"
                            >
                                Email
                            </label>

                            <input
                                id="email"
                                class="rpg-auth-input"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="username"
                                placeholder="hero@example.com"
                            >

                            @error('email')
                                <div class="rpg-auth-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- Password --}}
                        <div class="rpg-auth-field">

                            <label
                                for="password"
                                class="rpg-auth-label"
                            >
                                Пароль
                            </label>

                            <input
                                id="password"
                                class="rpg-auth-input"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Создай пароль"
                            >

                            @error('password')
                                <div class="rpg-auth-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- Confirm Password --}}
                        <div class="rpg-auth-field">

                            <label
                                for="password_confirmation"
                                class="rpg-auth-label"
                            >
                                Подтверждение пароля
                            </label>

                            <input
                                id="password_confirmation"
                                class="rpg-auth-input"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Повтори пароль"
                            >

                            @error('password_confirmation')
                                <div class="rpg-auth-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="rpg-auth-actions">

                            <a
                                href="{{ route('login') }}"
                                class="rpg-auth-login-link"
                            >
                                Уже есть аккаунт?
                            </a>

                            <button
                                type="submit"
                                class="rpg-auth-button"
                            >
                                Создать героя
                            </button>

                        </div>

                    </form>

                    <div class="rpg-auth-footer">
                        <span>✦</span>
                        Life RPG
                        <span>✦</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</x-guest-layout>