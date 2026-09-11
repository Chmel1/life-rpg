<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >

        <div class="min-vh-100">
            @include('layouts.navigation')
            

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="container py-4">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1080;">
            @foreach(auth()->user()->unreadNotifications as $notification)

                <div
                    class="toast notification-toast"
                    role="alert"
                    aria-live="assertive"
                    aria-atomic="true"
                    data-bs-autohide="true"
                    data-bs-delay="5000"
                >
                    <div class="toast-header">
                        @if($notification->data['type'] === 'level_up')
                            <span class="me-2">⬆️</span>
                            <strong class="me-auto">
                                {{ $notification->data['title'] }}
                            </strong>
                        @elseif($notification->data['type'] === 'achievement_unlocked')
                            <span class="me-2">🏆</span>
                            <strong class="me-auto">
                                {{ $notification->data['title'] }}
                            </strong>
                        @endif

                        <small>только что</small>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="toast"
                            aria-label="Закрыть"
                        ></button>
                    </div>

                    <div class="toast-body">
                        {{ $notification->data['message'] }}

                        @if($notification->data['type'] === 'achievement_unlocked')
                            <div class="mt-2 fw-bold">
                                +{{ $notification->data['xp_reward'] }} XP
                            </div>
                        @endif
                    </div>
                </div>

            @endforeach
        </div>
    </body>
</html>
