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

        overflow: hidden;
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
    .avatar-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: inherit;
    }
    .character-avatar-wrapper {
        flex: 0 0 125px;

        display: flex;
        flex-direction: column;
        align-items: center;

        gap: 10px;
    }
    .avatar-form {
        margin: 0;
    }

    .avatar-upload-button {
        display: inline-flex;
        align-items: center;
        gap: 6px;

        padding: 6px 10px;

        color: #8bdff2;

        background:
            rgba(13, 202, 240, 0.06);

        border:
            1px solid rgba(13, 202, 240, 0.18);

        border-radius: 8px;

        font-size: 11px;
        font-weight: 600;

        cursor: pointer;

        transition:
            color 0.2s ease,
            background 0.2s ease,
            border-color 0.2s ease,
            transform 0.2s ease;
    }

    .avatar-upload-button:hover {
        color: #dffaff;

        background:
            rgba(13, 202, 240, 0.12);

        border-color:
            rgba(13, 202, 240, 0.35);

        transform: translateY(-1px);
    }

    .avatar-upload-button span {
        font-size: 12px;
    }

    .avatar-upload-button input {
        display: none;
    }
    .level-icon{
        width: 36px;
        height: 36px;

        object-fit: cover;
    }
    .xp-icon{
        width: 52px;
        height: 52px;

        object-fit: cover;
    }
    .stat-content {
    display: flex;
    align-items: center;
    gap: 18px;
}

.stat-icon {
    width: 72px;
    height: 72px;

    flex: 0 0 72px;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;

    border-radius: 16px;
}

.stat-icon img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: contain;
}

.stat-info {
    display: flex;
    flex-direction: column;
    gap: 4px;
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
.rpg-stats-card {
    position: relative;
    padding: 24px;
    border: 1px solid rgba(120, 150, 190, 0.18);
    border-radius: 14px;

    background:
        linear-gradient(
            145deg,
            rgba(10, 23, 39, 0.96),
            rgba(7, 17, 31, 0.98)
        );

    box-shadow:
        0 10px 35px rgba(0, 0, 0, 0.35),
        inset 0 1px 0 rgba(255, 255, 255, 0.025);
}


/* HEADER */

.rpg-stats-header {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;
    margin-bottom: 22px;
}

.rpg-section-title {
    color: #e8edf5;

    font-family: Georgia, serif;
    font-size: 1.35rem;
    font-weight: 700;
    letter-spacing: 0.04em;
}

.rpg-section-subtitle {
    margin-top: 3px;

    color: #718096;
    font-size: 0.78rem;
}


/* STAT POINTS */

.stat-points {
    display: flex;
    align-items: center;
    gap: 7px;

    padding: 7px 12px;

    border: 1px solid rgba(212, 175, 55, 0.35);
    border-radius: 8px;

    background: rgba(212, 175, 55, 0.07);

    box-shadow:
        0 0 15px rgba(212, 175, 55, 0.04);
}

.stat-points-icon {
    color: #d4af37;
    font-size: 0.9rem;
}

.stat-points-value {
    color: #f1d36b;

    font-size: 1rem;
    font-weight: 700;
}

.stat-points-label {
    color: #8e8057;

    font-size: 0.62rem;
    font-weight: 700;
    letter-spacing: 0.1em;
}


/* STATS LIST */

.rpg-stats-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}


/* SINGLE STAT */

.rpg-stat-row {
    display: flex;
    align-items: center;

    min-height: 62px;
    padding: 10px 12px;

    border: 1px solid rgba(100, 130, 165, 0.13);
    border-radius: 10px;

    background: rgba(255, 255, 255, 0.018);

    transition:
        border-color 0.2s ease,
        background 0.2s ease,
        transform 0.2s ease;
}

.rpg-stat-row:hover {
    border-color: rgba(100, 160, 210, 0.25);
    background: rgba(255, 255, 255, 0.025);
}


/* NAME + PROGRESS */

.rpg-stat-info {
    flex: 1;
    min-width: 0;
}

.rpg-stat-name {
    margin-bottom: 7px;

    color: #d8e0eb;

    font-size: 0.95rem;
    font-weight: 600;
}

.rpg-stat-progress {
    width: 100%;
    max-width: 280px;
    height: 4px;

    overflow: hidden;

    border-radius: 999px;
    background: rgba(255, 255, 255, 0.07);
}

.rpg-stat-progress-fill {
    height: 100%;

    border-radius: inherit;

    background: linear-gradient(
        90deg,
        #7c3aed,
        #22d3ee
    );

    box-shadow:
        0 0 8px rgba(34, 211, 238, 0.25);

    transition: width 0.3s ease;
}


/* VALUE */

.rpg-stat-value {
    min-width: 65px;

    margin: 0 15px;

    color: #e7edf5;

    font-size: 1.15rem;
    font-weight: 700;
    text-align: center;
}

.rpg-stat-value span {
    color: #596579;

    font-size: 0.72rem;
    font-weight: 500;
}


/* PLUS BUTTON */

.rpg-stat-form {
    display: flex;
    align-items: center;
}

.rpg-stat-plus {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 38px;
    height: 38px;

    padding: 0;

    border-radius: 9px;

    font-size: 1.45rem;
    font-weight: 700;
    line-height: 1;

    transition:
        color 0.2s ease,
        border-color 0.2s ease,
        background 0.2s ease,
        box-shadow 0.2s ease,
        transform 0.15s ease;
}


/* ACTIVE */

.rpg-stat-plus.active {
    color: #f1d36b;

    border: 1px solid #c9a227;

    background: rgba(212, 175, 55, 0.08);

    box-shadow:
        0 0 10px rgba(212, 175, 55, 0.08),
        inset 0 0 10px rgba(212, 175, 55, 0.04);

    cursor: pointer;
}

.rpg-stat-plus.active:hover {
    color: #ffe58a;

    border-color: #f0c94b;

    background: rgba(212, 175, 55, 0.16);

    box-shadow:
        0 0 16px rgba(212, 175, 55, 0.22),
        inset 0 0 10px rgba(212, 175, 55, 0.06);

    transform: translateY(-1px);
}

.rpg-stat-plus.active:active {
    transform: translateY(1px);
}


/* DISABLED */

.rpg-stat-plus.disabled {
    color: #4d5868;

    border: 1px solid #303a48;

    background: rgba(255, 255, 255, 0.025);

    cursor: not-allowed;
}

.character-header {
    position: relative;
    z-index: 2;

    display: flex;
    align-items: flex-start;
    justify-content: space-between;

    gap: 30px;
}


.character-main-info {
    flex: 1;
    min-width: 0;

    padding-top: 8px;
}


.character-avatar-wrapper {
    flex: 0 0 125px;

    display: flex;
    flex-direction: column;
    align-items: center;

    gap: 10px;
}


.character-stats-wrapper {
    position: relative;
    z-index: 2;

    margin-top: 28px;
}



    /* MOBILE */

    @media (max-width: 767.98px) {

    .character-avatar-wrapper {
        flex: 0 0 90px;
    }

    .character-avatar {
        width: 90px;
        height: 90px;

        border-radius: 24px;

        font-size: 46px;
    }

    .character-name {
        font-size: 2rem;
    }

    .xp-panel {
        margin-top: 20px;
    }
    .rpg-stats-card {
        padding: 18px;
    }

    .rpg-stats-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .rpg-stat-value {
        min-width: 55px;
        margin: 0 8px;
    }

    .rpg-stat-progress {
        max-width: 180px;
    }
}

</style>


<div class="character-page py-4 py-lg-5">

    <div class="container">


        {{-- HERO --}}

        <div class="character-hero p-4 p-lg-5 mb-4">
            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

            @if ($errors->has('avatar'))
                <div class="alert alert-danger mt-3">
                    {{ $errors->first('avatar') }}
                </div>
            @endif
            <div class="position-relative z-1">


                <div class="character-header">

                    <div class="character-main-info">

                        <div class="text-uppercase small fw-bold text-info mb-2">
                            Персонаж
                        </div>

                        <h1 class="character-name mb-2">
                            {{ $character->name }}
                        </h1>

                        <div class="character-level">
                            Уровень {{ $character->level }}
                        </div>

                    </div>


                    <div class="character-avatar-wrapper">

                        <div class="character-avatar">

                            @if($character->avatar)

                                <img
                                    src="{{ asset('storage/' . $character->avatar) }}"
                                    alt="Аватар персонажа"
                                    class="avatar-image"
                                >

                            @else

                                🧙

                            @endif

                        </div>


                        <form
                            method="POST"
                            action="{{ route('character.avatar') }}"
                            enctype="multipart/form-data"
                            class="avatar-form"
                        >

                            @csrf

                            <label class="avatar-upload-button">

                                <span>✦</span>
                                Изменить образ

                                <input
                                    type="file"
                                    name="avatar"
                                    accept="image/jpeg,image/png,image/webp"
                                    onchange="this.form.submit()"
                                >

                            </label>

                        </form>

                    </div>

                </div>


                {{-- CHARACTER STATS --}}

                <div class="character-stats-wrapper">

                    <div class="rpg-stats-card">

                        <div class="rpg-stats-header">

                            <div>

                                <div class="rpg-section-title">
                                    Характеристики
                                </div>

                                <div class="rpg-section-subtitle">
                                    Сила твоего персонажа
                                </div>

                            </div>


                            <div class="stat-points">

                                <span class="stat-points-icon">
                                    ✦
                                </span>

                                <span class="stat-points-value">
                                    {{ $character->stat_points }}
                                </span>

                                <span class="stat-points-label">
                                    POINTS
                                </span>

                            </div>

                        </div>


                        <div class="rpg-stats-list">

                            @foreach ($character->stats as $stat)

                                @php
                                    $value = $stat->pivot->value;

                                    $canIncrease =
                                        $character->stat_points > 0 &&
                                        $value < 40;
                                @endphp


                                <div class="rpg-stat-row">

                                    <div class="rpg-stat-info">

                                        <div class="rpg-stat-name">
                                            {{ $stat->name }}
                                        </div>

                                        <div class="rpg-stat-progress">

                                            <div
                                                class="rpg-stat-progress-fill"
                                                style="width: {{ ($value / 40) * 100 }}%"
                                            ></div>

                                        </div>

                                    </div>


                                    <div class="rpg-stat-value">

                                        {{ $value }}

                                        <span>
                                            /40
                                        </span>

                                    </div>


                                    <form
                                        action="{{ route('dashboard.stats.increase', $stat) }}"
                                        method="POST"
                                        class="rpg-stat-form"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="rpg-stat-plus {{ $canIncrease ? 'active' : 'disabled' }}"
                                            {{ $canIncrease ? '' : 'disabled' }}
                                            title="{{ $canIncrease ? 'Увеличить характеристику' : 'Недостаточно очков' }}"
                                        >
                                            +
                                        </button>

                                    </form>

                                </div>

                            @endforeach

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

        {{-- LEVEL --}}
        <div class="col-12 col-md-4">

            <div class="stat-card">

                <div class="stat-content">

                    <div class="stat-icon">
                        <img
                            src="{{ asset('images/level.png') }}"
                            alt="Уровень"
                        >
                    </div>

                    <div class="stat-info">

                        <div class="stat-label">
                            Текущий уровень
                        </div>

                        <div class="stat-value">
                            {{ $character->level }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- XP --}}
        <div class="col-12 col-md-4">

            <div class="stat-card">

                <div class="stat-content">

                    <div class="stat-icon">
                        <img
                            src="{{ asset('images/xp.png') }}"
                            alt="Опыт"
                        >
                    </div>

                    <div class="stat-info">

                        <div class="stat-label">
                            Всего опыта
                        </div>

                        <div class="stat-value">
                            {{ $character->total_xp }}
                            <span class="fs-6 text-secondary">
                                XP
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- SKILLS --}}
        <div class="col-12 col-md-4">

            <div class="stat-card">

                <div class="stat-content">

                    <div class="stat-icon">
                        <img
                            src="{{ asset('images/skills.png') }}"
                            alt="Навыки"
                        >
                    </div>

                    <div class="stat-info">

                        <div class="stat-label">
                            Навыков
                        </div>

                        <div class="stat-value">
                            {{ count($skills) }}
                        </div>

                    </div>

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
