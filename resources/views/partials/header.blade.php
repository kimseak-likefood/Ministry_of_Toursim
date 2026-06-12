<header class="header theme-bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0">
            <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                <img src="/assets/images/logo.png" alt="Brand Logo" title="Brand Logo" class="logo.png"style="width: 50px; height: auto;">
                <div>
                  <p class="mb-0" style="font-size: 15px;">ក្រសួងទេសចរណ៍</p>
                  <p class="mb-0" style="font-size: 15px;">Ministry of Tourism</p>
                </div>
            </a>
            <button class="navbar-toggler px-1 btn rounded-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto page-menu" id="nav">
                    
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle pe-5 {{ request()->is('phnompenh*') || request()->is('siemreap*') || request()->is('mondulkiri*') || request()->is('battambang*') || request()->is('kohkong*') || request()->is('kampot*') ? 'fw-bold' : '' }}" href="#" id="DiscoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Discover</a>
        <ul class="dropdown-menu" aria-labelledby="DiscoverDropdown">
            <li><a class="dropdown-item {{ request()->is('phnompenh*') ? 'fw-bold' : '' }}" href="{{ url('phnompenh') }}">Phnom Penh</a></li>
            <li><a class="dropdown-item {{ request()->is('siemreap*') ? 'fw-bold' : '' }}" href="{{ url('siemreap') }}">Siem Reap</a></li>
            <li><a class="dropdown-item {{ request()->is('mondulkiri*') ? 'fw-bold' : '' }}" href="{{ url('mondulkiri') }}">Mondulkiri</a></li>
            <li><a class="dropdown-item {{ request()->is('battambang*') ? 'fw-bold' : '' }}" href="{{ url('battambang') }}">Battambang</a></li>
            <li><a class="dropdown-item {{ request()->is('kohkong*') ? 'fw-bold' : '' }}" href="{{ url('kohkong') }}">Kohkong</a></li>
            <li><a class="dropdown-item {{ request()->is('kampot*') ? 'fw-bold' : '' }}" href="{{ url('kampot') }}">Kampot</a></li>
        </ul>
</li>
                    <li class="nav-item"><a class="nav-link pe-5 {{ request()->is('activities*') ? 'fw-bold' : '' }}" href="{{ url('activities') }}">Activities</a></li>
                    <li class="nav-item"><a class="nav-link pe-5 {{ request()->is('holidays&events*') ? 'fw-bold' : '' }}" href="{{ url('holidays&events') }}">Events</a></li>
                    <li class="nav-item"><a class="nav-link pe-5 {{ request()->is('tourism*') ? 'fw-bold' : '' }}" href="{{ url('tourism') }}">Tourism</a></li>
                    <li class="nav-item"><a class="nav-link pe-5 {{ request()->is('statistics*') ? 'fw-bold' : '' }}" href="{{ url('statistics') }}">Statistics</a></li>
                    <li class="nav-item"><a class="nav-link pe-5 {{ request()->is('laws&regulations*') ? 'fw-bold' : '' }}" href="{{ url('laws&regulations') }}">Regulations</a></li>
                    <li class="nav-item"><a class="nav-link pe-5 {{ request()->is('blogposts*') ? 'fw-bold' : '' }}" href="{{ url('blogposts') }}">Blog</a></li>
                </ul>
                <ul class="navbar-nav page-menu mb-3 mb-lg-0">
                    @include('partials.nav.language')
                    @include('partials.nav.currency')
                    @include('partials.nav.notifications')
                    @include('partials.nav.user')
                </ul>
            </div>
        </nav>
        
    </div>
</header>
