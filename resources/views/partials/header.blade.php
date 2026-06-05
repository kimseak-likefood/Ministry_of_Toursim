<header class="header theme-bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0">
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.png" alt="Brand Logo" title="Brand Logo" class="logo.png"style="width: 50px; height: auto;">
            </a>
            <button class="navbar-toggler px-1 btn rounded-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto page-menu" id="nav">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pe-5" href="#" id="DiscoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Discover</a>
                             <ul class="dropdown-menu" aria-labelledby="DiscoverDropdown">
                                 <li><a class="dropdown-item" href="{{ url('phnompenh') }}">Phnom Penh</a></li>
                                 <li><a class="dropdown-item" href="{{ url('siemreap') }}">Siem Reap</a></li>
                                 <li><a class="dropdown-item" href="{{ url('mondulkiri') }}">Mondulkiri</a></li>
                                 <li><a class="dropdown-item" href="{{ url('battambang') }}">Battambang</a></li>
                                 <li><a class="dropdown-item" href="{{ url('kohkong') }}">Kohkong</a></li>
                                 <li><a class="dropdown-item" href="{{ url('kampot') }}">Kampot</a></li>
                            </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link pe-5" href="{{ url('activities') }}">Activities</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="{{ url('holidays&events') }}">Events</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="{{ url('tourism') }}">Tourism</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="{{ url('statistics') }}">Statistics</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="{{ url('laws&regulations') }}">Regulations</a></li>
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
