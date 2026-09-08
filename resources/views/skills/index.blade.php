
<x-app-layout>

    <style>
        /* =========================
           PAGE
        ========================= */

        .skills-page {
            min-height: calc(100vh - 70px);
            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(13, 110, 253, 0.08),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 20%,
                    rgba(111, 66, 193, 0.08),
                    transparent 30%
                ),
                #0d1117;

            color: #f1f3f5;
        }


        /* =========================
           HEADER
        ========================= */

        .skills-subtitle {
            color: #7d8590;
            letter-spacing: 2px;
            font-size: 12px;
            font-weight: 700;
        }

        .skills-description {
            color: #8b949e;
        }


        /* =========================
           CREATE BUTTON
        ========================= */

        .btn-create-skill {
            border: none;
            border-radius: 12px;
            padding: 12px 22px;

            background: linear-gradient(
                135deg,
                #0d6efd,
                #6f42c1
            );

            color: white;
            font-weight: 600;

            box-shadow:
                0 8px 25px rgba(13, 110, 253, 0.2);

            transition: all 0.2s ease;
        }

        .btn-create-skill:hover {
            color: white;
            transform: translateY(-2px);

            box-shadow:
                0 12px 30px rgba(13, 110, 253, 0.35);
        }


        /* =========================
           SKILL CARD
        ========================= */

        .skill-card {
            position: relative;

            height: 100%;

            background:
                linear-gradient(
                    145deg,
                    #171c25,
                    #11151c
                );

            border: 1px solid rgba(255, 255, 255, 0.07);

            border-radius: 18px;

            overflow: hidden;

            box-shadow:
                0 8px 30px rgba(0, 0, 0, 0.25);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                border-color 0.2s ease;
        }

        .skill-card:hover {
            transform: translateY(-6px);

            border-color:
                rgba(13, 110, 253, 0.3);

            box-shadow:
                0 18px 45px rgba(0, 0, 0, 0.45);
        }


        /* =========================
           CARD TOP LINE
        ========================= */

        .skill-card-line {
            height: 4px;

            background:
                linear-gradient(
                    90deg,
                    #0d6efd,
                    #6f42c1
                );
        }


        /* =========================
           ICON
        ========================= */

        .skill-icon {
            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background:
                rgba(13, 110, 253, 0.10);

            border:
                1px solid rgba(13, 110, 253, 0.2);

            font-size: 28px;

            box-shadow:
                inset 0 0 20px rgba(13, 110, 253, 0.04);
        }


        /* =========================
           LEVEL
        ========================= */

        .skill-level {
            min-width: 60px;

            padding: 7px 10px;

            border-radius: 10px;

            background:
                rgba(255, 255, 255, 0.04);

            border:
                1px solid rgba(255, 255, 255, 0.07);

            text-align: center;
        }

        .skill-level-number {
            font-size: 20px;
            font-weight: 800;
        }

        .skill-level-label {
            color: #6e7681;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }


        /* =========================
           XP
        ========================= */

        .xp-label {
            color: #8b949e;
            font-size: 13px;
        }

        .xp-value {
            font-size: 13px;
            font-weight: 700;
        }

        .xp-muted {
            color: #6e7681;
        }

        .xp-progress {
            height: 9px;

            background:
                #292e38;

            border-radius: 20px;

            overflow: hidden;
        }

        .xp-progress-bar {
            height: 100%;

            border-radius: 20px;

            background:
                linear-gradient(
                    90deg,
                    #0d6efd,
                    #6f42c1
                );

            box-shadow:
                0 0 12px rgba(13, 110, 253, 0.35);

            transition: width 0.4s ease;
        }


        /* =========================
           CARD BUTTONS
        ========================= */

        .btn-edit-skill {
            border:
                1px solid rgba(255, 255, 255, 0.12);

            background:
                rgba(255, 255, 255, 0.03);

            color: #d0d7de;

            border-radius: 10px;

            transition: all 0.2s ease;
        }

        .btn-edit-skill:hover {
            background:
                rgba(255, 255, 255, 0.08);

            border-color:
                rgba(255, 255, 255, 0.2);

            color: white;
        }

        .btn-delete-skill {
            width: 46px;

            border:
                1px solid rgba(220, 53, 69, 0.25);

            background:
                rgba(220, 53, 69, 0.06);

            color: #ff6b7a;

            border-radius: 10px;

            transition: all 0.2s ease;
        }

        .btn-delete-skill:hover {
            background:
                rgba(220, 53, 69, 0.15);

            border-color:
                rgba(220, 53, 69, 0.4);

            color: #ff8792;
        }


        /* =========================
           EMPTY STATE
        ========================= */

        .empty-icon {
            width: 100px;
            height: 100px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: auto;

            border-radius: 28px;

            background:
                linear-gradient(
                    145deg,
                    rgba(13, 110, 253, 0.12),
                    rgba(111, 66, 193, 0.12)
                );

            border:
                1px solid rgba(13, 110, 253, 0.2);

            font-size: 42px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.25);
        }


        /* =========================
           ALERTS
        ========================= */

        .skills-alert {
            background:
                #151b23;

            border:
                1px solid rgba(255, 255, 255, 0.08);

            color: #d0d7de;

            border-radius: 12px;
        }

        .skills-alert-success {
            border-color:
                rgba(25, 135, 84, 0.35);
        }

        .skills-alert-danger {
            border-color:
                rgba(220, 53, 69, 0.35);
        }


        /* =========================
           MODAL
        ========================= */

        .skill-modal .modal-content {
            background:
                linear-gradient(
                    145deg,
                    #1a2029,
                    #11151c
                );

            border:
                1px solid rgba(255, 255, 255, 0.09);

            border-radius: 18px;

            color: #f1f3f5;

            box-shadow:
                0 25px 80px rgba(0, 0, 0, 0.65);
        }

        .skill-modal .modal-header {
            padding: 22px 24px;

            border-bottom:
                1px solid rgba(255, 255, 255, 0.07);
        }

        .skill-modal .modal-footer {
            padding: 18px 24px;

            border-top:
                1px solid rgba(255, 255, 255, 0.07);
        }

        .skill-modal .modal-body {
            padding: 24px;
        }

        .skill-modal .modal-title {
            font-size: 18px;
        }

        .skill-modal .btn-close {
            filter: invert(1) grayscale(100%);
            opacity: 0.7;
        }

        .skill-modal .btn-close:hover {
            opacity: 1;
        }


        /* =========================
           MODAL INPUT
        ========================= */

        .skill-modal .form-label {
            color: #d0d7de;
        }

        .skill-modal .form-control {
            background:
                #0d1117;

            border:
                1px solid rgba(255, 255, 255, 0.12);

            color: #f1f3f5;

            border-radius: 10px;

            padding: 12px 14px;

            box-shadow: none;
        }

        .skill-modal .form-control::placeholder {
            color: #6e7681;
        }

        .skill-modal .form-control:focus {
            background:
                #0d1117;

            color: white;

            border-color:
                #0d6efd;

            box-shadow:
                0 0 0 3px rgba(13, 110, 253, 0.15);
        }

        .skill-modal .form-text {
            color: #6e7681;
        }


        /* =========================
           MODAL BUTTONS
        ========================= */

        .btn-modal-secondary {
            border:
                1px solid rgba(255, 255, 255, 0.1);

            background:
                rgba(255, 255, 255, 0.04);

            color: #adb5bd;

            border-radius: 10px;
        }

        .btn-modal-secondary:hover {
            background:
                rgba(255, 255, 255, 0.08);

            color: white;
        }

        .btn-modal-primary {
            border: none;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6f42c1
                );

            color: white;

            font-weight: 600;
        }

        .btn-modal-primary:hover {
            color: white;

            box-shadow:
                0 8px 20px rgba(13, 110, 253, 0.25);
        }


        /* =========================
           MODAL BACKDROP
        ========================= */

        .modal-backdrop.show {
            opacity: 0.8;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 576px) {

            .skills-page {
                padding-bottom: 40px;
            }

            .skill-card {
                border-radius: 15px;
            }

        }
    </style>


    <div class="skills-page">

        <div class="container py-5">

            {{-- =========================
                 HEADER
            ========================= --}}

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">

                <div>

                    <div class="skills-subtitle mb-2">
                        CHARACTER PROGRESSION
                    </div>

                    <h1 class="display-5 fw-bold mb-2">
                        ⚔️ Навыки
                    </h1>

                    <p class="skills-description mb-0">
                        Развивай навыки своего персонажа и становись сильнее.
                    </p>

                </div>


                <button
                    type="button"
                    class="btn btn-create-skill"
                    data-bs-toggle="modal"
                    data-bs-target="#createSkillModal"
                >
                    <span class="me-2">＋</span>
                    Новый навык
                </button>

            </div>


            {{-- =========================
                 SUCCESS
            ========================= --}}

            @if (session('success'))

                <div
                    class="alert skills-alert skills-alert-success alert-dismissible fade show mb-4"
                    role="alert"
                >
                    <strong class="text-success me-2">✓</strong>

                    {{ session('success') }}

                    <button
                        type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="alert"
                    ></button>
                </div>

            @endif


            {{-- =========================
                 ERRORS
            ========================= --}}

            @if ($errors->any())

                <div
                    class="alert skills-alert skills-alert-danger mb-4"
                    role="alert"
                >

                    <div class="fw-bold mb-2">
                        Не удалось выполнить действие
                    </div>

                    <ul class="mb-0 ps-3">

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- =========================
                 EMPTY STATE
            ========================= --}}

            @if ($skills->isEmpty())

                <div class="text-center py-5">

                    <div class="empty-icon mb-4">
                        ⚔️
                    </div>

                    <h3 class="fw-bold mb-2">
                        Навыков пока нет
                    </h3>

                    <p class="skills-description mb-4">
                        Создай первый навык и начни развивать своего персонажа.
                    </p>

                    <button
                        type="button"
                        class="btn btn-create-skill"
                        data-bs-toggle="modal"
                        data-bs-target="#createSkillModal"
                    >
                        Создать первый навык
                    </button>

                </div>

            @else


                {{-- =========================
                     SKILLS GRID
                ========================= --}}

                <div class="row g-4">

                    @foreach ($skills as $skill)

                        @php

                            $level = $skill->pivot->level;
                            $xp = $skill->pivot->xp;

                            $xpToNextLevel = (int) round(
                                100 * pow($level, 1.5)
                            );

                            $progress = $xpToNextLevel > 0
                                ? min(
                                    100,
                                    ($xp / $xpToNextLevel) * 100
                                )
                                : 0;

                            $icon = match ($skill->name) {

                                'Программирование' => '💻',

                                'Спорт' => '🏋️',

                                'Английский язык' => '🇬🇧',

                                'Чтение' => '📚',

                                'Учёба' => '🎓',

                                default => '⚔️',

                            };

                        @endphp


                        <div class="col-12 col-md-6 col-xl-4">

                            <div class="skill-card">

                                <div class="skill-card-line"></div>


                                <div class="p-4">

                                    {{-- Card header --}}

                                    <div class="d-flex justify-content-between align-items-start mb-4">

                                        <div class="d-flex align-items-center gap-3">

                                            <div class="skill-icon">
                                                {{ $icon }}
                                            </div>

                                            <div>

                                                <h4 class="fw-bold mb-1">
                                                    {{ $skill->name }}
                                                </h4>

                                                <div class="text-secondary small">
                                                    Навык персонажа
                                                </div>

                                            </div>

                                        </div>


                                        <div class="skill-level">

                                            <div class="skill-level-number">
                                                {{ $level }}
                                            </div>

                                            <div class="skill-level-label">
                                                Уровень
                                            </div>

                                        </div>

                                    </div>


                                    {{-- XP --}}

                                    <div class="d-flex justify-content-between align-items-end mb-2">

                                        <div class="xp-label">
                                            Опыт
                                        </div>

                                        <div class="xp-value">

                                            {{ $xp }}

                                            <span class="xp-muted">
                                                / {{ $xpToNextLevel }} XP
                                            </span>

                                        </div>

                                    </div>


                                    {{-- Progress --}}

                                    <div class="xp-progress mb-2">

                                        <div
                                            class="xp-progress-bar"
                                            style="width: {{ $progress }}%;"
                                        ></div>

                                    </div>


                                    <div class="d-flex justify-content-between mb-4">

                                        <span class="text-secondary small">
                                            Прогресс
                                        </span>

                                        <span class="text-secondary small">
                                            {{ number_format($progress, 0) }}%
                                        </span>

                                    </div>


                                    {{-- Actions --}}

                                    <div class="d-flex gap-2">

                                        <button
                                            type="button"
                                            class="btn btn-edit-skill flex-grow-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editSkillModal{{ $skill->id }}"
                                        >
                                            ✎ &nbsp; Редактировать
                                        </button>


                                        <form
                                            action="{{ route('skills.destroy', $skill) }}"
                                            method="POST"
                                            onsubmit="return confirm('Удалить навык «{{ $skill->name }}»?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-delete-skill"
                                                title="Удалить"
                                            >
                                                🗑
                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- =========================
                             EDIT MODAL
                        ========================= --}}

                        <div
                            class="modal fade skill-modal"
                            id="editSkillModal{{ $skill->id }}"
                            tabindex="-1"
                            aria-hidden="true"
                        >

                            <div class="modal-dialog modal-dialog-centered">

                                <div class="modal-content">

                                    <form
                                        action="{{ route('skills.update', $skill) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('PUT')


                                        <div class="modal-header">

                                            <div>

                                                <h5 class="modal-title fw-bold mb-1">
                                                    ✎ Редактирование навыка
                                                </h5>

                                                <div class="small text-secondary">
                                                    Измени название навыка
                                                </div>

                                            </div>


                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>

                                        </div>


                                        <div class="modal-body">

                                            <label
                                                for="edit-skill-name-{{ $skill->id }}"
                                                class="form-label fw-semibold"
                                            >
                                                Название навыка
                                            </label>

                                            <input
                                                type="text"
                                                id="edit-skill-name-{{ $skill->id }}"
                                                name="name"
                                                value="{{ old('name', $skill->name) }}"
                                                class="form-control form-control-lg"
                                                maxlength="255"
                                                required
                                            >

                                        </div>


                                        <div class="modal-footer">

                                            <button
                                                type="button"
                                                class="btn btn-modal-secondary"
                                                data-bs-dismiss="modal"
                                            >
                                                Отмена
                                            </button>

                                            <button
                                                type="submit"
                                                class="btn btn-modal-primary px-4"
                                            >
                                                Сохранить изменения
                                            </button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @endif

        </div>

    </div>


    {{-- =========================
         CREATE MODAL
    ========================= --}}

    <div
        class="modal fade skill-modal"
        id="createSkillModal"
        tabindex="-1"
        aria-hidden="true"
    >

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <form
                    action="{{ route('skills.store') }}"
                    method="POST"
                >

                    @csrf


                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title fw-bold mb-1">
                                ⚔️ Новый навык
                            </h5>

                            <div class="small text-secondary">
                                Создай новый навык своего персонажа
                            </div>

                        </div>


                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <label
                            for="skill-name"
                            class="form-label fw-semibold"
                        >
                            Название навыка
                        </label>

                        <input
                            type="text"
                            id="skill-name"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-control form-control-lg"
                            placeholder="Например: Программирование"
                            maxlength="255"
                            required
                            autofocus
                        >


                        <div class="form-text mt-3">

                            ⚡ Новый навык будет автоматически добавлен
                            твоему персонажу с

                            <strong class="text-light">
                                1 уровнем
                            </strong>

                            и

                            <strong class="text-light">
                                0 XP
                            </strong>.

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-modal-secondary"
                            data-bs-dismiss="modal"
                        >
                            Отмена
                        </button>

                        <button
                            type="submit"
                            class="btn btn-modal-primary px-4"
                        >
                            Создать навык
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>

