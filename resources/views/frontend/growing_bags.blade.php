@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/growingbags.css') }}">
@endpush
@section('content')

<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/pots/balco\ ani.jpg')}});">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sidebar">
    <h1>Growing Bags</h1>
    <ol>
        <ul>
           <li><a href="Trapple Strawberry Growing Bag.html">Trapple Strawberry Growing Bag</a></li>
           <li><a href="Gallen Grow Bags.html"> Gallen Grow Bag</a></li>
           <li><a href="Strawberry Grow Bag.html"> Strawberry Grow Bag</a></li>
           <li><a href="Heal Smart Grow Bag.html"> Heal Smart Grow Bag</a></li>
           <li><a href="Gallen Potato Grow Bag.html"> Gallen Potato Grow Bag</a></li>
           <li><a href="Pocket Wall Growing Bag.html">Pocket Wall Growing Bag </a></li>
           <li><a href="Resuable Febric Grow Bed.html"> Resuable Febric Grow Bed</a></li>
        </ul>

    </ol>
</div>


<!-- product section starts  -->

<section class="product" id="product">
    <h1 class="heading">Growing Bags </h1>
    <div class="box-container">
        <div class="box" data-name="b-gallen grow bags2">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/pots/gallen grow bags2.png')}}" alt="">
            <h3>Gallen Grow Bags</h3>

            <div class="price">Rs.1500 </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-gallen potato grow bag">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/gallen potato grow bag.png" alt="">
            <h3>Gallen Potato Bag</h3>

            <div class="price">Rs.2000 </div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-garden planting bag">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/garden planting bag.png" alt="">
            <h3>Garden Planting Bag</h3>

                <div class="price">Rs.1000</div>

            <a href="#" class="btn">add to cart</a>
        </div>


    </div>


    <div class="box-preview">


            <div class="preview" data-target="b-gallen grow bags2">
                <i class="fas fa-times"></i>
                <img src="pots/gallen grow bags2.png" alt="" width="50%">
                <h3>Gallen Grow Bags</h3>
                <h2>Description:</h2>
                <p>Grow bags are usually made of durable and porous materials, such as fabric or polyethylene. They are designed to provide a suitable environment for plant growth, especially for container gardening.  Gallon grow bags are containers used for planting and growing various types of plants, including vegetables, herbs, flowers, and more. They are designed to provide plants with a controlled environment that promotes healthy root development and growth.</p>
                <div class="price">Rs.1500</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-gallen potato grow bag">
                <i class="fas fa-times"></i>
                <img src="pots/gallen potato grow bag.png" alt="" width="50%">
                <h3>Gallen Potato Grow Bag</h3>
                <h2>Description:</h2>
                <p>The Gallen Potato Bag is likely a specialized container designed for growing potatoes in a compact and efficient way. These bags are usually made from durable and breathable materials, such as sturdy fabric or polyethylene, and come with unique features tailored for successful potato cultivation. These bags are designed to provide an efficient and space-saving way to cultivate potatoes, even in limited gardening spaces like balconies, patios, or small yards.</p>
                <div class="price">Rs.2000</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-garden planting bag">
                <i class="fas fa-times"></i>
                <img src="pots/garden planting bag.png" alt="" width="50%">
                <h3>Garden Planting Bag</h3>
                <h2>Description:</h2>
                <p>A garden planting bag, also known as a grow bag or planting pouch, is a specialized container designed for growing plants, vegetables, flowers, and herbs. These bags are particularly popular for container gardening in limited spaces like balconies, patios, or small yards. The bags are typically made from durable and breathable materials, such as fabric or polyethylene. Garden planting bags are typically made from breathable and durable fabric materials like non-woven polypropylene or felt. The fabric allows for proper aeration, drainage, and root health.</p>
                <div class="price">Rs.2000</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>
  </div>
</section>


@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection

