<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <title>@yield('title', 'Ministry of Tourism Cambodia')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/transparentlogo.png">
    <link href="/assets/css/main.css" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @if(!isset($hideHeader))
    @include('partials.header')
    @endif

    @yield('content')

    @include('partials.footer')
    
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    @stack('scripts')
</body>
</html>