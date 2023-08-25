@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/spray.css') }}">
@endpush
@section('content')


<!-- home section starts  -->

<div class="container">
    <div class="box">
        <div class="images">
            <div class="img-holder active">
                <img src="{{ asset('images/soilfertimg/spray.jpeg') }}" height="120%">
            </div>
        </div>
        <div class="basic-info">
            <h1>Spray</h1>
        </div>
        <div class="description">
            <h2>Description:</h2>
            <p>Sprays and dusts are used to control insects, mites, and fungous and bacterial diseases of plants; insects, such as lice and flies, on animals; and weeds, by means of chemical weed killers or herbicides. We all know plants need water to survive, and we tend to dispense that water from a faucet or watering can—not from the nozzle of a spray can. But gently misting some houseplants offers a bevy of benefits that will help them thrive over the long haul. So, read on to find out why you might want to add regular misting to your plant care routine, as well as the correct way to do it.</p>
            <span>Rs.2,000</span>
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
