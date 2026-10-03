<x-app-layout>
@php
    $character = Auth::user()->character;
@endphp
    <style>
        .rpg-profile-page {
            min-height: calc(100vh - 56px);
            padding: 40px 0 60px;

            background:
                radial-gradient(
                    circle at 15% 10%,
                    rgba(13, 202, 240, 0.07),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 85% 20%,
                    rgba(111, 66, 193, 0.09),
                    transparent 30%
                ),
                #07111f;

            color: #e8eef7;
        }

        .rpg-profile-header {
            margin-bottom: 28px;
        }

        .rpg-profile-eyebrow {
            margin-bottom: 6px;

            color: #22d3ee;

            font-size: 0.75rem;
            font-weight: 800;

            letter-spacing: 0.15em;
            text-transform: uppercase;
        }

        .rpg-profile-title {
            margin: 0;

            color: #f1f5f9;

            font-family: Georgia, "Times New Roman", serif;

            font-size: 2.4rem;
            font-weight: 700;
        }

        .rpg-profile-subtitle {
            margin-top: 8px;

            color: #71859b;

            font-size: 0.95rem;
        }

        .rpg-profile-grid {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .rpg-profile-card {
            position: relative;
            overflow: hidden;

            padding: 28px;

            border-radius: 16px;

            background:
                linear-gradient(
                    145deg,
                    rgba(17, 45, 70, 0.96),
                    rgba(7, 20, 36, 0.98)
                );

            border: 1px solid rgba(100, 130, 165, 0.15);

            box-shadow:
                0 15px 45px rgba(0, 0, 0, 0.30),
                inset 0 1px 0 rgba(255, 255, 255, 0.025);
        }

        .rpg-profile-card::before {
            content: "";

            position: absolute;

            top: -80px;
            right: -80px;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            background: rgba(13, 202, 240, 0.045);

            filter: blur(25px);

            pointer-events: none;
        }

        .rpg-profile-card-content {
            position: relative;
            z-index: 1;
        }

        .rpg-profile-section-header {
            display: flex;
            align-items: center;
            gap: 15px;

            margin-bottom: 22px;
        }

        .rpg-profile-icon {
            width: 44px;
            height: 44px;

            flex: 0 0 44px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 11px;

            color: #22d3ee;

            background: rgba(13, 202, 240, 0.07);

            border: 1px solid rgba(13, 202, 240, 0.20);

            font-size: 20px;
        }

        .rpg-profile-section-title {
            margin: 0;

            color: #f1f5f9;

            font-family: Georgia, "Times New Roman", serif;

            font-size: 1.25rem;
            font-weight: 700;
        }

        .rpg-profile-section-description {
            margin: 3px 0 0;

            color: #71859b;

            font-size: 0.82rem;
        }

        /*
         * Breeze partials still contain their own
         * Tailwind classes. These rules override the
         * most important visual elements.
         */

        .rpg-profile-card label {
            color: #b9c8d8 !important;

            font-size: 0.82rem;

            font-weight: 700;
        }

        .rpg-profile-card input {
            color: #e8eef7 !important;

            background: rgba(3, 12, 23, 0.65) !important;

            border: 1px solid rgba(100, 130, 165, 0.20) !important;

            border-radius: 10px !important;

            box-shadow: none !important;
        }

        .rpg-profile-card input:focus {
            border-color: rgba(13, 202, 240, 0.55) !important;

            box-shadow:
                0 0 0 3px rgba(13, 202, 240, 0.08),
                0 0 25px rgba(13, 202, 240, 0.05) !important;
        }

        .rpg-profile-card input::placeholder {
            color: #53677c !important;
        }

        .rpg-profile-card button {
            border-radius: 9px !important;
        }

        .rpg-profile-danger {
            border-color: rgba(220, 53, 69, 0.18);
        }

        .rpg-profile-danger .rpg-profile-icon {
            color: #ff6b7a;

            background: rgba(220, 53, 69, 0.07);

            border-color: rgba(220, 53, 69, 0.20);
        }

        @media (max-width: 767.98px) {
            .rpg-profile-page {
                padding: 25px 0 40px;
            }

            .rpg-profile-title {
                font-size: 2rem;
            }

            .rpg-profile-card {
                padding: 22px 18px;
            }
        }
    </style>

    <div class="rpg-profile-page">

        <div class="container">

            {{-- HEADER --}}
            <div class="rpg-profile-header">

                <div class="rpg-profile-eyebrow">
                    ⚙ Настройки героя
                </div>

                <h1 class="rpg-profile-title">
                    Профиль
                </h1>

                <div class="rpg-profile-subtitle">
                    Управляй своей учётной записью и безопасностью персонажа.
                </div>

            </div>

            {{-- PROFILE SECTIONS --}}
            <div class="rpg-profile-grid">

                {{-- PROFILE INFORMATION --}}
                <div class="rpg-profile-card">

                    <div class="rpg-profile-card-content">

                        <div class="rpg-profile-section-header">

                            <div class="rpg-profile-icon">
                                @if($character->avatar)
                                    <img
                                        src="{{ asset('storage/' . $character->avatar) }}"
                                        alt="Аватар"
                                        class="rpg-profile-icon"
                                    >
                                @else
                                    🍔
                                @endif
                            </div>

                            <div>
                                <h2 class="rpg-profile-section-title">
                                    Данные профиля
                                </h2>

                                <p class="rpg-profile-section-description">
                                    Измени имя и адрес электронной почты.
                                </p>
                            </div>

                        </div>

                        @include(
                            'profile.partials.update-profile-information-form'
                        )

                    </div>

                </div>

                {{-- PASSWORD --}}
                <div class="rpg-profile-card">

                    <div class="rpg-profile-card-content">

                        <div class="rpg-profile-section-header">

                            <div class="rpg-profile-icon">
                                🔐
                            </div>

                            <div>
                                <h2 class="rpg-profile-section-title">
                                    Безопасность
                                </h2>

                                <p class="rpg-profile-section-description">
                                    Измени пароль своей учётной записи.
                                </p>
                            </div>

                        </div>

                        @include(
                            'profile.partials.update-password-form'
                        )

                    </div>

                </div>

                {{-- DELETE ACCOUNT --}}
                <div class="rpg-profile-card rpg-profile-danger">

                    <div class="rpg-profile-card-content">

                        <div class="rpg-profile-section-header">

                            <div class="rpg-profile-icon">
                                ⚠
                            </div>

                            <div>
                                <h2 class="rpg-profile-section-title">
                                    Опасная зона
                                </h2>

                                <p class="rpg-profile-section-description">
                                    Удаление аккаунта необратимо.
                                </p>
                            </div>

                        </div>

                        @include(
                            'profile.partials.delete-user-form'
                        )

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>