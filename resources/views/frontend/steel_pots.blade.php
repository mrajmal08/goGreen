@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/steelpots.css') }}">
@endpush
@section('content')

<!-- home section starts  -->

<home class="homesection" id="homediv">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/pots/metal\ animation\ .png')}});">
                </div>
            </div>
        </div>
    </div>
</section>


<div class="sidebar">
    <h1>Steel pots</h1>
        <ul>
           <li><a href="Eleven Corten Steel PLanter.html">Eleven Corten Steel PLanter</a></li>
           <li><a href="Galvanized Steel Window Flower Box.html">Galvanized Steel Window Flower Box </a></li>
           <li><a href="Steel Planter Pot.html">Steel Planter Pot</a></li>
           <li><a href="Corten Steel Contempoo Planter.html">Corten Steel Contempoo Planter</a></li>
           <li><a href="Elevens Talls Planter.html">Elevens Talls Planter</a></li>
           <li><a href="Clover Shaped Metal steel planter.html">Clover Shaped Metal steel planter</a></li>
           <li><a href="Metal Round Planter.html">Metal Round Planter</a></li>
           <li><a href="Rustic Metal Planter.html">Rustic Metal Planter</a></li>
           <li><a href="Metal Cylinderic Planter.html">Metal Cylinderic Planter</a></li>
        </ul>
    </ol>
</div>




<!-- product section starts  -->
<section class="product" id="product">
   <h1 class="heading">Steel Pots </h1>
    <div class="box-container">
        <div class="box" data-name="b-weathering steel long planters">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/steel pot growing bag/weathering steel long planters.png')}}" alt="">
            <h3>Weathering Planter </h3>
            <div class="price">Rs.1500 </div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-metal round planter">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>

            <img src="steel pot growing bag/metal round planter.png" alt="">
            <h3>Metal Round Planter</h3>

            <div class="price">Rs.2200</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-oval metal planter pots">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="steel pot growing bag/oval metal planter pots.png" alt="">
            <h3>Oval Steel Planter</h3>

            <div class="price">Rs.4500 </div>

            <a href="#" class="btn">add to cart</a>
        </div>
    </div>




  <div class="box-preview">

    <div class="preview" data-target="b-weathering steel long planters">
        <i class="fas fa-times"></i>
        <img src="steel pot growing bag/weathering steel long planters.png" alt="" width="50%">
        <h3>Weathering Steel Long Planters</h3>
        <h2>Description:</h2>
        <p>A weathering planter is likely a type of gardening container designed with a weathered or aged appearance. These planters are intended to mimic the look of weathered wood, stone,steel or other materials, adding a rustic or antique charm to the garden or outdoor space. Weathering steel is a high-strength steel alloy that forms a natural rust-like patina over time when exposed to moisture and air. This patina not only adds to the planter's aesthetic but also serves as a protective layer against further corrosion.</p>
        <div class="price">Rs.2299</div>
        <div class="buttons">
           <a href="#" class="cart">add to cart</a>
        </div>
    </div>



    <div class="preview" data-target="b-metal round planter">
        <i class="fas fa-times"></i>
        <img src="steel pot growing bag/metal round planter.png" alt="" width="50%">
        <h3>Metal Round Planter</h3>
        <h2>Description:</h2>
        <p>A metal round planter is a type of gardening container designed in a circular shape and made from metal materials. These planters offer a sleek and modern aesthetic, making them a popular choice for both indoor and outdoor spaces.  Metal round planters can be made from different types of metal, each with its own characteristics in terms of durability, weight, and appearance. Choose a metal that suits your preferences and the intended use of the planter.</p>
        <div class="price">Rs.1699</div>
        <div class="buttons">
           <a href="#" class="cart">add to cart</a>
        </div>
    </div>


    <div class="preview" data-target="b-oval metal planter pots">
        <i class="fas fa-times"></i>
        <img src="steel pot growing bag/oval metal planter pots.png" alt="" width="50%">
        <h3>Oval Metal Planter Pots</h3>
        <h2>Description:</h2>
        <p>An oval steel planter is a type of gardening container made from steel materials and designed in an oval or elliptical shape. These planters are known for their durability, strength, and sleek appearance, making them a popular choice for various outdoor and indoor gardening applications. Oval metal planter pots are typically made from materials like stainless steel, galvanized steel, iron, aluminum, or other metal alloys. The choice of material affects the pot's durability and appearance.</p>
        <div class="price">Rs.1899</div>
        <div class="buttons">
           <a href="#" class="cart">add to cart</a>
        </div>
    </div>

</section>


@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
