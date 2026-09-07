<x-app-layout>

    <div class="container py-5">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h1 class="mb-3">
                    {{ $character->name }}
                </h1>

                <h4>
                    Уровень {{ $character->level }}
                </h4>

                <div class="mb-4">

                <div class="d-flex justify-content-between mb-2">
                    <span class="fw-bold">
                        Опыт
                    </span>

                    <span>
                        {{ $character->xp }} / {{ $xpToNextLevel }} XP
                    </span>
                </div>

                <div
                    class="progress"
                    role="progressbar"
                    aria-label="Прогресс опыта"
                    aria-valuenow="{{ $character->xp }}"
                    aria-valuemin="0"
                    aria-valuemax="{{ $xpToNextLevel }}"
                    style="height: 25px;"
                >
                    <div
                        class="progress-bar"
                        style="width: {{ $xpPercent }}%"
                    >
                        {{ round($xpPercent) }}%
                    </div>
                </div>
                     </div>

                <p class="text-muted">
                    Всего XP: {{ $character->total_xp }}
                </p>

            </div>
            </div>

            <div class="card shadow-sm border-0 mt-4">

                <div class="card-body">

                    <h3 class="mb-4">
                        Навыки
                    </h3>

                    <div class="row">

                        @foreach ($skills as $skill)

                            <div class="col-12 col-md-6 mb-4">

                                <div class="d-flex justify-content-between mb-2">

                                    <div>
                                        <strong>
                                            {{ $skill['skill']->name }}
                                        </strong>

                                        <span class="text-muted">
                                            Lv. {{ $skill['level'] }}
                                        </span>
                                    </div>

                                    <span class="text-muted">
                                        {{ $skill['xp'] }} /
                                        {{ $skill['xpToNextLevel'] }} XP
                                    </span>

                                </div>

                                <div
                                    class="progress"
                                    role="progressbar"
                                    aria-label="{{ $skill['skill']->name }}"
                                    aria-valuenow="{{ $skill['xp'] }}"
                                    aria-valuemin="0"
                                    aria-valuemax="{{ $skill['xpToNextLevel'] }}"
                                    style="height: 20px;"
                                >

                                    <div
                                        class="progress-bar"
                                        style="width: {{ $skill['xpPercent'] }}%"
                                    >
                                        {{ round($skill['xpPercent']) }}%
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

        </div>

    </div>

</x-app-layout>