<x-app-layout>
<style>

    .character-page {
        min-height: calc(100vh - 56px);

        background:
            radial-gradient(
                circle at 15% 10%,
                rgba(13, 202, 240, 0.08),
                transparent 30%
            ),
            radial-gradient(
                circle at 85% 20%,
                rgba(111, 66, 193, 0.10),
                transparent 30%
            ),
            #07111f;

        color: #e8eef7;
    }


    /* HERO */

    .character-hero {
        position: relative;
        overflow: hidden;

        border-radius: 24px;

        min-height: 300px;

        background:
            linear-gradient(
                135deg,
                rgba(17, 45, 70, 0.98),
                rgba(7, 20, 36, 0.98)
            );

        border:
            1px solid rgba(13, 202, 240, 0.18);

        box-shadow:
            0 25px 70px rgba(0, 0, 0, 0.35);
    }


    .character-hero::before {
        content: "";

        position: absolute;

        width: 420px;
        height: 420px;

        right: -150px;
        top: -200px;

        border-radius: 50%;

        background:
            radial-gradient(
                circle,
                rgba(13, 202, 240, 0.16),
                transparent 65%
            );

        pointer-events: none;
    }


    .character-hero::after {
        content: "";

        position: absolute;
        inset: 0;

        background:
            linear-gradient(
                140deg,
                transparent 0 62%,
                rgba(13, 202, 240, 0.035) 62% 63%,
                transparent 63%
            ),
            linear-gradient(
                35deg,
                transparent 0 72%,
                rgba(111, 66, 193, 0.04) 72% 73%,
                transparent 73%
            );

        pointer-events: none;
    }


    .character-avatar {
        width: 125px;
        height: 125px;

        flex: 0 0 125px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 32px;

        font-size: 64px;

        background:
            linear-gradient(
                145deg,
                #193c56,
                #0b1d30
            );

        border:
            1px solid rgba(13, 202, 240, 0.35);

        box-shadow:
            0 0 45px rgba(13, 202, 240, 0.10),
            inset 0 0 30px rgba(13, 202, 240, 0.05);
    }


    .rpg-title,
    .section-title,
    .skill-name {
        font-family: Georgia, "Times New Roman", serif;
    }


    .character-name {
        font-size: clamp(2rem, 5vw, 3.3rem);
        font-weight: 700;

        color: #f5f8fc;
    }


    .character-level {
        display: inline-flex;
        align-items: center;

        gap: 8px;

        padding: 7px 14px;

        border-radius: 999px;

        background:
            rgba(255, 193, 7, 0.10);

        border:
            1px solid rgba(255, 193, 7, 0.25);

        color: #ffd76a;

        font-weight: 700;
    }


    /* XP */

    .xp-panel {
        position: relative;
        z-index: 2;

        margin-top: 30px;

        padding: 20px;

        border-radius: 18px;

        background:
            rgba(3, 13, 25, 0.55);

        border:
            1px solid rgba(255, 255, 255, 0.07);
    }


    .xp-label {
        color: #91a4ba;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }


    .xp-value {
        color: #dce8f4;
        font-weight: 700;
    }


    .xp-progress {
        height: 15px;

        overflow: hidden;

        border-radius: 999px;

        background:
            rgba(255, 255, 255, 0.07);

        box-shadow:
            inset 0 2px 5px rgba(0, 0, 0, 0.35);
    }


    .xp-progress-bar {
        height: 100%;

        border-radius: inherit;

        background:
            linear-gradient(
                90deg,
                #087f68,
                #20c997,
                #48d9ef
            );

        box-shadow:
            0 0 18px rgba(32, 201, 151, 0.25);

        transition:
            width 0.5s ease;
    }


    /* STATS */

    .stat-card {
        height: 100%;

        padding: 22px;

        border-radius: 18px;

        background:
            linear-gradient(
                145deg,
                rgba(17, 35, 57, 0.98),
                rgba(8, 22, 38, 0.98)
            );

        border:
            1px solid rgba(130, 170, 210, 0.14);

        box-shadow:
            0 15px 40px rgba(0, 0, 0, 0.20);

        transition:
            transform 0.2s ease,
            border-color 0.2s ease;
    }


    .stat-card:hover {
        transform: translateY(-3px);

        border-color:
            rgba(13, 202, 240, 0.28);
    }


    .stat-icon {
        font-size: 26px;

        margin-bottom: 12px;
    }


    .stat-label {
        color: #71869c;

        font-size: 0.8rem;

        text-transform: uppercase;

        letter-spacing: 0.5px;
    }


    .stat-value {
        font-size: 1.65rem;

        font-weight: 700;

        color: #eef5fb;
    }


    /* SECTION */

    .section-header {
        margin-top: 42px;
        margin-bottom: 18px;
    }


    .section-title {
        color: #f2f6fb;
    }


    .section-subtitle {
        color: #71869c;
    }


    /* SKILL */

    .skill-card {
        height: 100%;

        padding: 22px;

        border-radius: 18px;

        background:
            linear-gradient(
                145deg,
                rgba(17, 35, 57, 0.98),
                rgba(8, 22, 38, 0.98)
            );

        border:
            1px solid rgba(130, 170, 210, 0.14);

        box-shadow:
            0 15px 40px rgba(0, 0, 0, 0.20);

        transition:
            transform 0.2s ease,
            border-color 0.2s ease,
            box-shadow 0.2s ease;
    }


    .skill-card:hover {
        transform: translateY(-4px);

        border-color:
            rgba(13, 202, 240, 0.3);

        box-shadow:
            0 20px 45px rgba(0, 0, 0, 0.28);
    }


    .skill-icon {
        width: 52px;
        height: 52px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 15px;

        background:
            rgba(13, 202, 240, 0.08);

        border:
            1px solid rgba(13, 202, 240, 0.18);

        font-size: 25px;
    }


    .skill-name {
        color: #eef4fa;

        font-size: 1.15rem;

        font-weight: 600;
    }


    .skill-level {
        color: #48d9ef;

        font-size: 0.85rem;

        font-weight: 700;
    }


    .skill-xp {
        color: #71869c;

        font-size: 0.8rem;
    }


    .skill-progress {
        height: 10px;

        overflow: hidden;

        border-radius: 999px;

        background:
            rgba(255, 255, 255, 0.06);
    }


    .skill-progress-bar {
        height: 100%;

        border-radius: inherit;

        background:
            linear-gradient(
                90deg,
                #096b87,
                #0dcaf0
            );

        box-shadow:
            0 0 12px rgba(13, 202, 240, 0.18);
    }


    /* MOBILE */

    @media (max-width: 767.98px) {

        .character-hero {
            min-height: auto;
        }


        .character-avatar {
            width: 90px;
            height: 90px;

            flex-basis: 90px;

            border-radius: 24px;

            font-size: 46px;
        }


        .character-name {
            font-size: 2rem;
        }


        .xp-panel {
            margin-top: 20px;
        }

    }

</style>


<div class="character-page py-4 py-lg-5">

    <div class="container">


        {{-- HERO --}}

        <div class="character-hero p-4 p-lg-5 mb-4">

            <div class="position-relative z-1">


                <div class="d-flex align-items-center gap-4 flex-wrap">


                    <div class="character-avatar">

                        🧙

                    </div>


                    <div class="flex-grow-1">

                        <div class="text-uppercase small fw-bold text-info mb-2">

                            Персонаж

                        </div>


                        <h1 class="character-name mb-3">

                            {{ $character->name }}

                        </h1>


                        <div class="character-level">

                            ⭐ Уровень {{ $character->level }}

                        </div>

                    </div>


                </div>


                {{-- XP --}}

                <div class="xp-panel">


                    <div class="d-flex justify-content-between align-items-center mb-2">

                        <span class="xp-label">

                            Опыт до следующего уровня

                        </span>


                        <span class="xp-value">

                            {{ $character->xp }}
                            /
                            {{ $xpToNextLevel }}
                            XP

                        </span>

                    </div>


                    <div
                        class="xp-progress"
                        role="progressbar"
                        aria-label="Прогресс опыта"
                        aria-valuenow="{{ $character->xp }}"
                        aria-valuemin="0"
                        aria-valuemax="{{ $xpToNextLevel }}"
                    >

                        <div
                            class="xp-progress-bar"
                            style="width: {{ $xpPercent }}%"
                        ></div>

                    </div>


                    <div class="d-flex justify-content-between mt-2">

                        <small class="text-secondary">

                            {{ round($xpPercent) }}% уровня

                        </small>


                        <small class="text-secondary">

                            Осталось:
                            {{ max(0, $xpToNextLevel - $character->xp) }} XP

                        </small>

                    </div>


                </div>


            </div>

        </div>


        {{-- STATS --}}

        <div class="row g-4">


            <div class="col-12 col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">
                        ⚡
                    </div>

                    <div class="stat-label">
                        Текущий уровень
                    </div>

                    <div class="stat-value">
                        {{ $character->level }}
                    </div>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">
                        🏆
                    </div>

                    <div class="stat-label">
                        Всего опыта
                    </div>

                    <div class="stat-value">
                        {{ $character->total_xp }}
                        <span class="fs-6 text-secondary">XP</span>
                    </div>

                </div>

            </div>


            <div class="col-12 col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">
                        🧠
                    </div>

                    <div class="stat-label">
                        Навыков
                    </div>

                    <div class="stat-value">
                        {{ count($skills) }}
                    </div>

                </div>

            </div>


        </div>


        {{-- SKILLS HEADER --}}

        <div class="section-header">

            <h2 class="section-title mb-1">

                Навыки персонажа

            </h2>


            <div class="section-subtitle">

                Развивай реальные навыки через выполнение активностей.

            </div>

        </div>


        {{-- SKILLS --}}

        <div class="row g-4">


            @foreach ($skills as $skill)


                @php

                    $skillIcon = match (mb_strtolower($skill['skill']->name)) {

                        'программирование' => '💻',

                        'спорт' => '🏋️',

                        'английский язык' => '🌎',

                        'чтение' => '📚',

                        'учёба' => '🎓',

                        default => '🧠',

                    };

                @endphp


                <div class="col-12 col-md-6">


                    <div class="skill-card">


                        <div class="d-flex align-items-center gap-3 mb-4">


                            <div class="skill-icon">

                                {{ $skillIcon }}

                            </div>


                            <div class="flex-grow-1">

                                <div class="skill-name">

                                    {{ $skill['skill']->name }}

                                </div>


                                <div class="skill-level">

                                    Уровень {{ $skill['level'] }}

                                </div>

                            </div>


                            <div class="skill-xp text-end">

                                {{ $skill['xp'] }}

                                /

                                {{ $skill['xpToNextLevel'] }}

                                XP

                            </div>


                        </div>


                        <div class="skill-progress">

                            <div
                                class="skill-progress-bar"
                                style="width: {{ $skill['xpPercent'] }}%"
                            ></div>

                        </div>


                        <div class="d-flex justify-content-between mt-2">

                            <small class="text-secondary">

                                Прогресс

                            </small>


                            <small class="text-secondary">

                                {{ round($skill['xpPercent']) }}%

                            </small>

                        </div>


                    </div>

                </div>


            @endforeach


        </div>


    </div>

</div>


</x-app-layout>
