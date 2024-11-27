<!-- Footer -->
<footer class="py-4" style="background-color: var(--primary-color); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo Section -->
            <div class="col-md-4 text-start mb-3 mb-md-0">
                <img src="{{ asset('img/Cake_Shop_logo.png') }}" alt="Logo" style="width: 50px;"> <!-- Adjust the path and size -->
                <a class="navbar-brand text-white" href="{{ route('home') }}">DelishCrush</a>
            </div>

            <!-- Navbar Links Section -->
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="nav-link text-white {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" style="text-decoration: none;">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link text-white {{ Request::routeIs('menu.menu') ? 'active' : '' }}" href="{{ route('menu.menu') }}" style="text-decoration: none;">Menu</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link text-white {{ Request::routeIs('about.about') ? 'active' : '' }}" href="{{ route('about.about') }}" style="text-decoration: none;">About</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link text-white {{ Request::routeIs('contact.contact') ? 'active' : '' }}" href="{{ route('contact.contact') }}" style="text-decoration: none;">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Social Icons Section -->
            <div class="col-md-4 text-end">
                <a href="https://wa.me/1234567890" target="_blank" class="f-icons">
                    <i class="fab fa-whatsapp fa-lg"></i>
                </a>
                <a href="https://facebook.com/yourfacebook" target="_blank" class="f-icons">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="https://instagram.com/yourinstagram" target="_blank" class="f-icons">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="row text-center mt-3">
            <p class="mb-0">&copy; 2024 DelishCrush. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Bootstrap and FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

{{--<!-- Footer -->--}}
{{--<footer class="py-4 text-center" style="background-color: var(--primary-color); color: white;">--}}
{{--    <p>&copy; 2024 DelishCrush. All rights reserved.</p>--}}
{{--</footer>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>--}}

