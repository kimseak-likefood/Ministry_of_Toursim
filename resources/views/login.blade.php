@extends('layouts.app')
@section('content')
    
    </div>
    <main class="container">
              <div class="row justify-content-center py-5">
      <div class="col-md-6 col-lg-5">
        <div class="border rounded-3 p-4 shadow-sm bg-body">
          <h2 class="mb-1">Welcome back</h2>
          <p class="text-body-secondary mb-4">Sign in to your account</p>

        <form action="/login" method = "post">
          @csrf

          @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
          @endif

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="loginname" placeholder="john@example.com">
          </div>

          <div class="mb-1">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="loginpassword" placeholder="Your password">
          </div>

          <div class="text-end mb-3">
            <a href="#" class="small">Forgot password?</a>
          </div>

          <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label text-body-secondary small" for="remember">Remember me</label>
          </div>

          <button class="btn btn-dark w-100" name="submit">Sign in</button>

            <p class="text-center text-body-secondary small mt-3 mb-0">
              Don't have an account? <a href="/signup">Sign up</a>
            </p>
          </div>
        </form>
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