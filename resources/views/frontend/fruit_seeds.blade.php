@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/fruitseeds.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="grapes seeds.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="10" />
                    <button type="submit">
                        <img src="{{ asset('images/seedsimg/grape seed.jpg') }}" alt="Image 3">
                    </button>
                </form>
            </div>
            <p>Grapes Seeds</p>
        </a>
        <a href="watermelon seeds.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="11" />
                    <button type="submit">
                        <img src="{{ asset('images/seedsimg/watermelon seed.jpg') }}" alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Watermelon Seeds</p>
        </a>
        <a href="plum seed.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="12" />
                    <button type="submit">
                        <img src="{{ asset('images/seedsimg/plum seed.jpg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>Plum Seed</p>
        </a>
    </div>

    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Happiness is growing your own food</a>
            </marquee>
        </div>
        </section>



        <div class="sidebar">
            <h1>Fruit Seeds</h1>
            <ol>
                <ul>
                    <ul>
                        @foreach ($seeds as $type)
                        <li>
                            <a href="{{ route('seeds.detail', [$type->id])}}" class="link-as-button">{{ $type->name }}</a>
                        </li>
                     @endforeach
                </ul>
            </ol>
        </div>

        <!-- product section starts  -->
        <section class="product" id="product">
            <h1 class="heading">fruit Seeds</h1>
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

        @include('layouts.welcome.footer')
        @push('frontJs')
            <script src="{{ asset('js/homescript.js') }}" defer></script>
            <script src="{{ asset('js/script.js') }}" defer></script>
        @endpush
    @endsection
