<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <title>@yield('title', 'Ministry of Tourism ក្រសួងទេសចរណ៍')</title>
    <link rel="icon" type="image/png" sizes="80x80" href="/assets/images/MOT1-logo.png">
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

      .img-card-wrap:hover .admin-overlay { opacity: 1; }

      .admin-overlay {
          position: absolute; top: 0; left: 0;
          width: 100%; height: 100%;
          background: rgba(0,0,0,0.45);
          display: flex; align-items: center; justify-content: center;
          gap: 16px; opacity: 0;
          transition: opacity 0.3s ease;
      }

      .admin-btn {
          background: white; border: none; border-radius: 50%;
          width: 44px; height: 44px;
          display: flex; align-items: center; justify-content: center;
          cursor: pointer; font-size: 18px;
          box-shadow: 0 2px 8px rgba(0,0,0,0.3);
          transition: transform 0.2s;
          text-decoration: none;
      }

      .admin-btn:hover { transform: scale(1.15); }
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