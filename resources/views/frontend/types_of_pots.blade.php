@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/typesofpots.css') }}">
@endpush
@section('content')
    <div class="sidebar">
        <h1>Types of Pots</h1>
        <ol>
            <ul>
                <?php $indoor = DB::table('pots_types')
                    ->where('page', 'Types of Pots')
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
        <h1 class="heading">All Types of Pots</h1>
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
