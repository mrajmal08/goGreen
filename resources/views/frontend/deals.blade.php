@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/deals.css') }}">
@endpush
@section('content')
    <!-- header section ends -->
    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }})">
                <a>Happiness is having more and more Plants</a>
            </marquee>
        </div>
        </section>
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
                </div>

                <div class="image">
                    <img src="{{ asset('images/images/deal-img.Jpg') }}" alt="">
                </div>
            </div>
        </section>

        <section class="product" id="product">
            <h1 class="heading">Categories of Deals</h1>
            <div class="box-container">
                @foreach ($plants as $plant)
                    <div class="box" data-name="b-calathea">
                        <span class="discount"><?php echo  intval($plant->discount_price/$plant->price *100) ?>%</span>
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
                        <div class="price">Rs.{{ $plant->discount_price }}<span>{{ $plant->price }}</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                @endforeach
            </div>
        </section>


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
        @include('layouts.welcome.footer')
        @push('frontJs')
            <script src="{{ asset('js/homescript.js') }}" defer></script>
            <script src="{{ asset('js/script.js') }}" defer></script>
        @endpush
    @endsection
