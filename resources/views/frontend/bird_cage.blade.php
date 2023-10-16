@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/birdcage.css') }}">
@endpush
@section('content')



<!-- header section ends -->
<!-- home section starts  -->
<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/cage/cage6.png')}});">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Product detail start-->

<section class="product-container">
    <div class="content">
        <h1 class="heading">Choose a Right Bird Cage</h1>
    </div>
    <div class="description">
        <p>One of the  basics  of bird   ownership is provding your birds  with satisfactory living space. With all  of the various sizes, varieties, and models of bird cages  it's not difficult to become overpowered while looking for a permanent place to stay for your pet.  there are a couple of basic rules you can recollect that will make the most common way of picking one a lot simpler.</p>
        <p>Obviously, is to remember the size of your bird. While it is completely fine to keep a Finch or Canary in a little space, bigger birds need bigger cages and it is in every case better to purchase the biggest cage for your bird. Keeping a bird in an cage  that is too little can prompt unwanted ways of behaving like shouting, gnawing, mental problems, and quill culling, to give some examples. A decent cage  should  be huge enough for your bird to stroll around serenely, and completely expand and fold her wings. Remember to consider the space that will be lost when you add your bird's roosts, food bowls, and toys.</p>
    </div>
    <div class="content">
        <h1 class="heading">Location and Placement</h1>
    </div>
    <div class="description">
        <p>The first of these principles is to choose  your bird cage, and shop in light of what will work with the area you have saved. Keep your bird cages where your birds will actually want to see and connect with the individuals from your family habitually. Many birds love consideration and would be exhausted and desolate in  unused room. Ensure that you don't place the  cage  in one of the great traffic, high-volume focuses of your home. While birds love communication, a lot of clamor and disturbance will make the bird be restless and could prompt medical issues. </p>
    </div>
    <div class="content">
        <h1 class="heading">Walls And Windows</h1>
    </div>
    <div class="description">
        <p> The ideal position is in a corner where they can have two walls. Furthermore, you shouldn't put your bird cage straightforwardly before a window, as outside factors like dogs and  storm will startle them. The temperature can quickly change by a window too. A fractional perspective on a window is fine. Heat Changes: try not to keep your bird near an intensity or cooling vent as the fast changes in temperature are unhealthy.</p>
    </div>

</section>
<!--Product deatil end-->

<!-- banner section starts  -->

<section class="banner-container">


    <div class="banner">
        <img src="{{ asset('images/cage/cage1.jpeg')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/cage/cages.png')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/cage/wood cage 2.png')}}" alt="">
    </div>
    <div class="banner">
        <img src="{{ asset('images/cage/cage 4.png')}}" alt="">
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
