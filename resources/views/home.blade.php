@extends('layouts.app')
@section('content')

    <!-- Hero Section -->
    <section class="hero-section text-center" style=" position: relative;">
        <!-- Bootstrap Carousel -->
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item main-background active" style="background-image: url('img/bg2.jpg');">
                    <div class="container name">
                        <h1 class="display-4">Step into Sweetness at DelishCrush!</h1>
                        <p class="lead">Indulge in our delicious handcrafted cakes, baked with love!</p>
                        <a href="{{ route('menu.menu') }}" class="btn main-btn btn-lg">Explore Our Menu</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item main-background" style="background-image: url('img/bg1.jpeg');">
                    <div class="container name">
                        <h1 class="display-4">Experience Bliss at DelishCrush!</h1>
                        <p class="lead" >Experience the best cakes in town!</p>
                        <a href="{{ route('customize.customize') }}" class="btn main-btn btn-lg">Order Now</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item main-background" style="background-image: url('img/bg3.jpg');">
                    <div class="container name">
                        <h1 class="display-4">Custom Cakes for Every Occasion</h1>
                        <p class="lead">Make your celebration sweeter!</p>
                        <a href="{{ route('customize.customize') }}" class="btn main-btn btn-lg">Customize Your Cake</a>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Featured Cakes Section -->
    <section class="py-5" style="background-color: var(--background-color);">
        <div class="container">
            <h2 class="text-center" style="color: var(--primary-color);">Our Featured Cakes</h2>
            <div class="row mt-4">
                <!-- Example Cake 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card featured-cakes">
                        <img src="{{ asset('img/img-card-1.jpg') }}" class="card-img-top" alt="Cake 1">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--accent-color-1);">Red Velvet Cake</h5>
                            <p class="card-text">A classic, rich, and velvety delight.</p>
                            <a href="{{ route('customize.customize') }}" class="btn btn-sm btn-primary" style="background-color: var(--secondary-color); border: none;">Order Now</a>
                        </div>
                    </div>
                </div>

                <!-- Example Cake 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card featured-cakes">
                        <img src="{{ asset('img/img-card-3.jpg') }}" class="card-img-top" alt="Cake 2">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--accent-color-1);">Chocolate Fudge Cake</h5>
                            <p class="card-text">Indulge in layers of chocolate bliss.</p>
                            <a href="{{ route('customize.customize') }}" class="btn btn-sm btn-primary" style="background-color: var(--secondary-color); border: none;">Order Now</a>
                        </div>
                    </div>
                </div>

                <!-- Example Cake 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card featured-cakes">
                        <img src="{{ asset('img/img-card-2.jpg') }}" class="card-img-top" alt="Cake 3">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--accent-color-1);">Carrot Cake</h5>
                            <p class="card-text">A moist and flavorful cake with cream cheese frosting.</p>
                            <a href="{{ route('customize.customize') }}" class="btn btn-sm btn-primary" style="background-color: var(--secondary-color); border: none;">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Information Section -->
    <section class="shop-info py-5 position-relative" style="background-color: var(--primary-color); color: #fff;">
        <div class="container">
            <h2 class="text-center">Why Choose DelishCrush?</h2>
            <p class="text-center">At DelishCrush, we offer a wide variety of handcrafted cakes made with the finest ingredients.</p>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card border info_sec">
                        <h5>Fresh Ingredients</h5>
                        <p>We use only the freshest ingredients to bake our cakes daily.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border info_sec">
                        <h5>Customizable Cakes</h5>
                        <p>Need something special? Customize your cake to suit your event.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border info_sec">
                        <h5>Island wide Delivery</h5>
                        <p>We deliver our cakes to your doorstep, anywhere in the country.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- First Image (Left Side) -->
        <img src="{{ asset('img/circle_1.jpg') }}" alt="Decorative Image 1" class="position-absolute circle_img_1">

        <!-- Second Image (Right Side) -->
        <img src="{{ asset('img/circle_2.webp') }}" alt="Decorative Image 2" class="position-absolute circle_img_2">
    </section>

    <!-- Offers Section -->
    <section class="offers-section py-5" style="background-color: var(--accent-color-2);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/offer-banner.png') }}" alt="img" class="offer-banner">
                </div>
                <div class="col-md-6">
                    <h2 class="text-center special-offer animate-slide-in-left mt-5" style="color: var(--primary-color);">Special Offers</h2>
                    <p class="text-center">Check out our exclusive offers and discounts.</p>
                    <p class="text-center"> Contact us for more details</p>

                    <!-- Contact Details Row -->
                    <div class="text-center d-flex flex-column justify-content-center align-items-center">
                        <a href="https://wa.me/1234567890" class="d-block mb-2 contact-details" target="_blank" >
                            <i class="fab fa-whatsapp"></i> WhatsApp: +94 771587744
                        </a>
                        <a href="https://instagram.com/yourinstagram" class="d-block mb-2 contact-details" target="_blank">
                            <i class="fab fa-instagram"></i> Instagram: @DelishCrush_Official
                        </a>
                        <a href="https://facebook.com/yourfacebook" class="d-block contact-details" target="_blank">
                            <i class="fab fa-facebook"></i> Facebook: DelishCrush_Cakes
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="reviews-section text-center" style="background-image: url('img/bg4.jpg');">
        <!-- Shaded Overlay -->
        <div class="shade"></div>

        <!-- Customer Reviews Heading -->
        <div class="container position-relative" style="z-index: 2;">
            <h2 class="text-white text-center">What Our Customers Say</h2>
        </div>

        <!-- Review Cards Slider -->
        <div class="container mt-4">
            <div id="reviewCarousel" class="carousel slide position-relative" data-bs-ride="carousel" style="z-index: 2;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Jane Doe</h5>
                                        <p class="card-text">"The cakes at DelishCrush are absolutely amazing! Highly recommend for any occasion."</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">John Smith</h5>
                                        <p class="card-text">"I ordered a custom cake for my daughter's birthday, and it exceeded my expectations."</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Alice Johnson</h5>
                                        <p class="card-text">"The attention to detail and the taste of the cakes are top-notch."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional cards (Slide 2) -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <!-- Card 4 -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Emily Wilson</h5>
                                        <p class="card-text">"Best cakes ever! I’m always coming back for more."</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Michael Brown</h5>
                                        <p class="card-text">"Fantastic customer service and delicious cakes. A must-try!"</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Sarah Green</h5>
                                        <p class="card-text">"Their cakes always make our celebrations special. Highly recommended!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev reviews-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon reviews-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next reviews-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon reviews-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

@endsection
