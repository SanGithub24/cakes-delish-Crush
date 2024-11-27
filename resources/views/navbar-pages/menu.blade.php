@extends('layouts.app')
@section('content')

    <div class="container my-5">
        <h2 class="text-center mb-5 title">Our Menu</h2>

        <div class="row">
            @foreach ($menuItems as $item)
                <div class="col-md-3 mb-2">
                    <div class="card featured-item">
                        <img src="{{ asset('img/menu/' . $item['image']) }}" class="card-img-top featured-item-img" alt="{{ $item['title'] }}">
                        <div class="card-body featured-item-body">
                            <h5 class="card-title featured-item-title">{{ $item['title'] }}</h5>
                            <p class="card-text featured-item-text">{{ $item['description'] }}</p>
                            <p class="price featured-item-price">${{ $item['price'] }}  {{ $item['price_unit'] }}</p>
                            <a href="{{ route('customize.customize') }}" class="btn btn-primary featured-item-btn">Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Section -->
        <nav aria-label="Page navigation" class="pagination-container">
            {{ $menuItems->links('vendor.pagination.custom') }}
        </nav>
    </div>

@endsection
