<link rel="stylesheet" href="../../css/navbar.css">
<nav class="navbar navbar-expand-lg navbar-light  pt-3 pb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">

            <img src="../../image/logo-kfc.png" class="" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="link-nav {{ request()->routeIs('beranda') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="link-nav {{ request()->routeIs('menu') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="link-nav {{ request()->routeIs('kids') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('kids') }}">Kids</a>
                </li>
                <li class="nav-item">
                    <a class="link-nav {{ request()->routeIs('news') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="link-nav {{ request()->routeIs('profile') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="link-nav {{ request()->routeIs('event') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('event') }}">Event</a>
                </li>
                <li class="nav-item">
                    <a class="link-nav" aria-current="page" href="#">Store</a>
                </li>
                <li class="nav-item">
                    <a class="link-nav" aria-current="page" href="#">Karir</a>
                </li>
                <li class="nav-item-logout">
                    <a class="link-nav" aria-current="page" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
