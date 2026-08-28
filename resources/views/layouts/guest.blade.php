<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


<title>{{ config('app.name', 'Life RPG') }}</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-light">


<div class="min-vh-100 d-flex align-items-center justify-content-center py-5">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-sm-10 col-md-8 col-lg-5">

                <div class="text-center mb-4">
                    <a href="/" class="text-decoration-none">
                        <x-application-logo class="auth-logo mx-auto" />
                    </a>
                </div>

                <div class="card shadow border-0">
                    <div class="card-body p-4 p-md-5">
                        {{ $slot }}
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

</body>
</html>
