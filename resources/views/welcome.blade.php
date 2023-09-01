@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/homestyle.css') }}">
@endpush

@section('content')
    @include('layouts.welcome.slider')
    <!-- banner section starts  -->

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="banner-container">

        <div class="banner">
            <img src="{{ asset('images/images/banner1.jpeg') }}" alt="">
            <div class="content">

                <h3>Home plants</h3>
                <a href="{{ route('plants') }}" class="btn">shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="{{ asset('images/images/banner2.jpg') }}" alt="">
            <div class="content">

                <h3>office plants</h3>
                <a href="{{ route('plants') }}" class="btn">shop now</a>
            </div>
        </div>
    </section>
    <!-- banner section ends -->

    <!-- category section starts  -->

    <section class="category" id="category">
        <h1 class="heading"> shop by category </h1>
        <div class="box-container">
            <div class="box">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="3" />
                    <button type="submit">
                        <img src="{{ asset('images/images/cart1.jpeg') }}" alt="">
                    </button>
                </form>
                <div class="content">
                    <h3>Flower</h3>
                    <a href="{{ route('plants') }}" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="1" />
                    <button type="submit">
                        <img src="{{ asset('images/images/cart2.jpg') }}" alt="">
                    </button>
                </form>
                <div class="content">
                    <h3>Indoor Plants</h3>
                    <a href="{{ route('plants') }}" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="2" />
                    <button type="submit">
                        <img src="{{ asset('images/images/cart3.jpeg') }}" alt="">
                    </button>
                </form>
                <div class="content">

                    <h3>Outdoor Plants</h3>
                    <a href="{{ route('plants') }}" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/realimage/image3.jpeg') }}" alt="">
                <div class="content">
                    <h3>Gift plants</h3>
                    <a href="{{ route('plants') }}" class="btn">shop now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- product section starts  -->

    <section class="product" id="product">
        <h1 class="heading"> new products </h1>
        <div class="box-container">
            @foreach ($plants as $plant)
                <div class="box" data-name="b-calathea">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <a class="underline" href="{{ route('plant.detail', [$plant->id]) }}">
                        <img src="{{ asset('assets/plantsFiles') . '/' . $plant->photo }}" alt="">
                        <h3>{{ $plant->name }}</h3>
                    </a>
                    <div class="location"> Location:
                        <span>{{ DB::table('plants_categories')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
                    </div>
                    <div class="price">Rs.{{ $plant->price }}</div>
                    <a href="{{ route('add.to.cart', $plant->id) }}" class="btn">add to cart</a>
                </div>
            @endforeach

        </div>
        </div>
    </section>
    <!-- product section ends -->

    <!-- .icons section starts  -->

    <section class="icons-container">
        <div class="icon">
            <img src="{{ asset('images/images/icon1.png') }}" alt="">
            <div class="content">
                <h3>free shipping</h3>
                <p>Free shipping on order</p>
            </div>
        </div>
        <div class="icon">
            <img src="{{ asset('images/images/icon2.png') }}" alt="">
            <div class="content">
                <h3>100% Money Back</h3>
                <p>You've 30 days to Return</p>
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
    <!-- .icons section ends -->


    <!-- slider section starts-->
    <section>
        <div class="wrapper">
            <i id="left" class="fas fa-angle-left"></i>
            <ul class="carousel">
                <li class="card">
                    <div class="img"><img src="{{ asset('images/images/img-1.jpeg') }}" alt="img"
                            draggable="false"></div>
                    <h2>Decore Garden</h2>
                </li>
                <li class="card">
                    <div class="img"><img src="{{ asset('images/accesrimg/garden tool 1.jpg') }}" alt="img"
                            draggable="false"></div>
                    <h2>Accessories</h2>
                </li>
                <li class="card">
                    <div class="img"><img src="{{ asset('images/images/img-3.jpg') }}" alt="img"
                            draggable="false"></div>
                    <h2>Room Decore</h2>
                </li>
                <li class="card">
                    <div class="img"><img src="{{ asset('images/images/img-4.jpg') }}" alt="img"
                            draggable="false"></div>
                    <h2>Flowering</h2>
                </li>
                <li class="card">
                    <div class="img"><img src="{{ asset('images/images/img-5.webp') }}" alt="img"
                            draggable="false"></div>
                    <h2>Landscaping</h2>
                </li>
                <li class="card">
                    <div class="img"><img src="{{ asset('images/images/img-6.webp') }}" alt="img"
                            draggable="false"></div>
                    <h2>Pots</h2>
                </li>
            </ul>
            <i id="right" class="fas fa-angle-right"></i>
        </div>
    </section>
    <!-- slider section starts-->


    <!-- deal section starts  -->
    <section class="deal" id="deal">
        <h1 class="heading"> deal of the day </h1>
        <div class="row">
            <div class="content">
                <h3 class="title">don't miss the deal</h3>
                <div class="count-down">
                    <div class="box">
                        <h3 id="day">00</h3>
                        <span>day</span>
                    </div>
                    <div class="box">
                        <h3 id="hour">00</h3>
                        <span>hour</span>
                    </div>
                    <div class="box">
                        <h3 id="minute">00</h3>
                        <span>minute</span>
                    </div>
                    <div class="box">
                        <h3 id="second">00</h3>
                        <span>second</span>
                    </div>
                </div>
                <a href="deals.html" class="btn">check out deal</a>
            </div>

            <div class="image">
                <img src="{{ asset('images/images/deal-img.jpg') }}" alt="">
            </div>
        </div>
    </section>
    <!-- deal section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
        <h1 class="heading">get in touch</h1>
        <div class="row">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13456.931009163103!2d74.50824639557356!3d32.51993007368155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eebcbbe17ee7d%3A0x2c2d76ca919f7a04!2sHunterpura%2C%20Sialkot%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1685526347872!5m2!1sen!2sus"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- contact section ends -->

    @include('layouts.welcome.footer')

    @push('frontJs')
        <script src="{{ asset('js/homescript.js') }}" defer></script>
        <script src="{{ asset('js/script.js') }}" defer></script>
        <script src="{{ asset('js/deal.js') }}" defer></script>
    @endpush
@endsection
