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
                        <?php $indoor = DB::table('seeds_types')
                            ->where('location', 'Fruit Seeds')
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
            <h1 class="heading">fruit Seeds</h1>
            <div class="box-container">
                @foreach ($seeds as $plant)
                    <div class="box" data-name="b-calathea">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                        </div>
                        <a class="underline" href="{{ route('seeds.detail', [$plant->id]) }}">
                            <img src="{{ asset('assets/seedsFiles') . '/' . $plant->photo }}" alt="">
                            <h3>{{ $plant->name }}</h3>
                        </a>
                        <div class="location"> Location:
                            <span>{{ DB::table('seeds_categories')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
                        </div>
                        <div class="price">Rs.{{ $plant->price }}</div>
                        <a href="#" class="btn">add to cart</a>
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
