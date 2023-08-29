@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/flowering.css') }}">
@endpush

@section('content')

<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/flowerbanner.jpeg') }});">
                    <div class="content">
                        <h3>Mood Fresh Flowering</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="sidebar">
    <h1>Flowering Plants</h1>
    <ol>
        <li><a href="#">→</a></li>
        <ul>
            <?php $indoor = DB::table('flowering_plants_types')
            ->where('location', 'Flowering Plants')
            ->get(); ?>
        @foreach ($indoor as $type)
            <form method="GET" action="{{ route('plants') }}">
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
    <h1 class="heading">Flowering plant category</h1>
    <div class="box-container">
        @foreach ($plants as $plant)
        <div class="box" data-name="b-calathea">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <a class="underline" href="{{ route('plant.detail', [$plant->id])}}">
            <img src="{{ asset('assets/flowersFiles') . '/' . $plant->photo }}" alt="">
            <h3>{{ $plant->name }}</h3></a>
            <div class="location"> Location:
                <span>{{ DB::table('flowering_plants_types')->where('id', $plant->type_id)->pluck('name')->first() }}</span>
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
