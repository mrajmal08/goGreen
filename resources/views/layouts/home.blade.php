<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoGreenNursery</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 5 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./../../css/home/homestyle.css">
        <link rel="stylesheet" href="{{ asset('css/homepage/homestyle.css') }}">
    <!-- Styles -->
</head>
<body class="antialiased">
    @yield('content')

    <!--jquery cdn-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--lightbox pupup-->
<script src="{{ asset('js/lightbox.js')}}"></script>
<!-- Bootstrap 5 CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="{{ asset('js/homescript.js')}}" defer></script>
<script src="{{ asset('js/script.js')}}" defer></script>
<script src="{{ asset('js/deal.js')}}" defer></script>

</body>
</html>
