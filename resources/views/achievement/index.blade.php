<x-app-layout>

    <style>
        .achievements-page {
            background:
                radial-gradient(circle at 15% 10%, rgba(13, 202, 240, 0.08), transparent 28%),
                radial-gradient(circle at 85% 20%, rgba(111, 66, 193, 0.08), transparent 30%),
                #07111f;
            min-height: calc(100vh - 56px);
            overflow: visible;
            color: #e8eef7;
        }

        .achievement-hero {
            position: relative;
            overflow: hidden;
            min-height: 150px;
            max-height: 150px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background:
                linear-gradient(90deg, rgba(4, 12, 24, 0.97) 0%, rgba(4, 12, 24, 0.72) 48%, rgba(4, 12, 24, 0.35) 100%),
                radial-gradient(circle at 75% 30%, rgba(255, 193, 7, 0.18), transparent 25%),
                linear-gradient(135deg, #10233b, #0a1729 55%, #17253d);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
        }

        .achievement-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(120deg, transparent 0 58%, rgba(13, 202, 240, 0.08) 58% 59%, transparent 59%),
                linear-gradient(160deg, transparent 0 72%, rgba(255, 193, 7, 0.06) 72% 73%, transparent 73%);
            pointer-events: none;
        }

        .hero-icon {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 24px;
            font-size: 32px;
            background: rgba(255, 193, 7, 0.12);
            border: 1px solid rgba(255, 193, 7, 0.35);
            box-shadow:
                0 0 35px rgba(255, 193, 7, 0.18),
                inset 0 0 25px rgba(255, 193, 7, 0.05);
        }

        .rpg-title {
            font-family: Georgia, "Times New Roman", serif;
            letter-spacing: 0.5px;
        }

        .summary-card,
        .achievement-card {
            background: linear-gradient(145deg, rgba(17, 35, 57, 0.98), rgba(8, 22, 38, 0.98));
            border: 1px solid rgba(130, 170, 210, 0.18);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.22);
        }

        .summary-card {
            min-height: 96px;
            transition: transform 0.2s ease, border-color 0.2s ease;
        }

        .summary-card:hover {
            transform: translateY(-3px);
            border-color: rgba(13, 202, 240, 0.35);
        }

        .summary-icon {
            width: 58px;
            height: 58px;
            flex: 0 0 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 28px;
            background: rgba(13, 202, 240, 0.1);
            border: 1px solid rgba(13, 202, 240, 0.18);
        }

        .summary-icon.gold {
            background: rgba(255, 193, 7, 0.1);
            border-color: rgba(255, 193, 7, 0.2);
        }

        .summary-icon.green {
            background: rgba(25, 135, 84, 0.12);
            border-color: rgba(25, 135, 84, 0.25);
        }

        .summary-value {
            font-size: 1.45rem;
            font-weight: 700;
        }

        .section-title {
            font-family: Georgia, "Times New Roman", serif;
            color: #f4f7fb;
        }

        .filter-pills {
            background: rgba(15, 31, 51, 0.8);
            border: 1px solid rgba(130, 170, 210, 0.16);
            padding: 4px;
            border-radius: 999px;
        }

        .filter-pills .btn {
            color: #9fb2c8;
            border: 0;
            border-radius: 999px;
        }

        .filter-pills .btn:hover,
        .filter-pills .btn.active {
            color: #fff;
            background: #087f68;
        }

        .achievement-card {
            position: relative;
            overflow: hidden;
            height: 100%;
            border-radius: 16px;
            transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .achievement-card:hover {
            transform: translateY(-4px);
            border-color: rgba(13, 202, 240, 0.35);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.32);
        }

        .achievement-card.unlocked {
            border-color: rgba(32, 201, 151, 0.7);
            background:
                radial-gradient(circle at 20% 10%, rgba(32, 201, 151, 0.12), transparent 32%),
                linear-gradient(145deg, rgba(11, 52, 50, 0.98), rgba(7, 28, 36, 0.98));
        }

        .achievement-card.unlocked:hover {
            box-shadow: 0 20px 50px rgba(32, 201, 151, 0.12);
        }

        .achievement-badge {
            width: 76px;
            height: 76px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 22px;
            font-size: 34px;
            background: linear-gradient(145deg, #26384d, #101d2d);
            border: 2px solid #73869c;
            box-shadow: inset 0 0 20px rgba(255,255,255,0.04);
        }

        .unlocked .achievement-badge {
            border-color: #ffc107;
            background: linear-gradient(145deg, #684f16, #272112);
            box-shadow:
                0 0 28px rgba(255, 193, 7, 0.16),
                inset 0 0 20px rgba(255, 193, 7, 0.06);
        }

        .achievement-name {
            font-family: Georgia, "Times New Roman", serif;
            color: #f3f6fa;
            font-size: 1.05rem;
        }

        .achievement-description {
            color: #91a4ba;
            min-height: 36px;
        }

        .status-badge {
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(255,255,255,0.06);
            color: #b8c5d4;
        }

        .status-badge.unlocked {
            color: #7ff0c9;
            background: rgba(32, 201, 151, 0.1);
            border-color: rgba(32, 201, 151, 0.3);
        }

        .rpg-progress {
            height: 9px;
            background: #14263b;
            border-radius: 999px;
            overflow: hidden;
        }

        .rpg-progress-fill {
            display: block;
            height: 100%;
            min-width: 0;
            max-width: 100%;
            border-radius: 999px;
            background: linear-gradient(90deg, #20c997, #48e0bb);
            box-shadow: 0 0 12px rgba(32, 201, 151, 0.35);
        }

        .locked .rpg-progress-fill {
            background: linear-gradient(90deg, #1769aa, #20c4e8);
            box-shadow: 0 0 12px rgba(32, 196, 232, 0.25);
        }

        .reward {
            color: #ffd66b;
        }

        .date-text {
            color: #70849a;
            font-size: 0.8rem;
        }

        .quote-panel {
            position: relative;
            overflow: hidden;
            min-height: 115px;
            border: 1px solid rgba(13, 202, 240, 0.18);
            background:
                linear-gradient(90deg, rgba(5, 18, 30, 0.96), rgba(9, 30, 42, 0.86)),
                radial-gradient(circle at 80% 50%, rgba(255, 119, 0, 0.2), transparent 25%);
        }

        .quote-panel::after {
            content: "✦";
            position: absolute;
            right: 8%;
            bottom: -35px;
            font-size: 130px;
            color: rgba(255, 193, 7, 0.08);
        }

        @media (max-width: 767.98px) {
            .achievement-hero {
                min-height: 170px;
                max-height: 170px;
            }

            .hero-icon {
                width: 68px;
                height: 68px;
                font-size: 34px;
            }

            .filter-pills {
                width: 100%;
                border-radius: 14px;
            }

            .filter-pills .btn {
                flex: 1 1 50%;
                border-radius: 10px;
            }
        }
    </style>

    <div class="achievements-page py-4 py-lg-5">

        <div class="container">

            {{-- Hero --}}
            <div class="achievement-hero rounded-4 p-3 p-lg-4 mb-3">
                <div class="position-relative z-1 d-flex align-items-center gap-4 h-100">

                    <div class="hero-icon">
                        🏆
                    </div>

                    <div>
                        <div class="text-uppercase small fw-bold text-info mb-2">
                            Журнал героя
                        </div>

                        <h1 class="rpg-title display-5 fw-bold mb-2">
                            Достижения
                        </h1>

                        <p class="text-light opacity-75 mb-0 fs-5">
                            Выполняй цели, развивай персонажа и собирай награды.
                        </p>
                    </div>

                </div>
            </div>

            {{-- Summary --}}
            @php
                $unlockedCount = $achievements->where('unlocked', true)->count();
                $totalCount = $achievements->count();
                $unlockedPercent = $totalCount > 0
                    ? ($unlockedCount / $totalCount) * 100
                    : 0;

                $totalRewardXp = $achievements
                    ->where('unlocked', true)
                    ->sum(fn ($item) => $item['achievement']->xp_reward);
            @endphp

            <div class="row g-3 mb-3">

                <div class="col-12 col-md-4">
                    <div class="summary-card rounded-4 p-4 h-100">
                        <div class="d-flex align-items-center gap-3">
                            <div class="summary-icon gold">🏆</div>

                            <div class="flex-grow-1">
                                <div class="text-secondary small">
                                    Получено достижений
                                </div>

                                <div class="summary-value">
                                    {{ $unlockedCount }}
                                    <span class="text-secondary fs-6">
                                        / {{ $totalCount }}
                                    </span>
                                </div>

                                <div class="rpg-progress mt-2">
                                    <span
                                        class="rpg-progress-fill"
                                        style="width: {{ $unlockedPercent }}%;"
                                    ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="summary-card rounded-4 p-4 h-100">
                        <div class="d-flex align-items-center gap-3">
                            <div class="summary-icon gold">⭐</div>

                            <div>
                                <div class="text-secondary small">
                                    Получено XP за достижения
                                </div>

                                <div class="summary-value">
                                    {{ $totalRewardXp }}
                                    <span class="text-secondary fs-6">XP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="summary-card rounded-4 p-4 h-100">
                        <div class="d-flex align-items-center gap-3">
                            <div class="summary-icon green">🎯</div>

                            <div class="flex-grow-1">
                                <div class="text-secondary small">
                                    Следующая цель
                                </div>

                                @php
                                    $nextAchievement = $achievements
                                        ->first(fn ($item) => !$item['unlocked']);
                                @endphp

                                @if ($nextAchievement)
                                    <div class="summary-value fs-5">
                                        {{ $nextAchievement['achievement']->name }}
                                    </div>

                                    <div class="text-secondary small">
                                        {{ $nextAchievement['progress'] }}
                                        /
                                        {{ $nextAchievement['requirement'] }}
                                    </div>
                                @else
                                    <div class="summary-value fs-5">
                                        Все получены!
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Heading + filters --}}
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-3">

                <div>
                    <h2 class="section-title mb-1">
                        Все достижения
                    </h2>

                    <div class="text-secondary">
                        Твой путь состоит из маленьких побед.
                    </div>
                </div>

                <div class="filter-pills d-flex flex-wrap">
                    <button
                        class="btn btn-sm active achievement-filter"
                        type="button"
                        data-filter="all"
                    >
                        Все
                    </button>

                    <button
                        class="btn btn-sm achievement-filter"
                        type="button"
                        data-filter="unlocked"
                    >
                        Полученные
                    </button>

                    <button
                        class="btn btn-sm achievement-filter"
                        type="button"
                        data-filter="in-progress"
                    >
                        В процессе
                    </button>

                    <button
                        class="btn btn-sm achievement-filter"
                        type="button"
                        data-filter="locked"
                    >
                        Заблокированные
                    </button>
                </div>

            </div>

            {{-- Achievements --}}
            <div class="row g-3">

                @forelse ($achievements as $item)

                    @php
                        $achievement = $item['achievement'];
                    @endphp

                    @php
                        $filterStatus = $item['unlocked']
                            ? 'unlocked'
                            : ($item['progress'] > 0 ? 'in-progress' : 'locked');
                    @endphp

                    <div
                        class="col-12 col-md-6 col-xl-4 achievement-item"
                        data-status="{{ $filterStatus }}"
                    >

                        <div class="achievement-card p-3 {{ $item['unlocked'] ? 'unlocked' : 'locked' }}">

                            <div class="d-flex justify-content-between align-items-start gap-3 mb-3">

                                <div class="achievement-badge">
                                    @if ($item['unlocked'])
                                        🏆
                                    @elseif ($achievement->type === 'activity_count')
                                        ⚡
                                    @elseif ($achievement->type === 'character_level')
                                        🛡️
                                    @elseif ($achievement->type === 'total_xp')
                                        ⭐
                                    @else
                                        🔒
                                    @endif
                                </div>

                                <span class="status-badge {{ $item['unlocked'] ? 'unlocked' : '' }} rounded-pill px-3 py-2 small">
                                    @if ($item['unlocked'])
                                        ✓ Получено
                                    @elseif ($item['progress'] > 0)
                                        ◐ В процессе
                                    @else
                                        🔒 Заблокировано
                                    @endif
                                </span>

                            </div>

                            <h3 class="achievement-name mb-2">
                                {{ $achievement->name }}
                            </h3>

                            <p class="achievement-description mb-3">
                                {{ $achievement->description }}
                            </p>

                            <div class="d-flex justify-content-between small mb-2">
                                <span class="text-secondary">
                                    Прогресс
                                </span>

                                <span class="fw-semibold">
                                    {{ $item['progress'] }}
                                    /
                                    {{ $item['requirement'] }}
                                </span>
                            </div>

                            <div class="rpg-progress mb-3">
                                <span
                                    class="rpg-progress-fill"
                                    style="width: {{ $item['percent'] }}%;"
                                ></span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <div class="reward fw-semibold">
                                    ⭐ +{{ $achievement->xp_reward }} XP
                                </div>

                                @if ($item['unlocked'])
                                    <div class="date-text">
                                        Выполнено
                                    </div>
                                @else
                                    <div class="date-text">
                                        В процессе
                                    </div>
                                @endif

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12">
                        <div class="achievement-card rounded-4 p-5 text-center">
                            <div class="display-4 mb-3">🏆</div>

                            <h3 class="rpg-title">
                                Достижений пока нет
                            </h3>

                            <p class="text-secondary mb-0">
                                Скоро здесь появятся твои первые испытания.
                            </p>
                        </div>
                    </div>

                @endforelse

            </div>

            {{-- Quote --}}
            <div class="quote-panel rounded-4 mt-3 p-3 p-lg-4 text-center">

                <div class="text-secondary small text-uppercase fw-bold mb-2">
                    Путь героя
                </div>

                <p class="rpg-title fs-4 mb-2">
                    «Рим не сразу строился, но кирпичи клали каждый день.»
                </p>

                <div class="text-secondary">
                    Продолжай. Следующая награда уже ближе, чем кажется.
                </div>

            </div>

        </div>

    </div>

    <style>
        .achievement-item {
            transition: opacity 0.18s ease, transform 0.18s ease;
        }

        .achievement-item.is-hidden {
            display: none;
        }

        .achievement-filter {
            cursor: pointer;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filters = document.querySelectorAll('.achievement-filter');
            const items = document.querySelectorAll('.achievement-item');

            filters.forEach(function (filter) {
                filter.addEventListener('click', function () {
                    const selectedFilter = this.dataset.filter;

                    filters.forEach(function (button) {
                        button.classList.remove('active');
                    });

                    this.classList.add('active');

                    items.forEach(function (item) {
                        const status = item.dataset.status;

                        if (
                            selectedFilter === 'all' ||
                            selectedFilter === status
                        ) {
                            item.classList.remove('is-hidden');
                        } else {
                            item.classList.add('is-hidden');
                        }
                    });
                });
            });
        });
    </script>

</x-app-layout>
