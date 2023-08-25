@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/damagecalm.css') }}">
@endpush
@section('content')


<!--Product detail start-->

<section class="product-container">
    <div class="description">
        <p>In case of receipt of damaged or defective consumer durables and non-durable items, please report the same to our customer service team. However, the request will be considered after the merchant checks and determines the same. Check the product at the same time and inform the delivery person.</p>
        <p>1. No case will be engaged after receipt of merchandise, particularly for plants.</p>
        <p>2. In the event that the arranged plant isn't accessible in stock, one more plant of a similar kind will be delivered in its place at an equivalent or greater cost. No extra expense will be charged to the client.</p>
    </div>
</section>
<!--Product deatil end-->


<!-- home section starts  -->
<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/plantslide.jpg') }});">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home section starts -->
</section>


@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
