<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

@include('components.navbar')

<!-- Main Content -->
<main>
    @yield('content')
</main>

@include('components.footer')

@stack('script')
</body>
</html>
