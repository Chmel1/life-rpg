<x-app-layout>

    <div class="container py-5">

        <div class="mb-4">
            <h1>Активности</h1>

            <p class="text-muted mb-0">
                Выполняй активности и прокачивай своего персонажа.
            </p>
        </div>

        <div class="row g-4">
            
            @if (session('success'))
                <div class="alert alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @foreach ($activities as $activity)

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body d-flex flex-column">

                            <h4 class="card-title">
                                {{ $activity->name }}
                            </h4>

                            <p class="text-muted">
                                {{ $activity->description }}
                            </p>

                            <div class="mb-3">

                                <span class="badge text-bg-primary">
                                    +{{ $activity->base_xp }} XP
                                </span>

                            </div>

                            <div class="mb-4">

                                <strong>
                                    Навыки:
                                </strong>

                                @foreach ($activity->skills as $skill)

                                    <div class="small text-muted">
                                        {{ $skill->name }}
                                        +{{ $skill->pivot->xp }} XP
                                    </div>

                                @endforeach

                            </div>

                            <div class="mt-auto">

                                <form
                                    method="POST"
                                    action="{{ route('activities.complete', $activity) }}"
                                >
                                    @csrf

                                    <button
                                        type="submit"
                                        class="btn btn-primary w-100"
                                    >
                                        Выполнить
                                    </button>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</x-app-layout>