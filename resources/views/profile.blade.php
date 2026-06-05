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
        <div class="row justify-content-center py-5">
            <div class="col-md-6 col-lg-8">
                <div class="border shadow bg-body profile-card rounded-3 p-5">
                    <div class="row g-4 align-items-start">
                        <div class="col-3 px-0">

                            <div style="position: relative; display: inline-block;">
                                <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/images/default-pfp.png') }}" 
                                    class="profile-picture" id="avatarPreview">
                                <label for="avatarInput" style="position: absolute; bottom: 0; right: 10px; cursor: pointer; background: rgba(0,0,0,0.5); border-radius: 50%; padding: 4px;">
                                    <i class="ti ti-camera" style="color: white; font-size: 16px;" title="Change Profile Picture">Change Profile Picture</i>
                                </label>
                                <form id="avatarForm" action="/updateAvatar" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" id="avatarInput" name="avatar" accept="image/*" style="display: none;">
                                </form>
                            </div>

                            <p class="fw-bold mt-2 mb-0 text medium">Bio</p>
                            <div class="border rounded-3 shadow-sm p-2 text small {{auth()->user()->bio ? 'text-body' : 'text-secondary'}}" data-bs-toggle="collapse" data-bs-target="#editBio" style="cursor: pointer;">
                                {{auth()->user()->bio ?? 'Click to add bio...'}}
                            </div>

                            <div class="collapse" id="editBio">
                                <form action="/updateProfile" method="POST">
                                    @csrf
                                    <input type="text" name="bio" value="{{auth()->user()->bio}}" class="form-control form-control-sm mt-2">
                                    <button type="submit" class="btn btn-sm btn-dark mt-2">Save</button>
                                </form>
                            </div>

                            <div class="mt-3">
                                <a href="/" class="btn btn-sm btn-primary mb-2"> Back to Home</a>
                            </div>
                        </div>
                        <div class="col-9 ps-3">
                            <div class="border shadow-sm rounded-3 bg-body p-2 mb-3">
                                {{-- <p class="mb-1"> <span class="fw-bold">Name:</span> <span class="ms-custom text-end">{{ auth()->user()->name }}</span></p> --}}
                                <p class="mb-1 d-flex justify-content-between">
                                    <span class="fw-bold">Name:</span>
                                    <span class="d-flex align-items-center gap-1">
                                        {{ auth()->user()->name }}
                                        <a href="#" class="ms-2 text-secondary small " data-bs-toggle="collapse" data-bs-target="#editName">Edit</a>
                                    </span>
                                </p>
                                <div class="collapse" id="editName">
                                    <form action="/updateProfile" method="POST">
                                        @csrf
                                        <input type="hidden" name="current_name" value="{{auth()->user()->name}}">
                                        <input type="text" name="name" class="form-control form-control-sm mb-2" value="{{auth()->user()->name}}">
                                        <button type="submit" class="btn btn-sm btn-dark">Save</button>
                                    </form>
                                </div>
                            </div>

                            <div class="border shadow-sm rounded-3 bg-body p-2 mb-3">
                                {{-- <p class="mb-1"> <span class="fw-bold">Name:</span> <span class="ms-custom text-end">{{ auth()->user()->name }}</span></p> --}}
                                <p class="mb-1 d-flex justify-content-between">
                                    <span class="fw-bold">Email:</span>
                                    <span class="d-flex align-items-center gap-1">
                                        {{ auth()->user()->email }}
                                        <a href="#" class="ms-2 text-secondary small" data-bs-toggle="collapse" data-bs-target="#editEmail">Edit</a>
                                    </span>
                                </p>
                                <div class="collapse" id="editEmail">
                                        <form action="/updateProfile" method="POST">
                                            @csrf
                                            <input type="hidden" name="current_email" value="{{auth()->user()->email}}">
                                            <input type="text" class="form-control form-control-sm mb-2" name="email" value="{{auth()->user()->email}}">
                                            <button type="submit" class="btn btn-sm btn-dark">Save</button>
                                        </form>
                                </div>
                            </div>

                            <div class="border shadow-sm rounded-3 bg-body p-2 mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-bold">Phone Number:</span>
                                    <span class="align-items-center">
                                        <span class="{{auth()->user()->phone ? 'text-body' : 'text-secondary'}}">
                                            {{auth()->user()->phone ?? 'Add number'}}
                                        </span>
                                        <a href="#" class="ms-2 text-secondary small" data-bs-toggle="collapse" data-bs-target="#editPhoneNumber">Edit</a>
                                    </span>
                                </div>
                                <div class="collapse" id="editPhoneNumber">
                                    <form action="/updateProfile" method="POST">
                                        @csrf
                                        <input type="hidden" name="current_phone" value="{{auth()->user()->phone}}">
                                        <input type="text" name="phone" class="form-control form-control-sm mb-2" value="{{auth()->user()->phone}}">
                                        <button type="submit" class="btn btn-sm btn-dark">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div class="border rounded-3 shadow p-2">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">Location:</span>
                                    <span class="{{auth()->user()->location ? 'text-body' : 'text-secondary'}}">
                                        {{auth()->user()->location ?? 'Add a location'}}
                                        <a href="#" class="text text-secondary small ms-2" data-bs-toggle="collapse" data-bs-target="#editLocation">Edit</a>
                                    </span>
                                </div>
                                <div class="collapse" id="editLocation">
                                    <form action="/updateProfile" method="POST">
                                        @csrf
                                        <input type="text" name="location" class="form-control form-control-sm mb-2" value="{{auth()->user()->location}}">
                                        <button type="submit" class="btn btn-sm btn-dark">Save</button>
                                    </form>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-5">
                                <form action="/deleteAccount" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-md">Delete Account</button>
                                </form>
                                
                            </div>
                        </div>
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

    <script>
    document.getElementById('avatarInput').addEventListener('change', function(){
        document.getElementById('avatarForm').submit();
    });
    </script>
    
@endsection