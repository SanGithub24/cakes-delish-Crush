@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <h2>Customize Your Cake</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('customize-cake.submit') }}" method="POST">
            @csrf
            <div class="row">
                <!-- Cake Name Dropdown -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cake_name">Cake Name</label>
                        <select name="cake_name" id="cake_name" class="form-control" required>
                            <option value="">Select Cake</option>
                            @foreach($cakeNames as $cakeName)
                                <option value="{{ $cakeName }}">{{ $cakeName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Other Form Fields -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight">Weight (kg)</label>
                        <input type="number" name="weight" id="weight" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="egg_preference">With Egg or Eggless</label>
                        <select name="egg_preference" id="egg_preference" class="form-control" required>
                            <option value="With Egg">With Egg</option>
                            <option value="Eggless">Eggless</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="layers">Number of Layers</label>
                        <input type="number" name="layers" id="layers" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="flavor">Additional Flavor</label>
                        <input type="text" name="flavor" id="flavor" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="filling">Filling Type</label>
                        <input type="text" name="filling" id="filling" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="topping">Topping Preference</label>
                        <input type="text" name="topping" id="topping" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="color">Preferred Color</label>
                        <input type="text" name="color" id="color" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="message">Special Message on Cake</label>
                        <input type="text" name="message" id="message" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="delivery_date">Preferred Delivery Date</label>
                        <input type="date" name="delivery_date" id="delivery_date" class="form-control" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn main-btn mt-4">Submit Customization</button>
        </form>
    </div>

@endsection
