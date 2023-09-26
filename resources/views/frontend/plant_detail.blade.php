@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/description.css') }}">
@endpush
@section('content')


<!-- header section ends -->

<!-- home section starts  -->

<div class="container">
    <div class="box">
        <div class="images">
            <div class="img-holder active">
                @if($type == 'season')
                <img src="{{ asset('assets/seasonsFiles') . '/' . $plant->photo }}" height="100%">
                @elseif($type == 'flower')
                <img src="{{ asset('assets/flowersFiles') . '/' . $plant->photo }}" height="100%">
                @else
                <img src="{{ asset('assets/plantsFiles') . '/' . $plant->photo }}" height="100%">
                @endif
            </div>
        </div>
        <div class="basic-info">
            <h1>{{ $plant->name }}</h1>
            <div class="location">Location: <span>{{ DB::table('plants_types')->where('id',$plant->type_id)->pluck('name')->first() }}</span></div>
        </div>
        <div class="description">
            <h2>Description:</h2>
            <p> {!! $plant->description !!}</p>
            <span>Rs.{{ $plant->price }}</span>
        </div>
        <div class=""></div>
        <div class="buttons">
            <form method="GET" action="{{ route('add.to.cart') }}">
                @csrf
                <input type="hidden" name="type" value="plant" />
                <input type="hidden" name="id" value="{{ $plant->id }}" />
                <a href="#" class="btn"
                onclick="event.preventDefault(); this.closest('form').submit();">add to cart</a>
            </form>
        </div>
    </div>
</div>

@include('layouts.welcome.footer')
@push('frontJs')
    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
