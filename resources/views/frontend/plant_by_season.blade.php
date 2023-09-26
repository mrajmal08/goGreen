@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/plantsbyseason.css') }}">
@endpush

@section('content')


    <!-- home section starts  -->
    <div class="homesection" id="homediv">
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/images/seasonbanr.jpg') }});">
                    </div>
                </div>
            </div>
        </div>
        </section>

        <div class="sidebar">
            <h1>Plants By Season</h1>
            <ol>
                <li><a href="#">Summer Plants</a></li>
                <ul>
                    <ul>
                        @foreach ($plants as $type)
                            <li>
                                <a href="{{ route('season.detail', [$type->id]) }}" class="button-link">{{ $type->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </ul>
                {{-- <li><a href="#">Winter Plants</a></li>
                <ul>
                    <?php $indoor = DB::table('plants_by_season_types')
                    ->where('location', 'Winter Plants')
                    ->get(); ?>
                @foreach ($indoor as $type)
                    <form method="GET" action="{{ route('plant.by.season') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $type->id }}" />
                        <li>
                            <a href="#" class="link-as-button"
                                onclick="event.preventDefault(); this.closest('form').submit();">{{ $type->name }}</a>
                        </li>
                    </form>
                @endforeach
                </ul>
                <li><a href="#">Spring Plants</a></li>
                <ul>
                    <?php $indoor = DB::table('plants_by_season_types')
                    ->where('location', 'Spring Plants')
                    ->get(); ?>
                @foreach ($indoor as $type)
                    <form method="GET" action="{{ route('plant.by.season') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $type->id }}" />
                        <li>
                            <a href="#" class="link-as-button"
                                onclick="event.preventDefault(); this.closest('form').submit();">{{ $type->name }}</a>
                        </li>
                    </form>
                @endforeach
                </ul> --}}
            </ol>
        </div>

        <!-- product section starts  -->
        @if ($plants->count() == 1)
        @foreach ($plants as $plant)
        <section class="product" id="product"
                    style="    position: relative;
                top: 50px;
            ">
            <h1 class="heading">All Season plant category</h1>
            <div class="box-container"  style="width: 50% !important">
                <div class="box" data-name="b-calathea">
                    <div class="icons">
                        <form method="GET" action="{{ route('add.to.wishlist') }}">
                            @csrf
                            <input type="hidden" name="type" value="plant" />
                            <input type="hidden" name="id" value="{{ $plant->id }}" />
                            <a href="#" class="fas fa-heart"
                            onclick="event.preventDefault(); this.closest('form').submit();"></a>
                        </form>
                    </div>
                    <a class="underline" href="{{ route('season.detail', [$plant->id])}}">
                    <img src="{{ asset('assets/seasonsFiles') . '/' . $plant->photo }}" alt="">
                    <h3>{{ $plant->name }}</h3></a>
                    <div class="location"> Location:
                        <span>{{ DB::table('plants_by_season_types')->where('id', $plant->type_id)->pluck('location')->first() }}</span>
                    </div>
                    <div class="price">Rs.{{ $plant->price }}</div>
                    <form method="GET" action="{{ route('add.to.cart') }}">
                        @csrf
                        <input type="hidden" name="type" value="plant" />
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
            <h1 class="heading">All Season plant category</h1>
            <div class="box-container">
                @foreach ($plants as $plant)
                <div class="box" data-name="b-calathea">
                    <div class="icons">
                        <form method="GET" action="{{ route('add.to.wishlist') }}">
                            @csrf
                            <input type="hidden" name="type" value="plant" />
                            <input type="hidden" name="id" value="{{ $plant->id }}" />
                            <a href="#" class="fas fa-heart"
                            onclick="event.preventDefault(); this.closest('form').submit();"></a>
                        </form>
                    </div>
                    <a class="underline" href="{{ route('season.detail', [$plant->id])}}">
                    <img src="{{ asset('assets/seasonsFiles') . '/' . $plant->photo }}" alt="">
                    <h3>{{ $plant->name }}</h3></a>
                    <div class="location"> Location:
                        <span>{{ DB::table('plants_by_season_types')->where('id', $plant->type_id)->pluck('location')->first() }}</span>
                    </div>
                    <div class="price">Rs.{{ $plant->price }}</div>
                    <form method="GET" action="{{ route('add.to.cart') }}">
                        @csrf
                        <input type="hidden" name="type" value="plant" />
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
