<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/icons/font/bootstrap-icons.css') }}">

    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
</head>
<body class="d-flex flex-column min-vh-100">

    @include('layouts.navbar')

    <div class="container-fluid flex-grow-1">
        <div class="row flex-grow-1">
            @auth
            <!-- Sidebar -->
            
                @include('layouts.sidebar')
            </div>
            @endauth

            <!-- Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4  mt-5">
                <div class="row mt-5">

                    @yield('content')
                </div>

            </main>
    </div>

    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>

</body>
</html>
