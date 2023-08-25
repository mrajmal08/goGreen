@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/returnpolicy.css') }}">
@endpush
@section('content')


<!--Product detail start-->

<section class="product-container">
    <div class="description">
        <p>Thanks for shopping at go green nursery. If there are any difficulties during the purchase, we are here to help:</p>
    </div>
</section>
<section class="product-container">
    <div class="content">
        <h3 class="heading">Return Policy</h3>
    </div>
    <div class="description">
        <p>You Should Open And Check Your Parcel At The Time Of Delivery, There Will Be No Parcel Return Later We're So Sorry Your Plant Or Pot Was Damaged During Shipping. We Guarantee The Safe And Healthy Arrival Of All Our Plants And Will Happily Send You A Replacement Free Of Charge. Please Have Your Order Number And A Photo Of Your Damaged Plant Ready, Then Let Us Know So We Can Ship A Replacement For You As Soon As Possible.</p>
    </div>
</section>

<!--Product deatil end-->

<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Rent Return Policy:</h3>
    </div>
        <div class="description">
            <p>You have 6th month to return an item from the date you received it. To be eligible for a return, It is important to take care of these things: </p>
            <p>1. your item must be in the same condition that you received it.</p>
            <p>2. Your item must be in the original packaging and in case of plants, those should be in original pots.</p>
            <p>3. Your item needs to have the receipt or online proof of purchase.</p>
        </div>

</section>

<!--Product deatil end-->

<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Hassle-Free Returns:</h3>
    </div>
        <div class="description">
            <p>We understand that sometimes issues may arise, and customer satisfaction is our top priority.We offer a hassle-free return process to ensure that you are completely satisfied with your purchase. Our flexible return policy allows you to return your parcel if there are any issues or if you're not completely satisfied. We aim to make the return process convenient and straightforward for our valued customers.</p>
        </div>

</section>

<!--Product deatil end-->

<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Customer Support:</h3>
    </div>
    <div class="description">
        <p>"Our dedicated customer support team is here to assist you with any concerns or issues you may have regarding your parcel. We strive to provide exceptional service, and we are ready to help resolve any problems you encounter. We understand that receiving a damaged parcel can be frustrating. Please reach out to our customer support team, and we will assist you in finding a suitable solution. We are here to help. If your parcel arrived damaged or you are experiencing difficulties with the seller, please contact us, and we will do our best to resolve the issue.</p>
        <br>
    </div>
</section>

<!--Product deatil end-->



<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Customer Satisfaction Guarantee:</h3>
    </div>
    <div class="description">
        <p>We stand behind the quality of our products, and if there is an issue with your parcel, we will work to make it right. Your satisfaction is of utmost importance to us, and we are committed to resolving any concerns you may have.</p>
        <br>
    </div>
</section>

<!--Product deatil end-->

<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Return and Refund Policy:</h3>
    </div>
    <div class="description">
        <p>We have a clear return and refund policy in place to address situations where the parcel is damaged on the customer's side. Please review our return policy to understand the specific steps and requirements for initiating a return in such cases. You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable. If you receive a refund, the cost of return shipping will be deducted from your refund.</p>
    </div>
</section>

<!--Product deatil end-->


<!--icons section starts  -->

<section class="icons-container">

    <div class="icon">
        <img src="images/icon1.png" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping on order</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon2.png" alt="">
        <div class="content">
            <h3>100% Money Back</h3>
            <p>You’ve 30 days to Return</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon3.png" alt="">
        <div class="content">
            <h3>Payment Secure</h3>
            <p>100% secure payment</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon4.png" alt="">
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
