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
               <p>We offer local plant delivery within your area. Experience the convenience of having beautiful plants delivered right to your doorstep.Get your favorite plants delivered anywhere in your  area. Transform your space with our hassle-free delivery service.Serving with our reliable plant delivery service. Browse our selection and enjoy the convenience of doorstep plant delivery.We delivered plants  on the specific areas like Sialkot, Wazirabad Road,Gujrat and Gujranwala.</p>
        <h4> "Our dedicated delivery team ensures that your plants arrive fresh and healthy to your  location. Experience the convenience of online plants shopping with us!"</h4>

               <div class="content">
        <h1 class="heading">Delivery Time</h1>
    </div>
      <div class="description">
        <p> we  Invest in secure and appropriate packaging materials that protect plants during shipping. We use cushioning materials to prevent movement and damage to the plants, and consider using specially designed plant packaging that provides adequate ventilation and protects delicate foliage.</p>
</section>


<section class="icons-container">
    <div class="icon">
        <img src="{{ asset('images/images/icon1.png') }}" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping above Rs.5000</p>
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
