<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <title>@yield('title', 'RoundTours')</title>
    <link rel="icon" type="image/png" sizes="80x80" href="/assets/images/favicon.png">
    <link href="/assets/css/main.css" rel="stylesheet">
    @stack('styles')

    <style>
        .profile-picture {
          width: 100%;
          height: auto;
          border-radius: 50%;
          aspect-ratio: 1/1;
          object-fit: cover;
      } 

      .profile-card{
        padding: 10rem 10rem;
      }
    </style>
</head>
<body>
    @yield('content')

    @include('partials.footer')
    
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    @stack('scripts')
</body>
</html>