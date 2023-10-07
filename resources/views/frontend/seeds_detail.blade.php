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
                <img src="{{ asset('assets/seedsFiles') . '/' . $seed->photo }}" height="100%">
            </div>
        </div>
        <div class="basic-info">
            <h1>{{ $seed->name }}</h1>
        
        </div>
        <div class="description">
            <h2>Description:</h2>
            <p> {!! $seed->description !!}</p>
            <span>Rs.{{ $seed->price }}</span>
        </div>
        <div class=""></div>
        <div class="buttons">
            <form method="GET" action="{{ route('add.to.cart') }}">
                @csrf
                <input type="hidden" name="type" value="seed" />
                <input type="hidden" name="id" value="{{ $seed->id }}" />
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
