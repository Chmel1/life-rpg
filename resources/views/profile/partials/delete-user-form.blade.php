<section>

    <style>
        .rpg-delete-section {
            position: relative;
        }

        .rpg-delete-description {
            max-width: 700px;

            margin-bottom: 22px;

            color: #8a9caf;

            font-size: 0.9rem;
            line-height: 1.6;
        }

        .rpg-delete-button {
            padding: 10px 18px;

            border-radius: 9px;

            color: #ff8b98;

            background: rgba(220, 53, 69, 0.08);

            border: 1px solid rgba(220, 53, 69, 0.30);

            font-size: 0.85rem;
            font-weight: 700;

            transition:
                background 0.2s ease,
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                transform 0.2s ease;
        }

        .rpg-delete-button:hover {
            color: #ff9da8;

            background: rgba(220, 53, 69, 0.14);

            border-color: rgba(220, 53, 69, 0.55);

            box-shadow:
                0 0 25px rgba(220, 53, 69, 0.10);

            transform: translateY(-1px);
        }

        .rpg-delete-modal .modal-content {
            overflow: hidden;

            color: #e8eef7;

            background:
                linear-gradient(
                    145deg,
                    rgba(17, 45, 70, 0.99),
                    rgba(7, 20, 36, 0.99)
                );

            border: 1px solid rgba(220, 53, 69, 0.25);

            border-radius: 18px;

            box-shadow:
                0 30px 90px rgba(0, 0, 0, 0.60);
        }

        .rpg-delete-modal .modal-header {
            padding: 22px 24px;

            border-bottom: 1px solid rgba(100, 130, 165, 0.12);
        }

        .rpg-delete-modal .modal-title {
            display: flex;
            align-items: center;
            gap: 10px;

            color: #f1f5f9;

            font-family: Georgia, "Times New Roman", serif;

            font-size: 1.2rem;
            font-weight: 700;
        }

        .rpg-delete-modal .modal-title-icon {
            color: #ff6b7a;

            font-size: 1.2rem;
        }

        .rpg-delete-modal .btn-close {
            filter: invert(1);
            opacity: 0.5;
        }

        .rpg-delete-modal .btn-close:hover {
            opacity: 0.9;
        }

        .rpg-delete-modal .modal-body {
            padding: 24px;
        }

        .rpg-delete-warning {
            padding: 14px 16px;

            margin-bottom: 22px;

            border-radius: 10px;

            color: #d9a5ab;

            background: rgba(220, 53, 69, 0.06);

            border: 1px solid rgba(220, 53, 69, 0.15);

            font-size: 0.85rem;
            line-height: 1.5;
        }

        .rpg-delete-label {
            display: block;

            margin-bottom: 8px;

            color: #b9c8d8;

            font-size: 0.82rem;
            font-weight: 700;
        }

        .rpg-delete-input {
            width: 100%;

            padding: 12px 14px;

            color: #e8eef7;

            background: rgba(3, 12, 23, 0.70);

            border: 1px solid rgba(100, 130, 165, 0.20);

            border-radius: 10px;

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }

        .rpg-delete-input:focus {
            color: #e8eef7;

            background: rgba(3, 12, 23, 0.85);

            border-color: rgba(220, 53, 69, 0.55);

            box-shadow:
                0 0 0 3px rgba(220, 53, 69, 0.08);
        }

        .rpg-delete-input::placeholder {
            color: #53677c;
        }

        .rpg-delete-error {
            margin-top: 7px;

            color: #ff7b8a;

            font-size: 0.8rem;
        }

        .rpg-delete-modal .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;

            padding: 18px 24px;

            border-top: 1px solid rgba(100, 130, 165, 0.12);
        }

        .rpg-cancel-button {
            padding: 10px 18px;

            color: #9aabbc;

            background: rgba(255, 255, 255, 0.025);

            border: 1px solid rgba(100, 130, 165, 0.20);

            border-radius: 9px;

            font-size: 0.85rem;
            font-weight: 700;

            transition:
                background 0.2s ease,
                color 0.2s ease;
        }

        .rpg-cancel-button:hover {
            color: #dce5ef;

            background: rgba(255, 255, 255, 0.06);
        }

        .rpg-confirm-delete-button {
            padding: 10px 18px;

            color: #fff;

            background: #b02a37;

            border: 1px solid rgba(255, 107, 122, 0.35);

            border-radius: 9px;

            font-size: 0.85rem;
            font-weight: 700;

            transition:
                background 0.2s ease,
                box-shadow 0.2s ease;
        }

        .rpg-confirm-delete-button:hover {
            color: #fff;

            background: #c73645;

            box-shadow:
                0 0 25px rgba(220, 53, 69, 0.18);
        }

        @media (max-width: 575.98px) {
            .rpg-delete-modal .modal-body {
                padding: 20px;
            }

            .rpg-delete-modal .modal-footer {
                padding: 16px 20px;
            }

            .rpg-delete-modal .modal-footer button {
                flex: 1;
            }
        }
    </style>

    <div
        class="rpg-delete-section"
        x-data
    >

        <p class="rpg-delete-description">
            После удаления аккаунта все данные персонажа, активности,
            навыки и достижения будут удалены без возможности восстановления.
            Перед удалением убедись, что тебе больше ничего не нужно сохранять.
        </p>

        <button
            type="button"
            class="rpg-delete-button"
            data-bs-toggle="modal"
            data-bs-target="#confirmUserDeletion"
        >
            ⚠ Удалить аккаунт
        </button>

    </div>


    {{-- DELETE ACCOUNT MODAL --}}
    <div
        class="modal fade rpg-delete-modal"
        id="confirmUserDeletion"
        tabindex="-1"
        aria-labelledby="confirmUserDeletionLabel"
        aria-hidden="true"
    >

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">

                    <h5
                        class="modal-title"
                        id="confirmUserDeletionLabel"
                    >
                        <span class="modal-title-icon">
                            ⚠
                        </span>

                        Удаление аккаунта
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Закрыть"
                    ></button>

                </div>


                <form
                    method="POST"
                    action="{{ route('profile.destroy') }}"
                >

                    @csrf

                    @method('delete')


                    <div class="modal-body">

                        <div class="rpg-delete-warning">
                            <strong>Внимание.</strong>

                            Это действие необратимо.
                            Все ресурсы и данные аккаунта будут
                            permanently deleted.
                        </div>


                        <label
                            for="delete-account-password"
                            class="rpg-delete-label"
                        >
                            Подтверди пароль
                        </label>

                        <input
                            id="delete-account-password"
                            name="password"
                            type="password"
                            class="rpg-delete-input"
                            placeholder="Введи свой пароль"
                            autocomplete="current-password"
                        >

                        @if ($errors->userDeletion->get('password'))
                            <div class="rpg-delete-error">
                                {{ $errors->userDeletion->get('password')[0] }}
                            </div>
                        @endif

                    </div>


                    <div class="modal-footer">

                        <button
                            type="button"
                            class="rpg-cancel-button"
                            data-bs-dismiss="modal"
                        >
                            Отмена
                        </button>

                        <button
                            type="submit"
                            class="rpg-confirm-delete-button"
                        >
                            Удалить аккаунт
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>