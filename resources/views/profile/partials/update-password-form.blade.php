<section>

    <style>
        .rpg-password-section {
            width: 100%;
        }

        .rpg-password-description {
            max-width: 650px;

            margin-bottom: 22px;

            color: #8a9caf;

            font-size: 0.9rem;
            line-height: 1.6;
        }

        .rpg-password-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .rpg-password-field {
            width: 100%;
        }

        .rpg-password-label {
            display: block;

            margin-bottom: 8px;

            color: #b9c8d8;

            font-size: 0.82rem;
            font-weight: 700;

            letter-spacing: 0.02em;
        }

        .rpg-password-input {
            width: 100%;

            padding: 12px 14px;

            color: #e8eef7;

            background: rgba(3, 12, 23, 0.65);

            border: 1px solid rgba(100, 130, 165, 0.20);

            border-radius: 10px;

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }

        .rpg-password-input:focus {
            color: #e8eef7;

            background: rgba(3, 12, 23, 0.85);

            border-color: rgba(13, 202, 240, 0.55);

            box-shadow:
                0 0 0 3px rgba(13, 202, 240, 0.08),
                0 0 25px rgba(13, 202, 240, 0.05);
        }

        .rpg-password-input::placeholder {
            color: #53677c;
        }

        .rpg-password-error {
            margin-top: 7px;

            color: #ff7b8a;

            font-size: 0.8rem;
        }

        .rpg-password-actions {
            display: flex;
            align-items: center;

            gap: 15px;

            margin-top: 6px;
        }

        .rpg-password-save {
            padding: 10px 20px;

            color: #06111d;

            background:
                linear-gradient(
                    135deg,
                    #22d3ee,
                    #0dcaf0
                );

            border: 1px solid rgba(34, 211, 238, 0.55);

            border-radius: 9px;

            font-size: 0.85rem;
            font-weight: 800;

            box-shadow:
                0 8px 25px rgba(13, 202, 240, 0.12);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                filter 0.2s ease;
        }

        .rpg-password-save:hover {
            color: #06111d;

            transform: translateY(-1px);

            filter: brightness(1.08);

            box-shadow:
                0 10px 30px rgba(13, 202, 240, 0.22);
        }

        .rpg-password-save:active {
            transform: translateY(0);
        }

        .rpg-password-saved {
            color: #5ee6b0;

            font-size: 0.82rem;
            font-weight: 600;

            animation: rpgPasswordSaved 0.25s ease;
        }

        @keyframes rpgPasswordSaved {
            from {
                opacity: 0;
                transform: translateX(-5px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @media (max-width: 575.98px) {
            .rpg-password-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .rpg-password-save {
                width: 100%;
            }

            .rpg-password-saved {
                text-align: center;
            }
        }
    </style>

    <div class="rpg-password-section">

        <p class="rpg-password-description">
            Используй длинный и уникальный пароль, чтобы защитить
            свою учётную запись и прогресс персонажа.
        </p>

        <form
            method="POST"
            action="{{ route('password.update') }}"
            class="rpg-password-form"
        >

            @csrf

            @method('put')


            {{-- Current Password --}}
            <div class="rpg-password-field">

                <label
                    for="update_password_current_password"
                    class="rpg-password-label"
                >
                    Текущий пароль
                </label>

                <input
                    id="update_password_current_password"
                    name="current_password"
                    type="password"
                    class="rpg-password-input"
                    autocomplete="current-password"
                    placeholder="Введи текущий пароль"
                >

                @if ($errors->updatePassword->get('current_password'))
                    <div class="rpg-password-error">
                        {{ $errors->updatePassword->get('current_password')[0] }}
                    </div>
                @endif

            </div>


            {{-- New Password --}}
            <div class="rpg-password-field">

                <label
                    for="update_password_password"
                    class="rpg-password-label"
                >
                    Новый пароль
                </label>

                <input
                    id="update_password_password"
                    name="password"
                    type="password"
                    class="rpg-password-input"
                    autocomplete="new-password"
                    placeholder="Введи новый пароль"
                >

                @if ($errors->updatePassword->get('password'))
                    <div class="rpg-password-error">
                        {{ $errors->updatePassword->get('password')[0] }}
                    </div>
                @endif

            </div>


            {{-- Confirm Password --}}
            <div class="rpg-password-field">

                <label
                    for="update_password_password_confirmation"
                    class="rpg-password-label"
                >
                    Подтверждение пароля
                </label>

                <input
                    id="update_password_password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="rpg-password-input"
                    autocomplete="new-password"
                    placeholder="Повтори новый пароль"
                >

                @if ($errors->updatePassword->get('password_confirmation'))
                    <div class="rpg-password-error">
                        {{ $errors->updatePassword->get('password_confirmation')[0] }}
                    </div>
                @endif

            </div>


            {{-- Actions --}}
            <div class="rpg-password-actions">

                <button
                    type="submit"
                    class="rpg-password-save"
                >
                     Сохранить пароль
                </button>

                @if (session('status') === 'password-updated')

                    <p class="rpg-password-saved mb-0">
                        ✓ Пароль успешно изменён
                    </p>

                @endif

            </div>

        </form>

    </div>

</section>