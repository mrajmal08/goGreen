@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/seedstarter.css') }}">
@endpush
@section('content')
    <!-- header section ends -->
    <!-- home section starts  -->

    <div class="home-section">
        <a href="Growing Bag accesseries.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="3" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/growing bag.jpg') }}" alt="Image 3">
                    </button>
                </form>
            </div>
            <p>Growing Bag</p>
        </a>
        <a href="seed starter accesseries.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="4" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/seed starter 2.jpg') }}" alt="1">
                    </button>
                </form>
            </div>
            <p>Seed Starter</p>
        </a>
        <a href="led light accesseries.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="5" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/LED ligts.jpg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>LED Lights</p>
        </a>
    </div>

    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Saw Some Seeds</a>
            </marquee>
        </div>
        </section>
        <div class="sidebar">
            <h1>Seed starter</h1>
            <ol>
                <ul>
                    @foreach ($accessories as $type)
                    <li>
                        <a href="{{ route('accessories.detail', [$type->id])}}" class="link-as-button">{{ $type->name }}</a>
                    </li>
                 @endforeach
                </ul>
            </ol>
        </div>
        <!-- product section starts  -->

        <section class="product" id="product">
            <h1 class="heading">Seed Starter categories</h1>
            <div class="box-container">
                @foreach ($accessories as $plant)
                    <div class="box" data-name="b-humidity doms">
                        <div class="icons">
                            <form method="GET" action="{{ route('add.to.wishlist') }}">
                                @csrf
                                <input type="hidden" name="type" value="accessory" />
                                <input type="hidden" name="id" value="{{ $plant->id }}" />
                                <a href="#" class="fas fa-heart"
                                onclick="event.preventDefault(); this.closest('form').submit();"></a>
                            </form>
                        </div>
                        <a class="underline" href="{{ route('accessories.detail', [$plant->id]) }}">
                            <img src="{{ asset('assets/accessoriesFiles') . '/' . $plant->photo }}" alt="">
                            <h3>{{ $plant->name }}</h3>
                        </a>

                        <div class="location"> Category:
                            <span>{{ DB::table('accessories_cat')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
                        </div>
                        <div class="price">Rs.{{ $plant->price }}</div>
                        <form method="GET" action="{{ route('add.to.cart') }}">
                            @csrf
                            <input type="hidden" name="type" value="accessory" />
                            <input type="hidden" name="id" value="{{ $plant->id }}" />
                            <a href="#" class="btn"
                            onclick="event.preventDefault(); this.closest('form').submit();">add to cart</a>
                        </form>
                    </div>
                @endforeach

            </div>
        </section>

        @include('layouts.welcome.footer')
        @push('frontJs')
            <script src="{{ asset('js/homescript.js') }}" defer></script>
            <script src="{{ asset('js/script.js') }}" defer></script>
        @endpush
    @endsection
