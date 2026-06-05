<li class="nav-item dropdown my-auto">
    <a href="#" class="nav-link dropdown-toggle p-0 user" id="navbarDropdown3"
        data-bs-toggle="dropdown" aria-expanded="false">
        <span class="d-inline-block p-2 theme-bg-primary rounded-circle lh-1">
            <i class="bi bi-person"></i>
        </span>
        @auth
            <span class="small ms-1">{{ Auth::user()->name }}</span>
        @else
            <span class="small ms-1">User</span>
        @endauth
    </a>
   @auth
    <ul class="dropdown-menu dropdown-menu-end sub-menu" aria-labelledby="navbarDropdown3" style="min-width: auto;">
        <li>
            <form action="/logout" method="post">
                @csrf
                <a href="/profile" class="dropdown-item">Profile</a>
                <button type="submit" class="dropdown-item">Log out</button>
            </form>
        </li>
    </ul>
@else
    <ul class="dropdown-menu dropdown-menu-end sub-menu" aria-labelledby="navbarDropdown3">
        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
        <li><a class="dropdown-item" href="{{ route('login') }}">Log in</a></li>
    </ul>
@endauth