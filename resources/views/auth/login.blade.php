<x-guest-layout>

    <style>

        /* =========================
           LOGIN PAGE
           ========================= */

        .rpg-auth-page {
            position: relative;

            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;

            padding: 30px 16px;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(13, 202, 240, 0.10),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 80% 75%,
                    rgba(111, 66, 193, 0.12),
                    transparent 32%
                ),
                #07111f;

            color: #e8eef7;
        }
        .navbar-brand-icon {
            width: 100px;
            height: 100px;
            object-fit: contain;
            display: block;
        }


        /* =========================
           BACKGROUND DECORATION
           ========================= */

        .rpg-auth-page::before {
            content: "";

            position: absolute;

            width: 520px;
            height: 520px;

            top: -260px;
            left: -180px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(13, 202, 240, 0.10),
                    transparent 68%
                );

            pointer-events: none;
        }


        .rpg-auth-page::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    135deg,
                    transparent 0 48%,
                    rgba(13, 202, 240, 0.025) 48% 49%,
                    transparent 49%
                ),
                linear-gradient(
                    35deg,
                    transparent 0 70%,
                    rgba(111, 66, 193, 0.025) 70% 71%,
                    transparent 71%
                );

            pointer-events: none;
        }


        /* =========================
           AUTH CARD
           ========================= */

        .rpg-auth-container {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 440px;
        }


        .rpg-auth-card {
            position: relative;

            padding: 38px;

            border-radius: 22px;

            background:
                linear-gradient(
                    145deg,
                    rgba(17, 35, 57, 0.98),
                    rgba(7, 19, 34, 0.98)
                );

            border:
                1px solid rgba(13, 202, 240, 0.18);

            box-shadow:
                0 30px 80px rgba(0, 0, 0, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.025);

            backdrop-filter: blur(10px);
        }


        .rpg-auth-card::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            top: -90px;
            right: -70px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(13, 202, 240, 0.13),
                    transparent 70%
                );

            pointer-events: none;
        }


        /* =========================
           LOGO
           ========================= */

        .rpg-auth-logo {
            width: 76px;
            height: 76px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 22px;

            border-radius: 20px;

            font-size: 38px;

            background:
                linear-gradient(
                    145deg,
                    #193c56,
                    #0b1d30
                );

            border:
                1px solid rgba(13, 202, 240, 0.35);

            box-shadow:
                0 0 35px rgba(13, 202, 240, 0.12),
                inset 0 0 25px rgba(13, 202, 240, 0.05);
        }


        .rpg-auth-title {
            margin: 0;

            color: #f5f8fc;

            font-family:
                Georgia,
                "Times New Roman",
                serif;

            font-size: 2rem;
            font-weight: 700;

            letter-spacing: 0.02em;

            text-align: center;
        }


        .rpg-auth-subtitle {
            margin-top: 7px;
            margin-bottom: 30px;

            color: #71869c;

            font-size: 0.9rem;

            text-align: center;
        }


        /* =========================
           DIVIDER
           ========================= */

        .rpg-auth-divider {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 25px;

            color: #56677a;

            font-size: 0.65rem;
            font-weight: 700;

            letter-spacing: 0.16em;

            text-transform: uppercase;
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
                    rgba(120, 150, 190, 0.18)
                );
        }


        .rpg-auth-divider::after {
            background:
                linear-gradient(
                    90deg,
                    rgba(120, 150, 190, 0.18),
                    transparent
                );
        }


        /* =========================
           FORM
           ========================= */

        .rpg-auth-form-group {
            margin-bottom: 20px;
        }


        .rpg-auth-label {
            display: block;

            margin-bottom: 8px;

            color: #a9b8c8;

            font-size: 0.78rem;
            font-weight: 700;

            letter-spacing: 0.04em;

            text-transform: uppercase;
        }


        .rpg-auth-input {
            width: 100%;

            min-height: 48px;

            padding: 11px 14px;

            color: #e8eef7;

            background:
                rgba(3, 13, 25, 0.65);

            border:
                1px solid rgba(120, 150, 190, 0.16);

            border-radius: 10px;

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }


        .rpg-auth-input::placeholder {
            color: #526274;
        }


        .rpg-auth-input:focus {
            color: #eef7ff;

            background:
                rgba(3, 13, 25, 0.82);

            border-color:
                rgba(13, 202, 240, 0.55);

            box-shadow:
                0 0 0 3px rgba(13, 202, 240, 0.08),
                0 0 18px rgba(13, 202, 240, 0.07);
        }


        /* =========================
           REMEMBER
           ========================= */

        .rpg-auth-remember {
            display: flex;
            align-items: center;

            gap: 9px;

            margin-bottom: 25px;
        }


        .rpg-auth-checkbox {
            width: 16px;
            height: 16px;

            margin: 0;

            appearance: none;

            border:
                1px solid rgba(120, 150, 190, 0.3);

            border-radius: 4px;

            background:
                rgba(3, 13, 25, 0.6);

            cursor: pointer;

            transition:
                background 0.2s ease,
                border-color 0.2s ease;
        }


        .rpg-auth-checkbox:checked {
            background:
                #0dcaf0;

            border-color:
                #0dcaf0;

            box-shadow:
                0 0 10px rgba(13, 202, 240, 0.25);
        }


        .rpg-auth-remember label {
            color: #71869c;

            font-size: 0.82rem;

            cursor: pointer;
        }


        /* =========================
           BUTTON
           ========================= */

        .rpg-auth-button {
            width: 100%;

            min-height: 50px;

            display: flex;
            align-items: center;
            justify-content: center;

            border:
                1px solid rgba(13, 202, 240, 0.55);

            border-radius: 10px;

            color: #e9fbff;

            background:
                linear-gradient(
                    135deg,
                    rgba(13, 202, 240, 0.16),
                    rgba(111, 66, 193, 0.16)
                );

            font-size: 0.9rem;
            font-weight: 700;

            letter-spacing: 0.05em;

            cursor: pointer;

            transition:
                transform 0.2s ease,
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }


        .rpg-auth-button:hover {
            transform: translateY(-1px);

            border-color:
                rgba(13, 202, 240, 0.9);

            background:
                linear-gradient(
                    135deg,
                    rgba(13, 202, 240, 0.24),
                    rgba(111, 66, 193, 0.24)
                );

            box-shadow:
                0 0 25px rgba(13, 202, 240, 0.13);
        }


        .rpg-auth-button:active {
            transform: translateY(1px);
        }


        /* =========================
           FORGOT PASSWORD
           ========================= */

        .rpg-auth-forgot {
            display: block;

            margin-top: 18px;

            color: #71869c;

            font-size: 0.78rem;

            text-align: center;

            text-decoration: none;

            transition:
                color 0.2s ease;
        }


        .rpg-auth-forgot:hover {
            color: #48d9ef;
        }


        /* =========================
           STATUS / ERRORS
           ========================= */

        .rpg-auth-alert {
            margin-bottom: 20px;

            padding: 11px 13px;

            color: #b9eff8;

            background:
                rgba(13, 202, 240, 0.06);

            border:
                1px solid rgba(13, 202, 240, 0.18);

            border-radius: 9px;

            font-size: 0.82rem;
        }


        .rpg-auth-error {
            margin-top: 6px;

            color: #f08c9a;

            font-size: 0.75rem;
        }


        /* =========================
           FOOTER
           ========================= */

        .rpg-auth-footer {
            margin-top: 22px;

            color: #4f6073;

            font-size: 0.7rem;

            text-align: center;
        }


        .rpg-auth-footer span {
            color: #0dcaf0;
        }


        /* =========================
           MOBILE
           ========================= */

        @media (max-width: 576px) {

            .rpg-auth-card {
                padding: 28px 20px;

                border-radius: 18px;
            }

            .rpg-auth-logo {
                width: 66px;
                height: 66px;

                font-size: 32px;
            }

            .rpg-auth-title {
                font-size: 1.7rem;
            }

        }

    </style>


    <div class="rpg-auth-page">

        <div class="rpg-auth-container">

            <div class="rpg-auth-card">

                {{-- LOGO --}}

                <div class="rpg-auth-logo">
                    <img
                src="{{ asset('images/life-rpg-icon.png') }}"
                alt="Life RPG"
                class="navbar-brand-icon"
            >
                </div>


                {{-- HEADER --}}

                <h1 class="rpg-auth-title">
                    Вход в Life RPG
                </h1>

                <p class="rpg-auth-subtitle">
                    Продолжи свой путь. Твой прогресс ждёт тебя.
                </p>


                {{-- STATUS --}}

                <x-auth-session-status
                    class="rpg-auth-alert"
                    :status="session('status')"
                />


                <div class="rpg-auth-divider">
                    Вход героя
                </div>


                {{-- FORM --}}

                <form method="POST" action="{{ route('login') }}">

                    @csrf


                    {{-- EMAIL --}}

                    <div class="rpg-auth-form-group">

                        <label
                            for="email"
                            class="rpg-auth-label"
                        >
                            Email
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="rpg-auth-input"
                            placeholder="Введите email"
                            required
                            autofocus
                            autocomplete="username"
                        >

                        @if ($errors->has('email'))

                            <div class="rpg-auth-error">
                                {{ $errors->first('email') }}
                            </div>

                        @endif

                    </div>


                    {{-- PASSWORD --}}

                    <div class="rpg-auth-form-group">

                        <label
                            for="password"
                            class="rpg-auth-label"
                        >
                            Пароль
                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="rpg-auth-input"
                            placeholder="Введите пароль"
                            required
                            autocomplete="current-password"
                        >

                        @if ($errors->has('password'))

                            <div class="rpg-auth-error">
                                {{ $errors->first('password') }}
                            </div>

                        @endif

                    </div>


                    {{-- REMEMBER --}}

                    <div class="rpg-auth-remember">

                        <input
                            id="remember_me"
                            type="checkbox"
                            class="rpg-auth-checkbox"
                            name="remember"
                        >

                        <label for="remember_me">
                            Запомнить меня
                        </label>

                    </div>


                    {{-- LOGIN --}}

                    <button
                        type="submit"
                        class="rpg-auth-button"
                    >
                        Войти в игру
                    </button>


                    {{-- FORGOT PASSWORD --}}

                    @if (Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            class="rpg-auth-forgot"
                        >
                            Забыли пароль?
                        </a>

                        <a
                            href="{{ route('register') }}"
                            class="rpg-auth-forgot"
                        >
                            Еще нет аккаунта?
                        </a>

                    @endif

                </form>


                <div class="rpg-auth-footer">
                    <span>✦</span>
                    Life RPG
                    <span>✦</span>
                </div>

            </div>

        </div>

    </div>

</x-guest-layout>