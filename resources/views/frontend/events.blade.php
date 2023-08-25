@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/events.css') }}">
@endpush
@section('content')

<!-- header section ends -->

<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/events/eve.png') }});">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Garden Party Themes</h3>
    </div>
    <div class="description">
        <p>Decorating garden for the party, choosing a theme will make it more adorable. Wish you were throwing a garden party in the tropics somewhere? We recreate a luscious tropical atmosphere with colorful accessories . Add some bright cushions and hanging decorations.</p>
    </div>

</section>

<!--Product deatil end-->

<!--Product img slider start-->

<home class="homesection" id="homediv">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/events/gared.png')}});">
                </div>
            </div>
        </div>
    </div>
</section>

<!--Product img slider end-->

<!--Product detail start-->

<section class="product-container">

    <div class="content">

    </div>
        <div class="description">
            <p>How special it would look at night, creating a lovely glow over the table.By using beams (or for a more rustic look use found wood) and then just hang candle holders at different heights to create a lovely atmosphere at the dinner table.  The theme we followed  was pretty in pink and the pillars were adorned with a variety of pink blooms.garden party continues seamlessly into the evening, prepare with plenty of outdoor lighting. Mix and match different types, from tea lights to lanterns, for a really pretty, luminous effect.  We facilitate our customers to  decorate their home areas ,Gardens,Offices etc .</p>
           <p> If they have any desire to beautify for birthday parties or for other ceremony,we are here to tackle their concerns.</p>
        </section>
<!--Product deatil end-->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="{{ asset('images/events/eve 2.png')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/events/light.png')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/events/taa.png')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/events/gared.png')}}" alt="">
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
            <p>You've 30 days to Return</p>
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
