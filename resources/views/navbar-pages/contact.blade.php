@extends('layouts.app')
@section('content')


    <div class="container my-5 contact">
        <h2 class="text-center mb-5">Contact Us</h2>
        <div class="row">
            <!-- Left Column: Image -->
            <div class="col-md-6">
                <img src="{{ asset('img/contact.webp') }}" class="img-fluid" alt="Contact Us Image">
            </div>

            <!-- Right Column: Contact Form -->
            <div class="col-md-6">

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tel">WhatsApp Number</label>
                        <input type="tel" name="tel" id="tel" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="If you want to place an order, provide the order details here." required></textarea>
                    </div>

                    <button type="submit" class="btn main-btn">Send Message</button>
                </form>

                <!-- Social Media Icons and Links -->
                <div class="social-media mt-4">
                    <p class="contact-us-title">Open Hours</p>
                    <p>8.30 am to 6.30 pm</p>
                    <p class="contact-us-title">Contact us on</p>
                    <a href="https://wa.me/1234567890" class="d-block mb-2" target="_blank">
                        <i class="fab fa-whatsapp"></i> WhatsApp: +94 771587744
                    </a>
                    <a href="https://instagram.com/yourinstagram" class="d-block mb-2" target="_blank">
                        <i class="fab fa-instagram"></i> Instagram: @DelishCrush_Official
                    </a>
                    <a href="https://facebook.com/yourfacebook" class="d-block" target="_blank">
                        <i class="fab fa-facebook"></i> Facebook: DelishCrush_Cakes
                    </a>

                    <p class="contact-us-title mt-4">Delivery Available</p>
                </div>
            </div>
        </div>
    </div>
@endsection
