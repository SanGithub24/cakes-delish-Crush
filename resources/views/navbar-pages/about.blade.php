@extends('layouts.app')
@section('content')

    <div class="container my-5 about">
        <h2 class="text-center mb-5">About Us</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/Cake_Shop_logo_new.png') }}" class="img-fluid about-image" alt="About Image">
            </div>
            <div class="col-md-6 mt-5">
                <p>
                    Welcome to DelishCrush! We specialize in crafting delicious cakes and desserts with the freshest ingredients.
                    Our bakery offers a variety of baked goods that cater to every occasion, and our team is dedicated to making
                    your special day even sweeter.
                </p>
                <p>
                    Whether you are celebrating a birthday, wedding, or any other event, we have the perfect treats for you.
                    Our commitment to quality and customer satisfaction ensures that every bite is as delightful as the last.
                </p>
                <p>
                    We also offer delivery services to make it easier for you to enjoy our delicious cakes and desserts from the comfort of your home.
                </p>
            </div>
        </div>
    </div>
@endsection
