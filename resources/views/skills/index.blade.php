<x-app-layout>

    <style>
        /* ==================================================
           PAGE
        ================================================== */

        .skills-page {
            min-height: calc(100vh - 56px);

            background:
                radial-gradient(
                    circle at 10% 8%,
                    rgba(13, 202, 240, 0.08),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 25%,
                    rgba(111, 66, 193, 0.08),
                    transparent 30%
                ),
                #07111f;

            color: #e8eef7;
        }


        /* ==================================================
           HERO
        ================================================== */

        .skills-hero {
            position: relative;
            overflow: hidden;

            min-height: 165px;

            border: 1px solid rgba(255, 255, 255, 0.08);

            background:
                linear-gradient(
                    90deg,
                    rgba(4, 12, 24, 0.98) 0%,
                    rgba(4, 12, 24, 0.78) 50%,
                    rgba(4, 12, 24, 0.4) 100%
                ),
                radial-gradient(
                    circle at 80% 35%,
                    rgba(111, 66, 193, 0.16),
                    transparent 25%
                ),
                linear-gradient(
                    135deg,
                    #102b3d,
                    #0a1729 55%,
                    #17243c
                );

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.35);
        }


        .skills-hero::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    145deg,
                    transparent 0 65%,
                    rgba(13, 202, 240, 0.06) 65% 66%,
                    transparent 66%
                ),
                linear-gradient(
                    25deg,
                    transparent 0 72%,
                    rgba(111, 66, 193, 0.06) 72% 73%,
                    transparent 73%
                );

            pointer-events: none;
        }


        .skills-hero-icon {
            width: 68px;
            height: 68px;

            flex: 0 0 68px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 20px;

            font-size: 34px;

            background:
                rgba(13, 202, 240, 0.1);

            border:
                1px solid rgba(13, 202, 240, 0.3);

            box-shadow:
                0 0 32px rgba(13, 202, 240, 0.12),
                inset 0 0 22px rgba(13, 202, 240, 0.04);
        }


        .skills-title,
        .section-title,
        .skill-name,
        .modal-title {
            font-family:
                Georgia,
                "Times New Roman",
                serif;
        }


        .skills-subtitle {
            color: #71869c;

            font-size: 0.78rem;

            text-transform: uppercase;

            letter-spacing: 0.8px;

            font-weight: 700;
        }


        .skills-description {
            color: #91a4ba;
        }


        /* ==================================================
           CREATE BUTTON
        ================================================== */

        .create-skill-btn {
            border: 0;

            background:
                linear-gradient(
                    90deg,
                    #087f68,
                    #10a37f
                );

            box-shadow:
                0 8px 20px rgba(16, 163, 127, 0.16);

            transition:
                transform 0.15s ease,
                box-shadow 0.15s ease;
        }


        .create-skill-btn:hover {
            transform: translateY(-1px);

            background:
                linear-gradient(
                    90deg,
                    #099276,
                    #12b58d
                );

            box-shadow:
                0 10px 25px rgba(16, 163, 127, 0.24);
        }


        /* ==================================================
           ALERTS
        ================================================== */

        .alert-rpg {
            color: #bdf5df;

            background:
                linear-gradient(
                    90deg,
                    rgba(32, 201, 151, 0.1),
                    rgba(32, 201, 151, 0.04)
                );

            border:
                1px solid rgba(32, 201, 151, 0.25);
        }


        /* ==================================================
           SECTION
        ================================================== */

        .section-subtitle {
            color: #71869c;
        }


        /* ==================================================
           SKILL CARD
        ================================================== */

        .skill-card {
            position: relative;
            overflow: hidden;

            height: 100%;

            border-radius: 18px;

            background:
                linear-gradient(
                    145deg,
                    rgba(17, 35, 57, 0.98),
                    rgba(8, 22, 38, 0.98)
                );

            border:
                1px solid rgba(130, 170, 210, 0.16);

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.22);

            transition:
                transform 0.2s ease,
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }


        .skill-card:hover {
            transform: translateY(-5px);

            border-color:
                rgba(13, 202, 240, 0.4);

            box-shadow:
                0 22px 50px rgba(0, 0, 0, 0.32),
                0 0 25px rgba(13, 202, 240, 0.05);
        }


        .skill-card::after {
            content: "";

            position: absolute;

            width: 190px;
            height: 190px;

            top: -110px;
            right: -90px;

            border-radius: 50%;

            background:
                rgba(13, 202, 240, 0.055);

            pointer-events: none;
        }


        /* ==================================================
           CARD TOP LINE
        ================================================== */

        .skill-card-line {
            height: 4px;

            background:
                linear-gradient(
                    90deg,
                    #0d6efd,
                    #6f42c1
                );
        }


        /* ==================================================
           ICON
        ================================================== */

        .skill-icon {
            width: 60px;
            height: 60px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 17px;

            font-size: 30px;

            background:
                linear-gradient(
                    145deg,
                    #1d3a50,
                    #0e2032
                );

            border:
                1px solid rgba(13, 202, 240, 0.28);

            box-shadow:
                inset 0 0 18px rgba(13, 202, 240, 0.04);
        }


        .skill-name {
            color: #f3f6fa;

            font-size: 1.25rem;
        }


        .skill-meta {
            color: #71869c;

            font-size: 0.78rem;
        }


        /* ==================================================
           LEVEL
        ================================================== */

        .skill-level {
            min-width: 64px;

            padding: 7px 10px;

            border-radius: 10px;

            text-align: center;

            background:
                rgba(255, 255, 255, 0.04);

            border:
                1px solid rgba(255, 255, 255, 0.07);
        }


        .skill-level-number {
            color: #f3f6fa;

            font-size: 20px;

            font-weight: 800;
        }


        .skill-level-label {
            color: #6e8195;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }


        /* ==================================================
           XP
        ================================================== */

        .xp-label {
            color: #71869c;

            font-size: 0.8rem;

            text-transform: uppercase;

            letter-spacing: 0.4px;

            font-weight: 700;
        }


        .xp-value {
            color: #48d9ef;

            font-weight: 700;
        }


        .xp-muted {
            color: #70849a;

            font-weight: 500;
        }


        .xp-progress {
            height: 9px;

            background:
                #17283a;

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

            transition:
                width 0.4s ease;
        }


        .xp-percent {
            color: #70849a;

            font-size: 0.78rem;
        }


        /* ==================================================
           CARD BUTTONS
        ================================================== */

        .edit-skill-btn {
            color: #8fdcf0;

            border-color:
                rgba(13, 202, 240, 0.25);

            background:
                rgba(13, 202, 240, 0.03);
        }


        .edit-skill-btn:hover {
            color: #fff;

            background:
                rgba(13, 202, 240, 0.1);

            border-color:
                rgba(13, 202, 240, 0.45);
        }


        .delete-skill-btn {
            width: 46px;

            color: #f08b8b;

            border-color:
                rgba(220, 53, 69, 0.25);

            background:
                rgba(220, 53, 69, 0.06);
        }


        .delete-skill-btn:hover {
            color: #fff;

            background:
                rgba(220, 53, 69, 0.12);

            border-color:
                rgba(220, 53, 69, 0.45);
        }


        /* ==================================================
           EMPTY STATE
        ================================================== */

        .empty-state {
            border:
                1px dashed rgba(130, 170, 210, 0.22);

            background:
                rgba(10, 24, 40, 0.65);
        }


        .empty-icon {
            width: 100px;
            height: 100px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto;

            border-radius: 28px;

            background:
                linear-gradient(
                    145deg,
                    rgba(13, 202, 240, 0.12),
                    rgba(111, 66, 193, 0.12)
                );

            border:
                1px solid rgba(13, 202, 240, 0.2);

            font-size: 42px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.25);
        }


        /* ==================================================
           MODAL
        ================================================== */

        .skill-modal .modal-content {
            color: #e8eef7;

            background:
                linear-gradient(
                    145deg,
                    #12253a,
                    #091727
                );

            border:
                1px solid rgba(130, 170, 210, 0.2);

            border-radius: 18px;

            box-shadow:
                0 25px 80px rgba(0, 0, 0, 0.55);
        }


        .skill-modal .modal-header,
        .skill-modal .modal-footer {
            border-color:
                rgba(130, 170, 210, 0.12);
        }


        .skill-modal .modal-header {
            padding: 22px 24px;
        }


        .skill-modal .modal-body {
            padding: 24px;
        }


        .skill-modal .modal-footer {
            padding: 18px 24px;
        }


        .skill-modal .modal-title {
            color: #f3f6fa;
        }


        .skill-modal .btn-close {
            filter: invert(1) grayscale(1);
        }


        .skill-modal .form-label {
            color: #9fb1c4;
        }


        .skill-modal .form-control {
            color: #e8eef7;

            background:
                #091827;

            border:
                1px solid rgba(130, 170, 210, 0.2);

            border-radius: 10px;

            padding: 12px 14px;

            box-shadow: none;
        }


        .skill-modal .form-control::placeholder {
            color: #52677c;
        }


        .skill-modal .form-control:focus {
            color: #fff;

            background:
                #0a1b2c;

            border-color:
                rgba(13, 202, 240, 0.5);

            box-shadow:
                0 0 0 0.2rem rgba(13, 202, 240, 0.08);
        }


        .skill-modal .form-text {
            color: #71869c;
        }


        /* ==================================================
           MODAL BUTTONS
        ================================================== */

        .modal-secondary-btn {
            color: #adb5bd;

            border:
                1px solid rgba(130, 170, 210, 0.14);

            background:
                rgba(255, 255, 255, 0.04);

            border-radius: 10px;
        }


        .modal-secondary-btn:hover {
            color: #fff;

            background:
                rgba(255, 255, 255, 0.08);
        }


        .modal-primary-btn {
            border: 0;

            border-radius: 10px;

            background:
                linear-gradient(
                    90deg,
                    #087f68,
                    #10a37f
                );

            color: white;

            font-weight: 600;
        }


        .modal-primary-btn:hover {
            color: white;

            background:
                linear-gradient(
                    90deg,
                    #099276,
                    #12b58d
                );

            box-shadow:
                0 8px 20px rgba(16, 163, 127, 0.25);
        }


        /* ==================================================
           BACKDROP
        ================================================== */

        .modal-backdrop.show {
            opacity: 0.8;
        }


        /* ==================================================
           RESPONSIVE
        ================================================== */

        @media (max-width: 767.98px) {

            .skills-hero {
                min-height: 145px;
            }


            .skills-hero-icon {
                width: 56px;
                height: 56px;

                flex-basis: 56px;

                font-size: 28px;
            }


            .skill-card {
                border-radius: 16px;
            }
        }
    </style>


    <div class="skills-page py-4 py-lg-5">

        <div class="container">


            {{-- ==================================================
                 HERO
            ================================================== --}}

            <div class="skills-hero rounded-4 p-3 p-lg-4 mb-4">

                <div
                    class="position-relative z-1 d-flex align-items-center justify-content-between gap-3 h-100"
                >

                    <div class="d-flex align-items-center gap-3">

                        <div class="skills-hero-icon">
                            ⚔️
                        </div>

                        <div>

                            <div class="skills-subtitle mb-1">
                                CHARACTER PROGRESSION
                            </div>

                            <h1 class="skills-title display-6 fw-bold mb-1">
                                Навыки
                            </h1>

                            <p class="skills-description mb-0">
                                Развивай навыки своего персонажа и становись сильнее.
                            </p>

                        </div>

                    </div>


                    <button
                        type="button"
                        class="btn create-skill-btn px-4 py-2 fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#createSkillModal"
                    >
                        ⚔ Новый навык
                    </button>

                </div>

            </div>


            {{-- ==================================================
                 SUCCESS
            ================================================== --}}

            @if (session('success'))

                <div class="alert alert-rpg rounded-4 mb-4">

                    <strong>✓ Отлично!</strong>

                    {{ session('success') }}

                </div>

            @endif


            {{-- ==================================================
                 ERRORS
            ================================================== --}}

            @if ($errors->any())

                <div class="alert alert-danger rounded-4 mb-4">

                    <strong>⚠ Проверь данные:</strong>

                    <ul class="mb-0 mt-2">

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- ==================================================
                 SECTION TITLE
            ================================================== --}}

            <div class="d-flex justify-content-between align-items-end mb-4">

                <div>

                    <h2 class="section-title mb-1">
                        Навыки персонажа
                    </h2>

                    <div class="section-subtitle">
                        Развивай характеристики и повышай уровень своих навыков.
                    </div>

                </div>

                @if ($skills->isNotEmpty())

                    <div class="text-secondary small">
                        Всего навыков:
                        <strong class="text-light">
                            {{ $skills->count() }}
                        </strong>
                    </div>

                @endif

            </div>


            {{-- ==================================================
                 EMPTY STATE
            ================================================== --}}

            @if ($skills->isEmpty())

                <div class="empty-state rounded-4 p-5 text-center">

                    <div class="empty-icon mb-4">
                        ⚔️
                    </div>

                    <h3 class="skills-title mb-2">
                        Навыков пока нет
                    </h3>

                    <p class="skills-description mb-4">
                        Создай первый навык и начни развивать своего персонажа.
                    </p>

                    <button
                        type="button"
                        class="btn create-skill-btn px-4 py-2 fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#createSkillModal"
                    >
                        ⚔ Создать первый навык
                    </button>

                </div>

            @else


                {{-- ==================================================
                     SKILLS GRID
                ================================================== --}}

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

                                    {{-- =========================
                                         CARD HEADER
                                    ========================= --}}

                                    <div
                                        class="d-flex justify-content-between align-items-start gap-3 mb-4"
                                    >

                                        <div class="d-flex align-items-center gap-3">

                                            <div class="skill-icon">
                                                {{ $icon }}
                                            </div>

                                            <div>

                                                <h4 class="skill-name fw-bold mb-1">
                                                    {{ $skill->name }}
                                                </h4>

                                                <div class="skill-meta">
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


                                    {{-- =========================
                                         XP
                                    ========================= --}}

                                    <div
                                        class="d-flex justify-content-between align-items-end mb-2"
                                    >

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


                                    {{-- =========================
                                         PROGRESS
                                    ========================= --}}

                                    <div class="xp-progress mb-2">

                                        <div
                                            class="xp-progress-bar"
                                            style="width: {{ $progress }}%;"
                                        ></div>

                                    </div>


                                    <div
                                        class="d-flex justify-content-between mb-4"
                                    >

                                        <span class="xp-percent">
                                            Прогресс
                                        </span>

                                        <span class="xp-percent">
                                            {{ number_format($progress, 0) }}%
                                        </span>

                                    </div>


                                    {{-- =========================
                                         ACTIONS
                                    ========================= --}}

                                    <div class="d-flex gap-2">

                                        <button
                                            type="button"
                                            class="btn edit-skill-btn flex-grow-1"
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
                                                class="btn delete-skill-btn"
                                                title="Удалить"
                                            >
                                                🗑
                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- ==================================================
                             EDIT MODAL
                        ================================================== --}}

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
                                                aria-label="Закрыть"
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
                                                class="btn modal-secondary-btn"
                                                data-bs-dismiss="modal"
                                            >
                                                Отмена
                                            </button>

                                            <button
                                                type="submit"
                                                class="btn modal-primary-btn px-4"
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


    {{-- ==================================================
         CREATE MODAL
    ================================================== --}}

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
                            aria-label="Закрыть"
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
                            class="btn modal-secondary-btn"
                            data-bs-dismiss="modal"
                        >
                            Отмена
                        </button>

                        <button
                            type="submit"
                            class="btn modal-primary-btn px-4"
                        >
                            Создать навык
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>
