<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <title>@yield('title', 'RoundTours')</title>
    <link rel="icon" type="image/png" sizes="80x80" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    @stack('scripts')
</body>
</html>
