@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/tipstricks.css') }}">
@endpush
@section('content')


<!-- header section ends -->

<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/tripstrik/gardening.png') }});">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Product detail start-->

<section class="product-container">
    <div class="content">
        <h1 class="heading">Tips To Make Your Garden Look Better</h1>
    </div>
    <div class="description">
        <p>Garden beautifies your home and is an excellent way to spend your time after work. If you're new to gardening, start building your garden with these easy to follow steps:</p>
    </div>
    <div class="content">
        <h3 class="heading">1. Pick the Right Spot</h3>
    </div>
    <div class="description">
        <P> It is always better to take small steps towards big wins. Pick a small space to start building your garden.Guarantee that the space you pick gets 5-6 hours of direct daylight. Stay away from a space that gets strong winds , it could push over your young and budding plants. Lastly, think about the accessibility of your garden space for watering, picking, and really focusing on your plants. As they , out of sight often equals out of mind.</P>
    </div>
    <div class="content">
        <h3 class="heading">2. Types of Grass and Flower</h3>
    </div>
    <div class="description">
        <p> When planning on how to make a garden look better, it is also ideal to plant only those that are suitable for the climate in your region. This way, you can avoid spending a lot of time and money on plants that will not survive in your climate or region. Hence, grow native types of grasses and flowers for an overall great look in the garden. Just make sure to clean up any dead leaves and weeds that are in the way of other plants.</p>
    </div>
    <div class="content">
        <h3 class="heading">3.Sunlight</h3>
    </div>
    <div class="description">
        <p>Misjudging sunlight is a typical trap when you're first figuring out how to plant. Focus on how daylight plays through your yard before choosing  a spot for your garden. Most plants, including numerous vegetables, spices, and organic products, need something like 6 hours of sun to flourish. </p>
    </div>
    <div class="content">
        <h3 class="heading">4. Close To Water</h3>
    </div>
    <div class="description">
        <p> One of the most mind-blowing cultivating tips you'll at any point get is to design your new garden  close to a water source. Ensure you can run a hose to your garden site, so you don't need to drag water to it each time your plants get parched. The most ideal way to let know if plants need watering is to push a finger an inch down into the soil (that is about one knuckle  deep). If it's dry,means it's  time to water.</p>
    </div>
    <div class="content">
        <h3 class="heading">5. Work on Soil and Fertilizers</h3>
    </div>
    <div class="description">
        <p>Plants generally benefit from the nutrient-rich cultivating soil. Venture out by looking at the surface of your dirt, it ought to be effortlessly scooped and disintegrate in your grasp. Assuming your soil  is hard and the  texture  is clay- like, it will be challenging for every one of the plants to   grow their roots. Assuming you have rough soil, eliminate the rocks Working on the soil isn't as hard  as you aspect, it accompanies incredible advantages. Add natural fertilizer made of tea compost,  vegetable  peels, to your soil  to work on its quality.</p>
    </div>
    <div class="content">
        <h3 class="heading">6.Gardening Tools </h3>
    </div>
    <div class="description">
    <p>When you have an arrangement set up, you'll require some essential cultivating devices to get everything rolling. We're posting a small bunch of devices expected for cultivating. You will require:<br>
        1.The most common : One instrument that every gardener   should own some pruning scissors.  You will be using these to cut back plants and bushes, as well as keep up with their wellbeing by removing the dead pieces of these plants.<br>
        2.Tools for digging: You will require two or three devices for digging and setting up your  soil  to begin establishing your greens. You will require a spade, a scoop, and a garden fork. The spade and scoop are utilized to dig the openings for your plants, though the garden fork is utilized for breaking the enormous bunches of soil or for getting the roots free from old plants.<br>
        3.Instruments for watering: The best devices for liberally watering your garden are garden hose (pipe) and a watering can. Garden hose is ideal for greater undertakings like watering trees .  For fragile and little plants, a watering can is liked. Your young plants can't take the high pressure and will thank you for the delicate sprinkling.<br>
        4.Instruments for weeding: To handle the weed issue and dispose of these undesirable plants, you will require a forked scoop and a cultivating blade. These two helpful instruments will permit you to ward the attacking plants off.</p>

</section>

<!--Product deatil end-->

<!-- banner section starts  -->
<section class="banner-container">

    <div class="banner">
        <img src="{{ asset('images/tripstrik/tools.jpg')}}" alt="">
    </div>
</section>
<!-- banner section ends -->



<!--icons section starts  -->

<section class="icons-container">

    <div class="icon">
        <img src="{{ asset('images/images/icon1.png')}}" alt="">
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
