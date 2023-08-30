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
                <img src="{{ asset('assets/accessoriesFiles') . '/' . $accessories->photo }}" height="100%">
            </div>
        </div>
        <div class="basic-info">
            <h1>{{ $accessories->name }}</h1>
            <div class="location">Location: <span>{{ DB::table('accessories_types')->where('id',$accessories->type_id)->pluck('name')->first() }}</span></div>
        </div>
        <div class="description">
            <h2>Description:</h2>
            <p> {{ $accessories->description }}</p>
            <span>Rs.{{ $accessories->price }}</span>
        </div>
        <div class=""></div>
        <div class="buttons">
            <a href="#" class="cart">add to cart</a>
        </div>
    </div>
</div>

@include('layouts.welcome.footer')
@push('frontJs')
    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
