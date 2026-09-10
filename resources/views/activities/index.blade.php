<x-app-layout>


<style>
    .activities-page {
        min-height: calc(100vh - 56px);
        background:
            radial-gradient(circle at 10% 8%, rgba(13, 202, 240, 0.08), transparent 28%),
            radial-gradient(circle at 90% 25%, rgba(111, 66, 193, 0.08), transparent 30%),
            #07111f;
        color: #e8eef7;
    }

    /* HERO */

    .activity-hero {
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
                rgba(255, 193, 7, 0.16),
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

    .activity-hero::after {
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
                rgba(255, 193, 7, 0.05) 72% 73%,
                transparent 73%
            );

        pointer-events: none;
    }

    .hero-icon {
        width: 68px;
        height: 68px;
        flex: 0 0 68px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 20px;
        font-size: 34px;

        background: rgba(13, 202, 240, 0.1);
        border: 1px solid rgba(13, 202, 240, 0.3);

        box-shadow:
            0 0 32px rgba(13, 202, 240, 0.12),
            inset 0 0 22px rgba(13, 202, 240, 0.04);
    }

    .rpg-title,
    .section-title,
    .activity-name,
    .modal-title {
        font-family: Georgia, "Times New Roman", serif;
    }

    /* ALERT */

    .alert-rpg {
        color: #bdf5df;

        background:
            linear-gradient(
                90deg,
                rgba(32, 201, 151, 0.1),
                rgba(32, 201, 151, 0.04)
            );

        border: 1px solid rgba(32, 201, 151, 0.25);
    }

    /* ACTIVITY CARD */

    .activity-card {
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

        border: 1px solid rgba(130, 170, 210, 0.16);

        box-shadow:
            0 15px 40px rgba(0, 0, 0, 0.22);

        transition:
            transform 0.2s ease,
            border-color 0.2s ease,
            box-shadow 0.2s ease;
    }

    .activity-card::after {
        content: "";

        position: absolute;

        width: 190px;
        height: 190px;

        top: -110px;
        right: -90px;

        border-radius: 50%;

        background: rgba(13, 202, 240, 0.055);

        pointer-events: none;
    }

    .activity-card:hover {
        transform: translateY(-5px);

        border-color: rgba(13, 202, 240, 0.4);

        box-shadow:
            0 22px 50px rgba(0, 0, 0, 0.32),
            0 0 25px rgba(13, 202, 240, 0.05);
    }

    /* ACTIVITY ICON */

    .activity-icon {
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

        border: 1px solid rgba(13, 202, 240, 0.28);

        box-shadow:
            inset 0 0 18px rgba(13, 202, 240, 0.04);
    }

    .activity-name {
        color: #f3f6fa;
        font-size: 1.25rem;
    }

    .activity-description {
        color: #91a4ba;
        min-height: 44px;
    }

    /* XP */

    .xp-badge {
        color: #ffd66b;

        background:
            rgba(255, 193, 7, 0.1);

        border:
            1px solid rgba(255, 193, 7, 0.25);

        font-weight: 700;

        box-shadow:
            0 0 15px rgba(255, 193, 7, 0.04);
    }

    /* SKILLS */

    .skill-title {
        color: #71869c;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        font-weight: 700;
    }

    .skill-badge {
        color: #9fc8e8;

        background:
            rgba(13, 202, 240, 0.07);

        border:
            1px solid rgba(13, 202, 240, 0.16);

        font-weight: 500;
    }

    .skill-xp {
        color: #48d9ef;
        font-weight: 700;
    }

    /* BUTTONS */

    .complete-btn {
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

    .complete-btn:hover {
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

    .complete-btn:active {
        transform: translateY(1px);
    }

    .edit-btn {
        color: #8fdcf0;
        border-color: rgba(13, 202, 240, 0.25);
    }

    .edit-btn:hover {
        color: #fff;
        background: rgba(13, 202, 240, 0.1);
        border-color: rgba(13, 202, 240, 0.45);
    }

    .delete-btn {
        color: #f08b8b;
        border-color: rgba(220, 53, 69, 0.25);
    }

    .delete-btn:hover {
        color: #fff;
        background: rgba(220, 53, 69, 0.12);
        border-color: rgba(220, 53, 69, 0.45);
    }

    /* HISTORY */

    .history-card {
        overflow: hidden;

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
    }

    .history-item {
        color: #e8eef7;
        background: transparent;

        border-color:
            rgba(130, 170, 210, 0.1);
    }

    .history-item:hover {
        background:
            rgba(13, 202, 240, 0.04);
    }

    .history-icon {
        width: 44px;
        height: 44px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex: 0 0 44px;

        border-radius: 13px;

        background:
            rgba(32, 201, 151, 0.08);

        border:
            1px solid rgba(32, 201, 151, 0.16);
    }

    .history-xp {
        color: #65e0bd;
        font-weight: 700;
    }

    .date-text {
        color: #70849a;
        font-size: 0.78rem;
    }

    /* EMPTY */

    .empty-state {
        border:
            1px dashed rgba(130, 170, 210, 0.22);

        background:
            rgba(10, 24, 40, 0.65);
    }

    .section-subtitle {
        color: #71869c;
    }

    /* MODAL */

    .rpg-modal .modal-content {
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

    .rpg-modal .modal-header,
    .rpg-modal .modal-footer {
        border-color:
            rgba(130, 170, 210, 0.12);
    }

    .rpg-modal .modal-title {
        color: #f3f6fa;
    }

    .rpg-modal .btn-close {
        filter: invert(1) grayscale(1);
    }

    .rpg-label {
        color: #9fb1c4;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .rpg-input {
        color: #e8eef7;
        background: #091827;
        border: 1px solid rgba(130, 170, 210, 0.2);
    }

    .rpg-input:focus {
        color: #fff;
        background: #0a1b2c;
        border-color: rgba(13, 202, 240, 0.5);

        box-shadow:
            0 0 0 0.2rem rgba(13, 202, 240, 0.08);
    }

    .rpg-input::placeholder {
        color: #52677c;
    }

    .skill-selector {
        padding: 12px;

        border-radius: 12px;

        background: rgba(5, 17, 30, 0.55);

        border:
            1px solid rgba(130, 170, 210, 0.12);

        transition:
            border-color 0.15s ease,
            background 0.15s ease;
    }

    .skill-selector:hover {
        border-color:
            rgba(13, 202, 240, 0.25);
    }

    .skill-selector.selected {
        background:
            rgba(13, 202, 240, 0.05);

        border-color:
            rgba(13, 202, 240, 0.3);
    }

    .skill-selector .form-check-input {
        cursor: pointer;
    }

    .skill-selector .form-check-label {
        cursor: pointer;
        color: #dbe7f2;
    }

    .skill-xp-input {
        max-width: 100px;
    }

    .validation-error {
        color: #ff9d9d;
        font-size: 0.82rem;
    }

    .modal-section-title {
        color: #71869c;
        font-size: 0.78rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 700;
    }

    @media (max-width: 767.98px) {

        .activity-hero {
            min-height: 145px;
        }

        .hero-icon {
            width: 56px;
            height: 56px;
            flex-basis: 56px;
            font-size: 28px;
        }

        .activity-description {
            min-height: auto;
        }

        .activity-card {
            padding: 1.25rem !important;
        }
    }
</style>


<div class="activities-page py-4 py-lg-5">

    <div class="container">

        {{-- HERO --}}

        <div class="activity-hero rounded-4 p-3 p-lg-4 mb-4">

            <div class="position-relative z-1 d-flex align-items-center gap-3 h-100">

                <div class="hero-icon">
                    ⚡
                </div>

                <div>

                    <div class="text-uppercase small fw-bold text-info mb-1">
                        Действия героя
                    </div>

                    <h1 class="rpg-title display-6 fw-bold mb-1">
                        Активности
                    </h1>

                    <p class="text-light opacity-75 mb-0">
                        Действуй, получай опыт и развивай свои навыки.
                    </p>

                </div>

            </div>

        </div>


        {{-- SUCCESS --}}

        @if (session('success'))

            <div class="alert alert-rpg rounded-4 mb-4">

                <strong>✓ Отлично!</strong>

                {{ session('success') }}

            </div>

        @endif


        {{-- VALIDATION ERRORS --}}

        @if ($errors->any())

            <div class="alert alert-danger rounded-4 mb-4">

                <strong>⚠ Проверь данные:</strong>

                <ul class="mb-0 mt-2">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- SECTION TITLE --}}

        <div class="d-flex justify-content-between align-items-end mb-4">

            <div>

                <h2 class="section-title mb-1">
                    Доступные активности
                </h2>

                <div class="section-subtitle">
                    Выбери действие и прокачай своего персонажа.
                </div>

            </div>

            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#createActivityModal"
            >
                + Новая активность
            </button>

        </div>


        {{-- ACTIVITIES --}}

        <div class="row g-4">

            @forelse ($activities as $activity)

                @php

                    $activityIcon = match (mb_strtolower($activity->name)) {

                        'бег' => '🏃',

                        'программирование' => '💻',

                        'чтение книги' => '📖',

                        'изучение английского' => '🌎',

                        'изучение laravel' => '⚙️',

                        default => '⚡',

                    };

                @endphp


                <div class="col-12 col-md-6 col-lg-4">

                    <div class="activity-card p-4 d-flex flex-column">

                        {{-- ICON + XP --}}

                        <div class="d-flex justify-content-between align-items-start gap-3 mb-4">

                            <div class="activity-icon">
                                {{ $activityIcon }}
                            </div>

                            <span class="xp-badge rounded-pill px-3 py-2">
                                +{{ $activity->base_xp }} XP
                            </span>

                        </div>


                        {{-- NAME --}}

                        <h3 class="activity-name mb-2">
                            {{ $activity->name }}
                        </h3>


                        {{-- DESCRIPTION --}}

                        <p class="activity-description mb-4">
                            {{ $activity->description ?: 'Описание активности отсутствует.' }}
                        </p>


                        {{-- SKILLS --}}

                        <div class="mb-4">

                            <div class="skill-title mb-2">
                                Прокачивает навыки
                            </div>

                            <div class="d-flex flex-wrap gap-2">

                                @foreach ($activity->skills as $skill)

                                    <span class="skill-badge rounded-pill px-3 py-2 small">

                                        {{ $skill->name }}

                                        <span class="skill-xp">
                                            +{{ $skill->pivot->xp }}
                                        </span>

                                    </span>

                                @endforeach

                            </div>

                        </div>


                        {{-- ACTIONS --}}

                        <div class="mt-auto">

                            {{-- COMPLETE --}}

                            <form
                                method="POST"
                                action="{{ route('activities.complete', $activity) }}"
                                class="mb-2"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="complete-btn btn btn-primary w-100 py-2 fw-semibold"
                                >
                                    ⚔ Выполнить активность
                                </button>

                            </form>


                            {{-- EDIT / DELETE --}}

                            <div class="d-flex gap-2">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-info edit-btn flex-grow-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editActivityModal{{ $activity->id }}"
                                >
                                    ✏ Изменить
                                </button>

                                <form
                                    method="POST"
                                    action="{{ route('activities.destroy', $activity) }}"
                                    onsubmit="return confirm('Удалить активность «{{ $activity->name }}»?');"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-outline-danger delete-btn"
                                    >
                                        🗑
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- EDIT MODAL --}}

                <div
                    class="modal fade rpg-modal"
                    id="editActivityModal{{ $activity->id }}"
                    tabindex="-1"
                    aria-hidden="true"
                >

                    <div class="modal-dialog modal-dialog-centered modal-lg">

                        <div class="modal-content">

                            <form
                                method="POST"
                                action="{{ route('activities.update', $activity) }}"
                            >

                                @csrf
                                @method('PUT')

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        ✏ Изменить активность
                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Закрыть"
                                    ></button>

                                </div>


                                <div class="modal-body">

                                    {{-- NAME --}}

                                    <div class="mb-3">

                                        <label class="form-label rpg-label">
                                            Название
                                        </label>

                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control rpg-input"
                                            value="{{ $activity->name }}"
                                            required
                                            maxlength="255"
                                        >

                                    </div>


                                    {{-- DESCRIPTION --}}

                                    <div class="mb-3">

                                        <label class="form-label rpg-label">
                                            Описание
                                        </label>

                                        <textarea
                                            name="description"
                                            class="form-control rpg-input"
                                            rows="3"
                                        >{{ $activity->description }}</textarea>

                                    </div>


                                    {{-- BASE XP --}}

                                    <div class="mb-4">

                                        <label class="form-label rpg-label">
                                            XP за выполнение
                                        </label>

                                        <input
                                            type="number"
                                            name="base_xp"
                                            class="form-control rpg-input base-xp-input"
                                            value="{{ $activity->base_xp }}"
                                            min="1"
                                            max="100"
                                            required
                                            placeholder="Максимум 100"
                                            onkeydown="return event.key !== 'e' && event.key !== 'E'"
                                        >
                                        <div class="skills-xp-error text-danger mt-2 d-none">
                                            Суммарный XP навыков превышает XP активности.
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                                            <span class="text-secondary">
                                                Распределено:
                                            </span>

                                            <span class="fw-bold">
                                                <span class="skills-xp-total">0</span>
                                                /
                                                <span class="skills-xp-limit">50</span>
                                                XP
                                            </span>
                                        </div>

                                        <div class="progress mb-3" style="height: 6px;">
                                            <div
                                                class="progress-bar skills-xp-progress"
                                                role="progressbar"
                                                style="width: 0%;"
                                            ></div>
                                        </div>

                                    </div>


                                    {{-- SKILLS --}}

                                    <div class="modal-section-title mb-2">
                                        Навыки
                                    </div>

                                    <div class="d-flex flex-column gap-2">

                                        @foreach ($skills as $skill)

                                            @php
                                                $activitySkill = $activity->skills
                                                    ->firstWhere('id', $skill->id);
                                            @endphp

                                            <div class="skill-selector {{ $activitySkill ? 'selected' : '' }}">

                                                <div class="d-flex align-items-center gap-3">

                                                    <div class="form-check flex-grow-1 mb-0">

                                                        <input
                                                            type="checkbox"
                                                            class="form-check-input skill-checkbox"
                                                            name="skills[{{ $skill->id }}][id]"
                                                            value="{{ $skill->id }}"
                                                            id="edit_{{ $activity->id }}_skill_{{ $skill->id }}"
                                                            data-xp-input="edit_xp_{{ $activity->id }}_{{ $skill->id }}"
                                                            {{ $activitySkill ? 'checked' : '' }}
                                                        >

                                                        <label
                                                            class="form-check-label"
                                                            for="edit_{{ $activity->id }}_skill_{{ $skill->id }}"
                                                        >
                                                            {{ $skill->name }}
                                                        </label>

                                                    </div>

                                                    <input
                                                        type="number"
                                                        name="skills[{{ $skill->id }}][xp]"
                                                        class="form-control rpg-input skill-xp-input skill-xp-field"
                                                        id="edit_xp_{{ $activity->id }}_{{ $skill->id }}"
                                                        value="{{ $activitySkill?->pivot?->xp ?? 10 }}"
                                                        min="1"
                                                        {{ $activitySkill ? '' : 'disabled' }}
                                                        placeholder="XP"
                                                    >

                                                </div>

                                            </div>

                                        @endforeach

                                    </div>

                                </div>


                                <div class="modal-footer">

                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Отмена
                                    </button>

                                    <button
                                        type="submit"
                                        class="btn btn-primary activity-submit-btn"
                                    >
                                        Сохранить изменения
                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="empty-state rounded-4 p-5 text-center">

                        <div class="display-4 mb-3">
                            ⚡
                        </div>

                        <h3 class="rpg-title mb-2">
                            Активностей пока нет
                        </h3>

                        <p class="text-secondary mb-3">
                            Создай свою первую активность и начни прокачивать персонажа.
                        </p>

                        <button
                            type="button"
                            class="btn btn-primary activity-submit-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#createActivityModal"
                        >
                            + Создать активность
                        </button>

                    </div>

                </div>

            @endforelse

        </div>


        {{-- HISTORY --}}

        <div class="d-flex justify-content-between align-items-end mt-5 mb-3">

            <div>

                <h2 class="section-title mb-1">
                    Последние активности
                </h2>

                <div class="section-subtitle">
                    Твои последние действия и полученный опыт.
                </div>

            </div>

        </div>


        <div class="history-card">

            @if ($logs->isEmpty())

                <div class="p-5 text-center">

                    <div class="display-5 mb-3">
                        📜
                    </div>

                    <h5 class="rpg-title mb-2">
                        История пока пуста
                    </h5>

                    <p class="text-secondary mb-0">
                        Выполни первую активность, чтобы начать свой путь.
                    </p>

                </div>

            @else

                <div class="list-group list-group-flush">

                    @foreach ($logs as $log)

                        <div class="history-item list-group-item p-3">

                            <div class="d-flex align-items-center gap-3">

                                <div class="history-icon">
                                    ⚔️
                                </div>

                                <div class="flex-grow-1">

                                    <div class="fw-semibold">
                                        {{ $log->activity->name }}
                                    </div>

                                    <div class="date-text">
                                        {{ $log->created_at->format('d.m.Y H:i') }}
                                    </div>

                                </div>

                                <div class="history-xp">
                                    +{{ $log->xp_earned }} XP
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @endif

        </div>

    </div>

</div>


{{-- CREATE MODAL --}}

<div
    class="modal fade rpg-modal"
    id="createActivityModal"
    tabindex="-1"
    aria-hidden="true"
>

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

            <form
                method="POST"
                action="{{ route('activities.store') }}"
            >

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        ⚡ Новая активность
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Закрыть"
                    ></button>

                </div>


                <div class="modal-body">

                    {{-- NAME --}}

                    <div class="mb-3">

                        <label class="form-label rpg-label">
                            Название
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="form-control rpg-input"
                            value="{{ old('name') }}"
                            placeholder="Например: Тренировка"
                            maxlength="255"
                            required
                        >

                    </div>


                    {{-- DESCRIPTION --}}

                    <div class="mb-3">

                        <label class="form-label rpg-label">
                            Описание
                        </label>

                        <textarea
                            name="description"
                            class="form-control rpg-input"
                            rows="3"
                            placeholder="Что нужно сделать?"
                        >{{ old('description') }}</textarea>

                    </div>


                    {{-- BASE XP --}}

                    <div class="mb-4">

                        <label class="form-label rpg-label">
                            XP за выполнение
                        </label>

                        <input
                            type="number"
                            name="base_xp"
                            class="form-control rpg-input base-xp-input"
                            value="{{ old('base_xp', 50) }}"
                            min="1"
                            max="100"
                            required
                            placeholder="Максимум:100"
                            onkeydown="return event.key !== 'e' && event.key !== 'E'"
                        >
                        <div class="skills-xp-error text-danger mt-2 d-none">
                            Суммарный XP навыков превышает XP активности.
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                            <span class="text-secondary">
                                Распределено:
                            </span>

                            <span class="fw-bold">
                                <span class="skills-xp-total">0</span>
                                /
                                <span class="skills-xp-limit">50</span>
                                XP
                            </span>
                        </div>

                        <div class="progress mb-3" style="height: 6px;">
                            <div
                                class="progress-bar skills-xp-progress"
                                role="progressbar"
                                style="width: 0%;"
                            ></div>
                        </div>

                        <div class="form-text text-secondary">
                            Столько XP получит персонаж за выполнение активности.
                        </div>

                    </div>


                    {{-- SKILLS --}}

                    <div class="modal-section-title mb-2">
                        Навыки, которые прокачивает активность
                    </div>

                    @if ($skills->isEmpty())

                        <div class="alert alert-warning">

                            У тебя пока нет навыков.

                            Сначала создай навык в разделе
                            <a href="{{ route('skills.index') }}">
                                Навыки
                            </a>.

                        </div>

                    @else

                        <div class="d-flex flex-column gap-2">

                            @foreach ($skills as $skill)

                                <div class="skill-selector">

                                    <div class="d-flex align-items-center gap-3">

                                        <div class="form-check flex-grow-1 mb-0">

                                            <input
                                                type="checkbox"
                                                class="form-check-input skill-checkbox"
                                                name="skills[{{ $skill->id }}][id]"
                                                value="{{ $skill->id }}"
                                                id="create_skill_{{ $skill->id }}"
                                                data-xp-input="create_xp_{{ $skill->id }}"
                                            >

                                            <label
                                                class="form-check-label"
                                                for="create_skill_{{ $skill->id }}"
                                            >
                                                {{ $skill->name }}
                                            </label>

                                        </div>

                                        <input
                                            type="number"
                                            name="skills[{{ $skill->id }}][xp]"
                                            class="form-control rpg-input skill-xp-input skill-xp-field"
                                            id="create_xp_{{ $skill->id }}"
                                            value="10"
                                            min="1"
                                            disabled
                                            placeholder="XP"
                                        >

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    @endif

                </div>


                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Отмена
                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary activity-submit-btn"
                        {{ $skills->isEmpty() ? 'disabled' : '' }}
                    >
                        ⚡ Создать активность
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


{{-- SKILL CHECKBOX JS --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.rpg-modal').forEach(function (modal) {

        const baseXpInput = modal.querySelector('.base-xp-input');
        const totalElement = modal.querySelector('.skills-xp-total');
        const limitElement = modal.querySelector('.skills-xp-limit');
        const progressBar = modal.querySelector('.skills-xp-progress');
        const submitButton = modal.querySelector('.activity-submit-btn');
        const errorElement = modal.querySelector('.skills-xp-error');


        // Если в модалке нет Base XP — ничего не делаем
        if (!baseXpInput) {
            return;
        }


        // ==================================================
        // Обновление счётчика XP
        // ==================================================

        function updateXpCounter() {

            const baseXp = Number(baseXpInput.value) || 0;

            let totalXp = 0;


            // --------------------------------------------------
            // Считаем XP всех выбранных навыков
            // --------------------------------------------------

            modal.querySelectorAll('.skill-checkbox:checked')
                .forEach(function (checkbox) {

                    const xpInput = document.getElementById(
                        checkbox.dataset.xpInput
                    );

                    if (xpInput) {
                        totalXp += Number(xpInput.value) || 0;
                    }
                });


            // --------------------------------------------------
            // Обновляем текст счётчика
            // --------------------------------------------------

            if (totalElement) {
                totalElement.textContent = totalXp;
            }

            if (limitElement) {
                limitElement.textContent = baseXp;
            }


            // --------------------------------------------------
            // Обновляем progress bar
            // --------------------------------------------------

            if (progressBar) {

                const percent = baseXp > 0
                    ? Math.min((totalXp / baseXp) * 100, 100)
                    : 0;

                progressBar.style.width = percent + '%';


                if (totalXp > baseXp) {

                    progressBar.classList.add('bg-danger');
                    progressBar.classList.remove('bg-success');

                } else {

                    progressBar.classList.add('bg-success');
                    progressBar.classList.remove('bg-danger');
                }
            }


            // --------------------------------------------------
            // Показываем / скрываем сообщение об ошибке
            // --------------------------------------------------

            if (errorElement) {

                errorElement.classList.toggle(
                    'd-none',
                    totalXp <= baseXp
                );
            }


            // --------------------------------------------------
            // Блокируем кнопку при превышении XP
            // --------------------------------------------------

            if (submitButton) {

                submitButton.disabled =
                    totalXp > baseXp;
            }


            // --------------------------------------------------
            // Сколько XP осталось
            // --------------------------------------------------

            const remainingXp = Math.max(
                baseXp - totalXp,
                0
            );


            // --------------------------------------------------
            // Устанавливаем max для XP каждого навыка
            // --------------------------------------------------

            modal.querySelectorAll('.skill-checkbox:checked')
                .forEach(function (checkbox) {

                    const xpInput = document.getElementById(
                        checkbox.dataset.xpInput
                    );

                    if (!xpInput) {
                        return;
                    }


                    const currentXp =
                        Number(xpInput.value) || 0;


                    /*
                     * Текущий XP этого навыка возвращаем
                     * в доступный лимит.
                     *
                     * Например:
                     *
                     * Base XP = 100
                     * Программирование = 60
                     * Спорт = 30
                     *
                     * Осталось = 10
                     *
                     * Для программирования:
                     *
                     * 10 + 60 = 70
                     *
                     * Значит максимум программирования = 70.
                     */

                    const maxForThisSkill =
                        remainingXp + currentXp;


                    xpInput.max = maxForThisSkill;
                });
        }


        // ==================================================
        // Выбор / снятие навыка
        // ==================================================

        modal.querySelectorAll('.skill-checkbox')
            .forEach(function (checkbox) {

                const xpInputId =
                    checkbox.dataset.xpInput;

                const xpInput =
                    document.getElementById(xpInputId);

                const selector =
                    checkbox.closest('.skill-selector');


                function updateSkillState() {

                    if (checkbox.checked) {

                        xpInput.disabled = false;

                        selector.classList.add('selected');

                    } else {

                        xpInput.disabled = true;

                        selector.classList.remove('selected');
                    }


                    updateXpCounter();
                }


                checkbox.addEventListener(
                    'change',
                    updateSkillState
                );


                // Первоначальное состояние
                updateSkillState();
            });


        // ==================================================
        // Изменение XP навыка
        // ==================================================

        modal.querySelectorAll('.skill-xp-field')
            .forEach(function (input) {

                input.addEventListener('input', function () {

                    const max =
                        Number(this.max);


                    // Не позволяем превысить max
                    if (
                        max &&
                        Number(this.value) > max
                    ) {
                        this.value = max;
                    }


                    updateXpCounter();
                });
            });


        // ==================================================
        // Изменение Base XP
        // ==================================================

        baseXpInput.addEventListener('input', function () {

            const max =
                Number(this.max);


            // Не позволяем Base XP быть больше max
            if (
                max &&
                Number(this.value) > max
            ) {
                this.value = max;
            }


            updateXpCounter();
        });


        // ==================================================
        // Первый запуск
        // ==================================================

        updateXpCounter();
    });

});
</script>


</x-app-layout>
