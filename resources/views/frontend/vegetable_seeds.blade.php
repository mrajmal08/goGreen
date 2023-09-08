@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/vegetableseeds.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="onion seeds.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="7" />
                    <button type="submit">
                        <img src="{{ asset('images/seedsimg/onine seed.jpg') }}" alt="Image 3">
                    </button>
                </form>
            </div>
            <p>Onion Seeds</p>
        </a>
        <a href="bitter gourd seed.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="8" />
                    <button type="submit">
                        <img src="{{ asset('images/seedsimg/bitter gourd seed.jpg') }}" alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Bitter Gourd Seeds</p>
        </a>
        <a href="pumpkin seeds.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('seeds') }}">
                    @csrf
                    <input type="hidden" name="id" value="9" />
                    <button type="submit">
                        <img src="{{ asset('images/seedsimg/pumkin sed.jpg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>Pumpkin Seeds</p>
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
            <h1>Vegetable Seeds</h1>
            <ol>
                <ul>
                    <?php $indoor = DB::table('seeds_types')
                        ->where('location', 'Vegetable Seeds')
                        ->get(); ?>
                    @foreach ($indoor as $type)
                        <form method="GET" action="{{ route('seeds') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $type->id }}" />
                            <li>
                                <a href="#" class="link-as-button"
                                    onclick="event.preventDefault(); this.closest('form').submit();">{{ $type->name }}</a>
                            </li>
                        </form>
                    @endforeach
                </ul>
            </ol>
        </div>

        <!-- product section starts  -->
        <section class="product" id="product">
            <h1 class="heading">Vegetable Seeds</h1>
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
