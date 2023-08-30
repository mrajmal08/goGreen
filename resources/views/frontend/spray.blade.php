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
                <?php $indoor = DB::table('fertilizer_types')->get(); ?>
                @foreach ($indoor as $type)
                    <form method="GET" action="{{ route('soil.fertilizer') }}">
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
        <h1 class="heading">Soil and Fertilizer</h1>
        <div class="box-container">
            @foreach ($plants as $plant)
                <div class="box" data-name="b-calathea">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <a class="underline" href="{{ route('fertilizer.detail', [$plant->id]) }}">
                        <img src="{{ asset('assets/fertilizersFiles') . '/' . $plant->photo }}" alt="">
                        <h3>{{ $plant->name }}</h3>
                    </a>
                    <div class="location"> Type:
                        <span>{{ DB::table('fertilizer_types')->where('id', $plant->type_id)->pluck('name')->first() }}</span>
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
