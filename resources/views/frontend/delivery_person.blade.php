@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/deliveryperson.css') }}">
@endpush
@section('content')


<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/deliveryanddecore/deliverry4.png')}});">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Product detail start-->

<section class="product-container">

   <div class="content">
       <h1 class="heading">Delivery Person</h1>
         </div>
           <div class="description">
            <p> A delivery person is an expert who delivers item shipments to clients and  customers in various areas. They usually deliver  items using  a vehicle provided  to them by their manager or may have  to use their own vehicles.</p>




               <div class="content">
        <h1 class="heading">Delivery Services:</h1>
    </div>
      <div class="description">


         <h3> 1.Reliable Plant Delivery:</h3>
          <p> Our dedicated delivery person ensures that your plants reach you safely and on time, no matter where you are.
            We take pride in our efficient plant delivery service, making it convenient for you to receive the plants you love.</p>
         <h3> 2. Timely and Efficient Delivery:</h3>
          <p> "Our delivery person is committed to prompt and efficient service, ensuring that your plants arrive at their destination in optimal condition."
            With our reliable delivery team, you can expect your plants to be delivered to your doorstep without any hassle.</p>
         <h3> 3. Area Coverage: </h3>
         <p>Our plant delivery service covers a specific  of areas, we  ensure that plant lovers everywhere can enjoy our green offerings</p>
         <h3>4. Secure Packaging:</h3>
          <p> We understand the importance of protecting your plants during transit. Our delivery person ensures that each plant is securely packaged to prevent damage.
            You can have peace of mind knowing that your plants are in safe hands as our delivery person takes extra care in packaging them for transportation</p>
         <h3>5. Courteous and Professional Service:</h3>
          <p>Our delivery person not only delivers plants but also provides courteous and professional service throughout the delivery process.
            They will handle your plants with care and ensure a smooth delivery experience, answering any questions you may have along the way.</p>

        <p>Our reliable delivery person ensures that all your gardening needs are met promptly. Whether it's delivering fresh plants, soil, mulch, or gardening tools, we provide a convenient and efficient service right to your doorstep. Sit back and let our delivery person bring everything you need for your gardening projects.</p>

    <h1 class="heading">Decore Person</h1>
        </div>
            <div class="description">
              <p> Our decorator specializes in transforming outdoor spaces into beautiful and inviting gardens.
                They have an eye for design and can help create stunning arrangements of plants, flowers, and decorative elements.
                Our decorator will work closely with you to understand your preferences and create a personalized garden design that suits your style.</p>





</section>
<!--Product deatil end-->


    <!-- banner section starts  -->

<section class="banner-container">


    <div class="banner">
        <img src="{{ asset('images/deliveryanddecore/decore.png')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/deliveryanddecore/decore2.png')}}" alt="">
    </div>

</section>

<!-- banner section ends -->




<!--icons section starts  -->

<section class="icons-container">

    <div class="icon">
        <img src="{{ asset('images/images/icon1.png')}}" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping on order</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon2.png')}}" alt="">
        <div class="content">
            <h3>100% Money Back</h3>
            <p>You’ve 30 days to Return</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon3.png')}}" alt="">
        <div class="content">
            <h3>Payment Secure</h3>
            <p>100% secure payment</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon4.png')}}" alt="">
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
