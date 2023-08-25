@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/deliveryareatime.css') }}">
@endpush
@section('content')


<!--Product detail start-->

<section class="product-container">

        <div class="content">
            <h1 class="heading">Delivery Area</h1>
        </div>
            <div class="description">
               <p>We offer local plant delivery within your area. Experience the convenience of having beautiful plants delivered right to your doorstep!".</p>
        <p>Get your favorite plants delivered anywhere in your  area. Transform your space with our hassle-free delivery service.Serving with our reliable plant delivery service. Browse our selection and enjoy the convenience of doorstep plant delivery."</p>
        <p> we delivered plants  on the specific areas like Hajipura road,Gundam Mundi, Wazir abad Road and Gohad pur road.</p>
        <h4> "Our dedicated delivery team ensures that your plants arrive fresh and healthy to your  location. Experience the convenience of online plants shopping with us!"</h4>

               <div class="content">
        <h1 class="heading">Delivery Time</h1>
    </div>
      <div class="description">
        <p> we  Invest in secure and appropriate packaging materials that protect plants during shipping. We use cushioning materials to prevent movement and damage to the plants, and consider using specially designed plant packaging that provides adequate ventilation and protects delicate foliage.</p>

        <h4> Delivering parcels during regular hours  (typically between 11 AM and 5 PM) is often suitable for commercial addresses, offices, and workplaces.</h4>
</section>


<section class="icons-container">
    <div class="icon">
        <img src="{{ asset('images/images/icon1.png') }}" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping on order</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon2.png') }}" alt="">
        <div class="content">
            <h3>100% Money Back</h3>
            <p>You’ve 30 days to Return</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon3.png') }}" alt="">
        <div class="content">
            <h3>Payment Secure</h3>
            <p>100% secure payment</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon4.png') }}" alt="">
        <div class="content">
            <h3>Support 24/7</h3>
            <p>Contact us anytime</p>
        </div>
    </div>

</section>



@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
