@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/soilfertilizer.css') }}">
@endpush
@section('content')
    <!-- header section ends -->

    <div class="sidebar">
        <h1>Soil and Fertilizer</h1>
        <ol>
            <ul>
                @foreach ($plants as $type)
                <li>
                    <a href="{{ route('plant.detail', [$type->id])}}" class="link-as-button">{{ $type->name }}</a>
                </li>
             @endforeach
            </ul>
        </ol>
    </div>

    <!-- product section starts  -->

    <section class="product" id="product">
        <h1 class="heading">Soil and Fertilizer</h1>
        <div class="box-container">
            @foreach ($plants as $plant)
                <div class="box" data-name="b-calathea">
                    <div class="icons">
                        <form method="GET" action="{{ route('add.to.wishlist') }}">
                            @csrf
                            <input type="hidden" name="type" value="soil" />
                            <input type="hidden" name="id" value="{{ $plant->id }}" />
                            <a href="#" class="fas fa-heart"
                            onclick="event.preventDefault(); this.closest('form').submit();"></a>
                        </form>
                    </div>
                    <a class="underline" href="{{ route('fertilizer.detail', [$plant->id]) }}">
                        <img src="{{ asset('assets/fertilizersFiles') . '/' . $plant->photo }}" alt="">
                        <h3>{{ $plant->name }}</h3>
                    </a>
                    <div class="location"> Type:
                        <span>{{ DB::table('fertilizer_types')->where('id', $plant->type_id)->pluck('name')->first() }}</span>
                    </div>
                    <div class="price">Rs.{{ $plant->price }}</div>
                    <form method="GET" action="{{ route('add.to.cart') }}">
                        @csrf
                        <input type="hidden" name="type" value="soil" />
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
