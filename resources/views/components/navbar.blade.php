<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: var(--primary-color);">
    <div class="container">
        <img src="{{ asset('img/Cake_Shop_logo.png') }}" alt="logo" class="navbar-logo">
        <a class="navbar-brand text-white" href="{{ route('home') }}">DelishCrush</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::routeIs('menu.menu') ? 'active' : '' }}" href="{{ route('menu.menu') }}">Menu</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white {{ Request::routeIs('cart.cart') ? 'active' : '' }}" href="{{ route('cart.cart') }}">Cart</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::routeIs('about.about') ? 'active' : '' }}" href="{{ route('about.about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::routeIs('contact.contact') ? 'active' : '' }}" href="{{ route('contact.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
