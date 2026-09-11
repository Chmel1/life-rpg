@php
    $character = Auth::user()->character;

    $xpToNextLevel = (int) round(
        100 * pow($character->level, 1.5)
    );

    $xpProgress = $xpToNextLevel > 0
        ? min(100, ($character->xp / $xpToNextLevel) * 100)
        : 0;
@endphp

<nav class="navbar navbar-expand-lg navbar-dark rpg-navbar">

    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            ⚔ Life RPG
        </a>

        {{-- Mobile button --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Переключить навигацию"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            {{-- Navigation --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}"
                    >
                        Персонаж
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('activities.*') ? 'active' : '' }}"
                        href="{{ route('activities.index') }}"
                    >
                        Активности
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('skills.*') ? 'active' : '' }}"
                        href="{{ route('skills.index') }}"
                    >
                        Навыки
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('achievement.*') ? 'active' : '' }}"
                        href="{{ route('achievement.index') }}"
                    >
                        Достижения
                    </a>
                </li>

                

            </ul>
            <a
                        href="{{ route('notifications.index') }}"
                        class="notifications-navbar"
                    >
                        <span class="notifications-navbar-icon">
                            🔔
                        </span>

                        @php
                            $unreadNotificationsCount = Auth::user()
                                ->unreadNotifications()
                                ->count();
                        @endphp

                        @if($unreadNotificationsCount > 0)
                            <span class="notifications-navbar-badge">
                                {{ $unreadNotificationsCount }}
                            </span>
                        @endif
                    </a>

            {{-- Character --}}
            <div class="dropdown character-dropdown">

                <button
                    class="btn character-navbar dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >

                    <div class="character-navbar-icon">
                        ⚔
                    </div>

                    <div class="character-navbar-info">

                        <div class="character-navbar-name">
                            {{ $character->name }}
                        </div>

                        <div class="character-navbar-stats">

                            <span class="character-level">
                                LVL {{ $character->level }}
                            </span>

                            <span class="character-xp">
                                {{ $character->xp }}
                                /
                                {{ $xpToNextLevel }}
                                XP
                            </span>

                        </div>

                        <div class="character-navbar-progress">
                            <div
                                class="character-navbar-progress-bar"
                                style="width: {{ $xpProgress }}%;"
                            ></div>
                        </div>

                    </div>

                </button>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <a
                            class="dropdown-item"
                            href="{{ route('profile.edit') }}"
                        >
                            Профиль
                        </a>
                    </li>

                    <li>
                        <a
                            class="dropdown-item"
                            href="{{ route('dashboard') }}"
                        >
                            Персонаж
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                        >
                            @csrf

                            <button
                                type="submit"
                                class="dropdown-item"
                            >
                                Выйти
                            </button>
                        </form>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>


<style>

    .character-navbar {
        display: flex;
        align-items: center;
        gap: 10px;

        padding: 5px 10px;

        color: #fff;
        background: rgba(255, 255, 255, 0.04);

        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 10px;

        transition: all 0.2s ease;
    }

    .character-navbar:hover {
        color: #fff;
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.2);
    }


    .character-navbar-icon {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 20px;

        background: rgba(13, 110, 253, 0.15);

        border: 1px solid rgba(13, 110, 253, 0.35);
        border-radius: 8px;
    }


    .character-navbar-info {
        min-width: 150px;
        text-align: left;
    }


    .character-navbar-name {
        font-size: 14px;
        font-weight: 700;

        line-height: 1.2;

        margin-bottom: 2px;
    }


    .character-navbar-stats {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 10px;

        font-size: 11px;
        line-height: 1.2;
    }


    .character-level {
        color: #6ea8fe;
        font-weight: 700;
    }


    .character-xp {
        color: #adb5bd;
    }


    .character-navbar-progress {
        width: 100%;
        height: 4px;

        margin-top: 5px;

        overflow: hidden;

        background: rgba(255, 255, 255, 0.1);

        border-radius: 10px;
    }


    .character-navbar-progress-bar {
        height: 100%;

        background: #0d6efd;

        border-radius: 10px;

        transition: width 0.3s ease;
    }


    .character-navbar::after {
        margin-left: 4px;
    }
    .rpg-navbar {
        background:
            radial-gradient(
                circle at 15% 50%,
                rgba(13, 110, 253, 0.12),
                transparent 35%
            ),
            linear-gradient(
                90deg,
                #07111f,
                #0b1627
            );

        border-bottom: 1px solid rgba(90, 150, 255, 0.15);

        box-shadow:
            0 4px 20px rgba(0, 0, 0, 0.25);
    }
    .rpg-navbar .nav-link {
        color: #8b9bb4;
        transition: color 0.2s ease;
    }

    .rpg-navbar .nav-link:hover {
        color: #dbe8ff;
    }

    .rpg-navbar .nav-link.active {
        color: #6ea8fe;
        font-weight: 600;
    }
    .rpg-navbar .navbar-brand {.rpg-navbar .navbar-brand {
        color: #e8f1ff;
        letter-spacing: 0.3px;
    }

    .rpg-navbar .navbar-brand:hover {
        color: #6ea8fe;
    }
            color: #e8f1ff;
        letter-spacing: 0.3px;
    }

    .rpg-navbar .navbar-brand:hover {
        color: #6ea8fe;
    }
    .character-dropdown .dropdown-menu {
        background: #0b1627;
        border: 1px solid rgba(90, 150, 255, 0.18);
        border-radius: 10px;
        padding: 6px;

        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.45);
    }

    .character-dropdown .dropdown-item {
        color: #aebbd0;
        border-radius: 7px;
        padding: 8px 12px;

        transition:
            background 0.15s ease,
            color 0.15s ease;
    }

    .character-dropdown .dropdown-item:hover,
    .character-dropdown .dropdown-item:focus {
        color: #e8f1ff;
        background: rgba(13, 110, 253, 0.14);
    }

    .character-dropdown .dropdown-divider {
        border-color: rgba(255, 255, 255, 0.08);
    }

    .character-dropdown .dropdown-item:active {
        color: #ffffff;
        background: rgba(13, 110, 253, 0.25);
    }
    .notifications-navbar {
    position: relative;

    display: flex;
    align-items: center;
    justify-content: center;

    width: 42px;
    height: 42px;

    margin-right: 14px;

    color: #aebbd0;
    text-decoration: none;

    border: 1px solid transparent;
    border-radius: 10px;

    transition:
        color 0.2s ease,
        background 0.2s ease,
        border-color 0.2s ease;
}

    .notifications-navbar:hover {
        color: #e8f1ff;
        background: rgba(13, 110, 253, 0.10);
        border-color: rgba(90, 150, 255, 0.15);
    }

    .notifications-navbar-icon {
        font-size: 19px;
        line-height: 1;
    }

    .notifications-navbar-badge {
        position: absolute;

        top: 1px;
        right: 0;

        min-width: 18px;
        height: 18px;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 0 5px;

        color: #fff;
        background: #dc3545;

        border: 2px solid #0b1627;
        border-radius: 999px;

        font-size: 9px;
        font-weight: 700;
        line-height: 1;
    }
    
    @media (max-width: 991.98px) {

        .character-navbar {
            width: 100%;
            margin-top: 10px;
        }

        .character-navbar-info {
            min-width: 0;
            flex: 1;
        }

    }

</style>
