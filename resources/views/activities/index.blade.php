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
        .activity-name {
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

            transition:
                background 0.15s ease,
                border-color 0.15s ease;
        }

        .skill-badge:hover {
            background:
                rgba(13, 202, 240, 0.12);

            border-color:
                rgba(13, 202, 240, 0.3);
        }

        .skill-xp {
            color: #48d9ef;
            font-weight: 700;
        }

        /* BUTTON */

        .complete-btn {
            position: relative;

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

            transition:
                background 0.15s ease;
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


            {{-- SECTION TITLE --}}

            <div class="mb-4">

                <h2 class="section-title mb-1">
                    Доступные активности
                </h2>

                <div class="section-subtitle">
                    Выбери действие и прокачай своего персонажа.
                </div>

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


                        <div class="activity-card p-4">


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

                                {{ $activity->description }}

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


                            {{-- BUTTON --}}

                            <div class="mt-auto">

                                <form
                                    method="POST"
                                    action="{{ route('activities.complete', $activity) }}"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="complete-btn btn btn-primary w-100 py-2 fw-semibold"
                                    >

                                        ⚔ Выполнить активность

                                    </button>

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

                            <p class="text-secondary mb-0">
                                Скоро здесь появятся новые испытания.
                            </p>

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

</x-app-layout>