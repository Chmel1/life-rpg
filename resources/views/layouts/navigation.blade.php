<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            ⚔ Life RPG
        </a>

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
                    <a class="nav-link" href="{{ route('skills.index') }}">
                        Навыки
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('achievement.index') }}">
                        Достижения
                    </a>
                </li>

            </ul>

            <div class="dropdown">

                <button
                    class="btn btn-outline-light dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    {{ Auth::user()->name }}
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
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
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