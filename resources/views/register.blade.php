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
    <div class="row justify-content-center py-4 mb-5" >
      <div class="col-md-6 col-lg-5">
        <div class="border rounded-3 p-4 shadow-sm bg-body">
          
          <form action="/register" method="post"> 
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2 class="mb-1">Create an account</h2>
            <p class="text-body-secondary mb-4">Visit Cambodia Today</p>

            <div class="row g-3 mb-3">
              <div class="col">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="John Doe" name="name">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="john@example.com" name="email">
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Min. 6 characters" name = "password">
            </div>
            @error('password')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror 
            <div class="mb-3">
              <label class="form-label">Confirm password</label>
              <input type="password" class="form-control" placeholder="Confirm password" name = "password_confirmation">
            </div>

            {{-- <div class="mb-4 form-check">
              <input type="checkbox" class="form-check-input" id="terms">
              <label class="form-check-label text-body-secondary small" for="terms">
                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
              </label>
            </div> --}}

            <button class="btn btn-dark w-100 mt-3" type="submit">Create account</button>

            <p class="text-center text-body-secondary small mt-3 mb-0">
              Already have an account? <a href="/login">Log in</a>
            </p>
            {{-- <p class="text-center text-body-secondary small mt-3 mb-0">
              Back to Home <a href="/">Home</a>
            </p> --}}
            <div class="text-center mt-3">
              <a href="/" class="btn btn-sm btn-primary">Back to Home</a>
            </div>
            
          </form>
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