@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/growingbags.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <home class="homesection" id="homediv">
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/pots/balco\ ani.jpg') }});">
                    </div>
                </div>
            </div>
        </div>
        </section>

        <div class="sidebar">
            <h1>Growing Bags</h1>
            <ol>
                <ul>
                    <?php $indoor = DB::table('pots_types')
                        ->where('page', 'Growing Bags')
                        ->get(); ?>
                    @foreach ($indoor as $type)
                        <form method="GET" action="{{ route('pots') }}">
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
            <h1 class="heading">Growing Bags </h1>
            <div class="box-container">
                @foreach ($pots as $plant)
                    <div class="box" data-name="b-calathea">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                        </div>
                        <a class="underline" href="{{ route('pots.detail', [$plant->id]) }}">
                            <img src="{{ asset('assets/potsFiles') . '/' . $plant->photo }}" alt="">
                            <h3>{{ $plant->name }}</h3>
                        </a>
                        <div class="location"> Type:
                            <span>{{ DB::table('pots_types')->where('id', $plant->type_id)->pluck('name')->first() }}</span>
                        </div>
                        <div class="price">Rs.{{ $plant->price }}</div>
                        <form method="GET" action="{{ route('add.to.cart') }}">
                            @csrf
                            <input type="hidden" name="type" value="pot" />
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
