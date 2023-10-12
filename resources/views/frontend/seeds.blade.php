@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/seeds.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="1" />
                    <button type="submit">
                        <img src="{{ asset('images/flowrimg/Daffodily.jpeg') }}" alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Flowering Seeds</p>
        </a>
        <a href="vegetable seeds.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="2" />
                    <button type="submit">
                        <img src="{{ asset('images/vegimg/Peas.jpeg') }}" alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Vegetable Seeds</p>
        </a>
        <a href="fruit seed.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="3" />
                    <button type="submit">
                        <img src="{{ asset('images/frutimg/Melon.jpeg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>Fruit Seeds</p>
        </a>
    </div>

    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Happiness is growing your own food</a>
            </marquee>
        </div>
        </section>

       

        <!-- product section starts  -->

        @if ($seeds->count() == 1)
            @foreach ($seeds as $plant)
                <section class="product" id="product"
                    style="position: relative;
                top: 7px;
                padding-bottom: 50px">
                    <h1 class="heading" style="margin: 0px;">All types of Seeds</h1>
                    <div class="box-container" style="width: 50% !important">>
                        <div class="box" data-name="b-calathea">
                            <div class="icons">
                                <form method="GET" action="{{ route('add.to.wishlist') }}">
                                    @csrf
                                    <input type="hidden" name="type" value="seed" />
                                    <input type="hidden" name="id" value="{{ $plant->id }}" />
                                    <a href="#" class="fas fa-heart"
                                        onclick="event.preventDefault(); this.closest('form').submit();"></a>
                                </form>
                            </div>
                            <a class="underline" href="{{ route('seeds.detail', [$plant->id]) }}">
                                <img src="{{ asset('assets/seedsFiles') . '/' . $plant->photo }}" alt="">
                                <h3>{{ $plant->name }}</h3>
                            </a>
                            <div class="location"> Location:
                                <span>{{ DB::table('seeds_categories')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
                            </div>
                            <div class="price">Rs.{{ $plant->price }}</div>
                            <form method="GET" action="{{ route('add.to.cart') }}">
                                @csrf
                                <input type="hidden" name="type" value="seed" />
                                <input type="hidden" name="id" value="{{ $plant->id }}" />
                                <a href="#" class="btn"
                                    onclick="event.preventDefault(); this.closest('form').submit();">add to cart</a>
                            </form>
                        </div>
                    </div>
                </section>
            @endforeach
        @else
            <section class="product" id="product">
                <h1 class="heading">All types of Seeds</h1>
                <div class="box-container">
                    @foreach ($seeds as $plant)
                        <div class="box" data-name="b-calathea">
                            <div class="icons">
                                <form method="GET" action="{{ route('add.to.wishlist') }}">
                                    @csrf
                                    <input type="hidden" name="type" value="seed" />
                                    <input type="hidden" name="id" value="{{ $plant->id }}" />
                                    <a href="#" class="fas fa-heart"
                                        onclick="event.preventDefault(); this.closest('form').submit();"></a>
                                </form>
                            </div>
                            <a class="underline" href="{{ route('seeds.detail', [$plant->id]) }}">
                                <img src="{{ asset('assets/seedsFiles') . '/' . $plant->photo }}" alt="">
                                <h3>{{ $plant->name }}</h3>
                            </a>
                            <div class="location"> Location:
                                <span>{{ DB::table('seeds_categories')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
                            </div>
                            <div class="price">Rs.{{ $plant->price }}</div>
                            <form method="GET" action="{{ route('add.to.cart') }}">
                                @csrf
                                <input type="hidden" name="type" value="seed" />
                                <input type="hidden" name="id" value="{{ $plant->id }}" />
                                <a href="#" class="btn"
                                    onclick="event.preventDefault(); this.closest('form').submit();">add to cart</a>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        @include('layouts.welcome.footer')
        @push('frontJs')
            <script src="{{ asset('js/homescript.js') }}" defer></script>
            <script src="{{ asset('js/script.js') }}" defer></script>
        @endpush
    @endsection
