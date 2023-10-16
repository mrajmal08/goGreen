@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/landscaping.css') }}">
@endpush
@section('content')


<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/landscping/land15.jpeg') }});">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Product detail start-->

<section class="product-container">

        <div class="content">
            <h3 class="heading">Landscaping</h3>
        </div>
            <div class="description">
                <p>The designing of a home's exterior, landmarks, and structures with the aim of achieving both environmental and aesthetic value is referred to as landscape architecture. The process involves systematic and extensive investigation of the socio-ecological and soil condition of the area. A design must be chosen to produce the desired outcome. Landscape architecture is a multi-disciple that incorporates elements of botany, art, architecture, and soil science and covers areas such as site planning, landscape design, environmental restoration, and landscape master planning among others. A professional in the field of landscape architecture is referred to as landscape architect. A landscape architect has the technical ability and creativity to design, organize, and use spaces to create the desired outcome.</p>
                <br>
                <p>If we refer to hard landscaping as the skeleton or structural aspects of outdoor design, then soft landscaping would be the meat on the bones. Generally speaking, soft landscaping components are ornamental additions to an outside area. Or, to put it simply, the lush vegetation that makes them so relaxing. Soft landscaping is a word that is frequently used to describe features like trees, shrubs, turf, mulch, and soil. Typically, hard and soft landscaping components work together. As an illustration of a hard landscaping element, sleepers may be used to make a garden in order to create a flower bed. And the soft landscaping component is made up of the flowers and dirt that are placed inside of it.</p>
            </div>

</section>

<!--Product deatil end-->

<!--Product img slider start-->

<home class="homesection" id="homediv">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/landscping/land7.PNG') }});">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/landscping/land12.jpeg') }});">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/landscping/land2.jpeg') }});">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/landscping/land18.jpeg') }});">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/landscping/land3.jpeg') }});">
                </div>
            </div>
        </div>
    </div>
</section>

<!--Product img slider end-->

<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Soft Landscaping</h3>
    </div>
        <div class="description">
            <p>Designing a landscape's non-construction-related aspects is known as soft landscaping. These components include hanging baskets, container gardens, potted plants, trees, bushes, and flowers. When using techniques like choosing different annual and perennial flowers for the gardens and flower beds, changing the soft parts of the landscape can be a simple way to change the exterior appearance of the house as a whole. Some soft landscaping components require planning in the long run. Just as it might take years for shrubs to mature into natural shade trees and , if not decades, to reach their full height. These things need considerable planning because they will form the backdrop of the landscape for years to come. Soft landscaping also includes container gardens.</p>
        </div>

</section>

<!--Product deatil end-->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="{{ asset('images/landscping/land17.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/landscping/land4.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/landscping/land6.jpg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/landscping/land15.jpeg') }}" alt="">
    </div>

</section>

<!-- banner section ends -->


<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Hard Landscaping</h3>
    </div>
    <div class="description">
        <p>By definition, hardscaping, often known as hard landscaping, refers to artificial elements used in landscape design. Brick, paving stones, natural stones, concrete, and wood, such as red cedar used for decking, are among the materials utilised in hardscaping. Since hardscaping features are permanent and difficult to move, careful design is required. To assist you in working through your first concepts, it is a good idea to draw on the training and expertise of a landscape designer. The ideal plants to employ for your project's success may be suggested by them, along with tips on how to balance your design.</p>
        <br>
    </div>
</section>

<!--Product deatil end-->


<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="{{ asset('images/landscping/land19.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/landscping/land16.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/landscping/land1.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/landscping/land5.jpg') }}" alt="">
    </div>

</section>

<!-- banner section ends -->



<!--icons section starts  -->

<section class="icons-container">

    <div class="icon">
    <img src="{{ asset('images/images/icon1.png')}}" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping above Rs.5000</p>
        </div>
    </div>
    <div class="icon">
    <img src="{{ asset('images/images/icon3.png') }}" alt="">
        <div class="content">
            <h3>Payment Secure</h3>
            <p>100% secure payment</p>
        </div>
    </div>
    <div class="icon">
    <img src="{{ asset('images/images/icon4.png') }}" alt="">
        <div class="content">
            <h3>Support 24/7</h3>
            <p>Contact us anytime</p>
        </div>
    </div>

</section>


@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
