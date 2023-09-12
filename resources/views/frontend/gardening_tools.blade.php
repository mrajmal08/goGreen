@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/gardeningtool.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="pitch fork accesseries.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="7" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/pitch fork.png') }}" alt="Image 3">
                    </button>
                </form>
            </div>
            <p>Pitch Fork</p>
        </a>
        <a href="Hedge Trimmer accesseries.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="8" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/hedge trimmer.jpg') }}"alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Hedge Trimmer</p>
        </a>
        <a href="tiller accesseries.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('accessories') }}">
                    @csrf
                    <input type="hidden" name="id" value="9" />
                    <button type="submit">
                        <img src="{{ asset('images/accesrimg/tiller.jpg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>Tiller</p>
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
            <h1>Gardening Tools</h1>
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
            <h1 class="heading">Gardening Tool</h1>
            <div class="box-container">
                @foreach ($accessories as $plant)
                    <div class="box" data-name="b-calathea">
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
