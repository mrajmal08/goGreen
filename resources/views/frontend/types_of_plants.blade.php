@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/typesofplants.css') }}">
@endpush
@section('content')


<div class="home-section">
    <div class="slide-image">
        <img src="{{ asset('images/images/plantslide.jpg')}}" alt="Image 1">
    </div>
</div>

<!-- home section starts -->

<div class="sidebar">
    <h1>Types of Plants</h1>
    <ol>
        <li><a href="#">→</a></li>
        <ul>
            <?php $indoor = DB::table('plants_types')
                        ->where('location', 'Indoor Plants')
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
        <li><a href="#">→</a></li>
        <ul>
            <?php $indoor = DB::table('plants_types')
            ->where('location', 'Outdoor Plants')
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
        <li><a href="#">→</a></li>
    <ul>
        <?php $indoor = DB::table('plants_types')
        ->where('location', 'Office Plants')
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
    <h1 class="heading">All Types of Plants</h1>
    <div class="box-container">
        @foreach ($plants as $plant)
        <div class="box" data-name="b-calathea">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <a class="underline" href="{{ route('plant.detail', [$plant->id])}}">
            <img src="{{ asset('assets/plantsFiles') . '/' . $plant->photo }}" alt="">
            <h3>{{ $plant->name }}</h3></a>
            <div class="location"> Location:
                <span>{{ DB::table('plants_categories')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
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


@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
