@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/gardencore.css') }}">
@endpush
@section('content')


<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/grdnimg/slider1.PNG')}} );">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Product detail start-->

<section class="product-container">

        <div class="content">
            <h3 class="heading">Garden Decoration</h3>
        </div>
            <div class="description">
                <p>The most attractive adornment you can give to your home is to decore your homes ,yards etc. You are lucky if you have a garden. Anyone who spends their free time in their garden because it gives you relaxation in the fresh air, barbeque whenever you want and take care of their plants and flowers. Working with soil and to till your garden with the correct garden tiller can also be relaxing. A small yard or garden will also give you space to grow fruits and vegetables. It has several health benefits too.It can help you feel better, get stronger, feel less stressed, and make positive connections. It takes a lot of work, though. To complete the task correctly, various factors must be taken into account. For example, you must prepare the garden beds, evaluate the soil, acquire the necessary tools, choose the best seeds, and adhere to some planting guidelines.</p>
                <br>
                <p>But aside from these things, choosing the proper place for your plants is also important.If you have an unused space in your garage, you may consider transforming it into an efficient garden. But because gardening is difficult, you must carefully plan each step if you want to succeed. Therefore, Go Green Nursery, an online garden platform that offers a wide choice of local gardeners and gardening services, Go Green Nursery is recommended if you're looking for ways to make your gardening life easier. Be sure to let them know your goals and requirements so they can get to work designing the ideal garden for you.</p>
            </div>

</section>

<!--Product deatil end-->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn10.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn4.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn5.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn9.jpeg')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn7.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn8.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn6.jpeg') }}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/grdnimg/grdn3.jpeg') }}" alt="">
    </div>

</section>

<!-- banner section ends -->



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
