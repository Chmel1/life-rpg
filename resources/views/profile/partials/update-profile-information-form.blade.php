<section>

    <style>
        .rpg-profile-info {
            width: 100%;
        }

        .rpg-profile-description {
            max-width: 650px;

            margin-bottom: 22px;

            color: #8a9caf;

            font-size: 0.9rem;
            line-height: 1.6;
        }

        .rpg-profile-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .rpg-profile-field {
            width: 100%;
        }

        .rpg-profile-label {
            display: block;

            margin-bottom: 8px;

            color: #b9c8d8;

            font-size: 0.82rem;
            font-weight: 700;

            letter-spacing: 0.02em;
        }

        .rpg-profile-input {
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

        .rpg-profile-input:focus {
            color: #e8eef7;

            background: rgba(3, 12, 23, 0.85);

            border-color: rgba(13, 202, 240, 0.55);

            box-shadow:
                0 0 0 3px rgba(13, 202, 240, 0.08),
                0 0 25px rgba(13, 202, 240, 0.05);
        }

        .rpg-profile-input::placeholder {
            color: #53677c;
        }

        .rpg-profile-error {
            margin-top: 7px;

            color: #ff7b8a;

            font-size: 0.8rem;
        }

        .rpg-profile-verification {
            margin-top: 10px;

            padding: 14px 16px;

            border-radius: 10px;

            background: rgba(212, 175, 55, 0.045);

            border: 1px solid rgba(212, 175, 55, 0.14);
        }

        .rpg-profile-verification-text {
            margin: 0;

            color: #b9a96f;

            font-size: 0.82rem;

            line-height: 1.5;
        }

        .rpg-profile-verification-button {
            display: inline;

            margin: 0;
            padding: 0;

            color: #22d3ee;

            background: none;

            border: 0;

            font-size: inherit;

            text-decoration: underline;

            cursor: pointer;

            transition: color 0.2s ease;
        }

        .rpg-profile-verification-button:hover {
            color: #67e8f9;
        }

        .rpg-profile-verification-success {
            margin-top: 8px;

            color: #5ee6b0;

            font-size: 0.8rem;
            font-weight: 600;
        }

        .rpg-profile-actions {
            display: flex;
            align-items: center;

            gap: 15px;

            margin-top: 6px;
        }

        .rpg-profile-save {
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

        .rpg-profile-save:hover {
            color: #06111d;

            transform: translateY(-1px);

            filter: brightness(1.08);

            box-shadow:
                0 10px 30px rgba(13, 202, 240, 0.22);
        }

        .rpg-profile-save:active {
            transform: translateY(0);
        }

        .rpg-profile-saved {
            color: #5ee6b0;

            font-size: 0.82rem;
            font-weight: 600;

            animation: rpgProfileSaved 0.25s ease;
        }

        @keyframes rpgProfileSaved {
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
            .rpg-profile-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .rpg-profile-save {
                width: 100%;
            }

            .rpg-profile-saved {
                text-align: center;
            }
        }
    </style>

    <div class="rpg-profile-info">

        <p class="rpg-profile-description">
            Обнови имя своего героя и адрес электронной почты,
            связанные с твоей учётной записью.
        </p>


        {{-- Email verification form --}}
        <form
            id="send-verification"
            method="POST"
            action="{{ route('verification.send') }}"
        >
            @csrf
        </form>


        {{-- Profile update form --}}
        <form
            method="POST"
            action="{{ route('profile.update') }}"
            class="rpg-profile-form"
        >

            @csrf

            @method('patch')


            {{-- Name --}}
            <div class="rpg-profile-field">

                <label
                    for="name"
                    class="rpg-profile-label"
                >
                    Имя героя
                </label>

                <input
                    id="name"
                    name="name"
                    type="text"
                    class="rpg-profile-input"
                    value="{{ old('name', $user->name) }}"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Имя героя"
                >

                @if ($errors->get('name'))
                    <div class="rpg-profile-error">
                        {{ $errors->get('name')[0] }}
                    </div>
                @endif

            </div>


            {{-- Email --}}
            <div class="rpg-profile-field">

                <label
                    for="email"
                    class="rpg-profile-label"
                >
                    Email
                </label>

                <input
                    id="email"
                    name="email"
                    type="email"
                    class="rpg-profile-input"
                    value="{{ old('email', $user->email) }}"
                    required
                    autocomplete="username"
                    placeholder="hero@example.com"
                >

                @if ($errors->get('email'))
                    <div class="rpg-profile-error">
                        {{ $errors->get('email')[0] }}
                    </div>
                @endif


                {{-- Email verification --}}
                @if (
                    $user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail
                    && ! $user->hasVerifiedEmail()
                )

                    <div class="rpg-profile-verification">

                        <p class="rpg-profile-verification-text">

                            ⚠ Email ещё не подтверждён.

                            <button
                                form="send-verification"
                                type="submit"
                                class="rpg-profile-verification-button"
                            >
                                Отправить письмо повторно
                            </button>

                        </p>


                        @if (session('status') === 'verification-link-sent')

                            <p class="rpg-profile-verification-success mb-0">
                                ✓ Новая ссылка для подтверждения отправлена
                                на твою почту.
                            </p>

                        @endif

                    </div>

                @endif

            </div>


            {{-- Actions --}}
            <div class="rpg-profile-actions">

                <button
                    type="submit"
                    class="rpg-profile-save"
                >
                     Сохранить изменения
                </button>


                @if (session('status') === 'profile-updated')

                    <p class="rpg-profile-saved mb-0">
                        ✓ Изменения сохранены
                    </p>

                @endif

            </div>

        </form>

    </div>

</section>