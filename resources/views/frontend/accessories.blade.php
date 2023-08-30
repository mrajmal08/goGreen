@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/accessories.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="gardening tool.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="1" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/garden tool 3.jpg') }}" alt="Image 3">
                    </button>
                </form>
            </div>
            <p>Gardening Tool</p>
        </a>
        <a href="seed starter.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="2" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/seed starter 1.jpg') }}"alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Seed Starter</p>
        </a>
    </div>

    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Let's Start Gardening Today</a>
            </marquee>
        </div>
        </section>

        <div class="sidebar">
            <h1>Accessories</h1>
            <ol>
                <ul>
                    @foreach ($types as $type)
                        <form method="GET" action="{{ route('accessories') }}">
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
            <h1 class="heading">Gardening Tool</h1>
            <div class="box-container">
                @foreach ($accessories as $plant)
                    <div class="box" data-name="b-calathea">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                        </div>
                        <a class="underline" href="{{ route('accessories.detail', [$plant->id]) }}">
                            <img src="{{ asset('assets/accessoriesFiles') . '/' . $plant->photo }}" alt="">
                            <h3>{{ $plant->name }}</h3>
                        </a>
                        <div class="location"> Category:
                            <span>{{ DB::table('accessories_cat')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
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
