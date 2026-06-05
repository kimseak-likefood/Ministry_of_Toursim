@extends('layouts.app')
@section('content')

<div class="container pt-3">
        <div class="d-flex align-items-center gap-4" style="padding-top: 10px">
            <img src="{{ asset('assets/images/MOT1-logo.png') }}" alt="Logo" height="40">
              <div>
                  <p class="mb-0">ក្រសួងទេសចរណ៍</p>
                  <p class="mb-0">Ministry of Tourism</p>
              </div>
          </div>
    </div>

<main class="container">
  <div class="row justify-content-center py-4 mb-5">
    <div class="col-md-6 col-lg-5">
      <div class="border rounded-3 p-4 shadow-sm bg-body">
        <h2 class="mb-1">Welcome back!</h2>
        <p class="text-body-secondary mb-4">Sign in to your account</p>

        <form action="/login" method="post">
          @csrf

          @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
          @endif

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="john@example.com">
            @error('email')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-1">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Your password">
            @error('password')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="text-end mb-3">
            <a href="#" class="small">Forgot password?</a>
          </div>

          <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label text-body-secondary small" for="remember">Remember me</label>
          </div>

          <button type="submit" class="btn btn-dark w-100">Sign in</button>

          <p class="text-center text-body-secondary small mt-3 mb-0">
            Don't have an account? <a href="/register">Sign up</a>
          </p>
        </form>
         
        <div class="text-center mt-3">
          <button class="btn btn-sm btn-primary">Back Home</button>
        </div>

      </div>
    </div>
  </div>
</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>
    Blog template built for
    <a href="https://getbootstrap.com/">Bootstrap</a> by
    <a href="https://x.com/mdo">@mdo</a>.
  </p>
  <p class="mb-0"><a href="#">Back to top</a></p>
</footer>

@endsection