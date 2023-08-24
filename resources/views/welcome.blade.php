@extends('layouts.home')

@section('content')
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

    <!-- header section starts  -->
    <header>
        <div class="header-2">
            <ul class="social-network d-flex align-items-center p-0">
                <a href="home.html" class="logo"><i class="fas fa-seedling"></i></a>
                <h5>GoGreenNursery</h5>
            </ul>
            <form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fas fa-search"></label>
            </form>
            <div class="icons">
                <ul class="social-network d-flex align-items-center p-0">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="fas fa-heart"></i></a>
                    <a href="login/login.html"><i class="fas fa-user-circle"></i></a>
                </ul>
            </div>
        </div>
        <!--nevegation  menu start-->
        <div class="header-3">
            <div id="menu-bar" class="fas fa-bars"></div>
            <nav class="nav-menu">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children">
                        <div class="box-container"></div>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="plants.html">Plants</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="types of plants.html">Types of plants</a>
                                <a href="plants by season.html">Plants By Season</a>
                                <a href="Plants.html">Plants By Location</a>
                                <a href="flowering.html">Flowering Plants</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="seeds.html">Seeds</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="flower seeds.html">Flower Seeds</a>
                                <a href="vegetable seeds.html">Vegetable Seeds</a>
                                <a href="fruit seed.html">Fruit Seeds</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="soil&fertilizer.html">Soil&fertilizer</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="soil&fertilizer.html">Organic fertilizer</a>
                                <a href="spray.html">Spray</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="accesssories.html">Accessories</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="gardening tool.html">Gardening Tools</a>
                                <a href="seed starter.html">Seed Starter</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="pots.html">Pots</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="types of pots.html">Types of Pots</a>
                                <a href="Growing Bags.html">Growing Bags</a>
                                <a href="steel pots.html">Steel Pots</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="gardendecore.html">our Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="events.html">Plants For Events</a>
                                <a href="tips and tricks.html">Gardening Trips & Tricks</a>
                                <a href="gardendecore.html">Garden Decoration</a>
                                <a href="birds cage.html">Bird Houses</a>
                                <a href="landscapinng.html">Landscaping</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="our polices.html">Our Polices</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="faq.html">FAQ</a>
                                <a href="return polices.html">Return Policy</a>
                                <a href="privacy policy.html">Privacy Policy</a>
                                <a href="clam&out of stock.html">Damage Calim & Out Of Stock</a>
                                <a href="delivery area and time.html">Delivery Area</a>
                                <a href="delivery area and time.html">Delivery Time</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="gardener.html">Staff</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="gardener.html">Gardener</a>
                                <a href="delivery person.html">Delivery person</a>
                                <a href="delivery person.html">Decore person</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="deals.html">Deals</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="deals.html">Occasion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header section ends -->

    <!-- home section starts  -->

<section class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/slider1.jpg') }});">
                    <div class="content">
                        <h3>Go Green Nursery Now </h3>
                        <a href="home.html" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/slider2.jpg') }});">
                    <div class="content">

                        <h3>Plants make people happy</h3>
                        <a href="Plants.html" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/slider3.jpg') }});">
                    <div class="content">

                        <h3>decorate your home now</h3>
                        <a href="gardendecore.html" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/slider4.jpeg') }});">
                    <div class="content">

                        <h3>Landscaping now</h3>
                        <a href="landscapinng.html" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/slider5.jpeg') }});">
                    <div class="content">

                        <h3>Seeds now</h3>
                        <a href="seeds.html" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- home section ends -->
<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="{{ asset('images/images/banner1.jpeg') }}" alt="">
        <div class="content">

            <h3>Home plants</h3>
            <a href="Plants.html" class="btn">shop now</a>
        </div>
    </div>
    <div class="banner">
        <img src="{{ asset('images/images/banner2.jpg') }}" alt="">
        <div class="content">

            <h3>office plants</h3>
            <a href="office.html" class="btn">shop now</a>
        </div>
    </div>
</section>
<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">
    <h1 class="heading"> shop by category </h1>
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('images/images/cart1.jpeg')}}" alt="">
            <div class="content">
                <h3>Flower</h3>
                <a href="flowering.html" class="btn">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('images/images/cart2.jpg')}}" alt="">
            <div class="content">
                <h3>Indoor Plants</h3>
                <a href="indoor.html" class="btn">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('images/images/cart3.jpeg')}}" alt="">
            <div class="content">
                <h3>Outdoor Plants</h3>
                <a href="outdoor.html" class="btn">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('images/realimage/image3.jpeg')}}" alt="">
            <div class="content">
                <h3>Gift plants</h3>
                <a href="gift plants.html" class="btn">shop now</a>
            </div>
        </div>
    </div>
</section>

<!-- product section starts  -->

<section class="product" id="product">
    <h1 class="heading"> new products </h1>
    <div class="box-container">
        <div class="box" data-name="b-Product1">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/images/product1.jpeg')}}" alt="">
            <h3>Calathea Zebrina Plants</h3>
            <div class="location"> Location: <span>Indoor Plant</span>
            </div>
            <div class="price">Rs.24,687</div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-Product2">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/images/product2.png')}}" alt="">
            <h3>Cordyline plants</h3>

            <div class="location"> Location: <span>in/Outdoor Plant</span>
            </div>
            <div class="price">Rs.300</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-Product3">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/images/product3.PNG')}}" alt="">
            <h3> yellow Rose Pots</h3>

                <div class="location"> Location: <span>Indoor Pots</span>
                </div>
                <div class="price">Rs.3,999</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Product4">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/images/product4.jpg')}}" alt="">
            <h3>Oak Leaf Hydrangea Plants</h3>

            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.899</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Product5">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/images/product5.jpg')}}" alt="">
            <h3>Wandering jew</h3>

            <div class="location"> Location: <span>Indoor Plants </span>
            </div>
            <div class="price">Rs.1000</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-Product6">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/images/product6.jpg')}}" alt="">
            <h3>Amsterdam street flowers</h3>

            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.4,999</div>

            <a href="#" class="btn">add to cart</a>
        </div>
    </div>
    <div class="box-preview">

        <div class="preview" data-target="b-Product1">
           <i class="fas fa-times"></i>
           <img src="{{ asset('images/images/product1.jpeg')}}" alt="">
           <h3>Calathea Zebrina Plants</h3>
           <div class="location">Location:<span>indoor plants</span></div>
           <h2>Description:</h2>
           <p> Calathea zebrina earns it common name Zebra Plant due to the striking light green and velvety leaves with purple undersides and having dark green stripes running across them resembling a Zebra. Calathea Zebrina Care Summary: To keep your Calathea zebrina healthy grow in fertile, well-drained soil and keep the soil lightly moist. Fertilize monthly through the growing season, situate in bright, filtered light where temperatures range between 65°F to 75°F</p>
           <div class="price">Rs.24,678</div>
           <div class="buttons">
              <a href="#" class="cart">add to cart</a>
           </div>
        </div>

        <div class="preview" data-target="b-Product2">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/images/product2.PNG')}}" alt="" width="50%">
            <h3> Cordyline Plants </h3>
            <div class="location">Location:<span>indoor outdoor</span></div>
            <h2>Description:</h2>
            <p> Cordyline, or ti, is a common decorative plant that thrives indoors or outdoors depending on where it's grown. Cordyline typically has leathery, spikey leaves in a variety of colors, including green, red, yellow, white, purple, and purplish-red. Cordyline prefers sun over shade, but you will need to be specific with the amount of light your plant receives.plants prefer to be watered when the surface of the soil feels dry. Water until it starts to run out of the drainage holes. Do not put the drained water back into the plant.</p>
            <div class="price">Rs.300</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-Product3">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/images/product3.PNG')}}" alt="" width="50%">
            <h3>yellow Rose Pots </h3>
            <div class="location">Location:<span>indoor plants</span></div>
            <h2>Description:</h2>
            <p>Yellow roses are universally known as symbols of friendship, most people give them to each other for their birthdays. Sow the seeds about 4 inches apart in the soil. Remove old and spent leaves to prevent fungus infections. Water the yellow rose wild flowers well weekly until soil is completely moist</p>
            <div class="price">Rs.3,999</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-Product4">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/images/product4.jpg')}}" alt="" width="50%">
            <h3>Oak Leaf Hydrangea Plants</h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p> Named for the deeply Oak Leaf Hydrangea , this multi-stemmed shrub grows 4-8 feet tall and  wide with a compact rounded habit. Cone-shaped flower clusters appear from late spring to early summer, with single or multi-petaled white blooms that fade to shades of pink and mauve. Plants need regular water for healthy growth and optimal flowering. Keep soil evenly moist but not soggy. </p>
            <div class="price">Rs.899</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-Product5">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/images/product5.jpg')}}" alt="" width="50%">
            <h3>Wandering jew</h3>
            <div class="location">Location:<span>inerdoor Plants</span></div>
            <h2>Description:</h2>
            <p> Wandering jew is a stunning plant that have heart-shaped green leaves with purple stripes and a silvery sheen. The leaves may be solid or have different colors on them. Flowers have three petals and can be violet or white, or sometimes even pink. Wandering Jew is a houseplant that does best when it is provided with bright indirect light. Your wandering jew plant will bloom more abundantly if it is exposed to more light. For optimal growth, give your plants a water-soluble fertilizer at least twice monthly during the active growing season.</p>
            <div class="price">Rs.1000</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-Product6">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/images/product6.jpg')}}" alt="" width="50%">
            <h3>Amsterdam street Flower </h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p>Amsterdam street is perfect for planting next to porches, even as a potted plant on balconies. It has cup-shaped flowers with large, fragrant petals of silky texture. It can be grown organically since it is quite disease resistant and requires low maintenance. Size 70cm x 50cm. A magnificent variety, bearing large, many petalled rosette blooms.</p>
            <div class="price">Rs.4,999</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
     </div>
    </section>
    <!-- product section ends -->

<!-- .icons section starts  -->

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
            <p>You've 30 days to Return</p>
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
<!-- .icons section ends -->


<!-- slider section starts-->
<section>
    <div class="wrapper">
       <i id="left" class="fas fa-angle-left"></i>
       <ul class="carousel">
         <li class="card">
           <div class="img"><img src="{{ asset('images/images/img-1.jpeg')}}" alt="img" draggable="false"></div>
           <h2>Decore Garden</h2>
         </li>
         <li class="card">
           <div class="img"><img src="{{ asset('images/accesrimg/garden tool 1.jpg')}}" alt="img" draggable="false"></div>
           <h2>Accessories</h2>
         </li>
         <li class="card">
           <div class="img"><img src="{{ asset('images/images/img-3.jpg')}}" alt="img" draggable="false"></div>
           <h2>Room Decore</h2>
         </li>
         <li class="card">
           <div class="img"><img src="{{ asset('images/images/img-4.jpg')}}" alt="img" draggable="false"></div>
           <h2>Flowering</h2>
         </li>
         <li class="card">
           <div class="img"><img src="{{ asset('images/images/img-5.webp')}}" alt="img" draggable="false"></div>
           <h2>Landscaping</h2>
         </li>
         <li class="card">
           <div class="img"><img src="{{ asset('images/images/img-6.webp')}}" alt="img" draggable="false"></div>
           <h2>Pots</h2>
         </li>
       </ul>
       <i id="right" class="fas fa-angle-right"></i>
    </div>
   </section>
   <!-- slider section starts-->


   <!-- deal section starts  -->
<section class="deal" id="deal">
    <h1 class="heading"> deal of the day </h1>
    <div class="row">
        <div class="content">
            <h3 class="title">don't miss the deal</h3>
            <div class="count-down">
                <div class="box">
                    <h3 id="day">00</h3>
                    <span>day</span>
                </div>
                <div class="box">
                    <h3 id="hour">00</h3>
                    <span>hour</span>
                </div>
                <div class="box">
                    <h3 id="minute">00</h3>
                    <span>minute</span>
                </div>
                <div class="box">
                    <h3 id="second">00</h3>
                    <span>second</span>
                </div>
            </div>
            <a href="deals.html" class="btn">check out deal</a>
        </div>

        <div class="image">
            <img src="{{ asset('images/images/deal-img.jpg')}}" alt="">
        </div>
    </div>
</section>
<!-- deal section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    <h1 class="heading">get in touch</h1>
    <div class="row">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13456.931009163103!2d74.50824639557356!3d32.51993007368155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eebcbbe17ee7d%3A0x2c2d76ca919f7a04!2sHunterpura%2C%20Sialkot%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1685526347872!5m2!1sen!2sus"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- contact section ends -->

<!-- Footer section Start-->
<footer class="footer_wrapper mt-3 mt-md-0">
    <div class="container px-5 px-lg-0">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                <h5>GoGreenNursery</h5>
                <p class="mb-4 ps-0 company_details">Pakistan largest online
                    nursery, which has grown
                    immensely over a short
                    period of time....</p>
                <div class="contact-info">
                    <ul class="list-unstyled">
                        <li><h4><i class="fa fa-home me-3"></i> Hunter pura, Sialkot City, Pakistan</h4></li>
                        <li><h4><i class="fa fa-phone me-3"></i>+92493872806</h4></li>
                        <li><h4><i class="fa fa-envelope me-3"></i>gogreennurseery786@gmail.com</h4></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                <h5>Customer Support</h5>
                <ul class="link-widget p-0">
                    <li><a href="privacy policy.html">Privacy Policy</a></li>
                    <li><a href="return polices.html">Return polices</a></li>
                    <li><a href="office.html">Office product rent</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                <h5>Quick Links</h5>
                <ul class="link-widget p-0">
                    <li><a href="Plants.html">Plants</a></li>
                    <li><a href="accesssories.html">Accessories</a></li>
                    <li><a href="gardendecore.html">our services</a></li>
                    <li><a href="privacy policy.html">Our Polices</a></li>
                    <li><a href="deals.html">Deals</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">

                <h5>Stay Connected</h5>
                <ul class="social-network d-flex align-items-center p-0">
                    <li><a href="https://www.facebook.com/profile.php?id=100094253457577"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://mail.google.com/mail/u/0/?pli=1#inbox"><i class="fas fa-envelope"></i></a></li>
                    <li><a href="https://www.instagram.com/gogreennursery786/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright-section">
        <p>Copyright <a href="#">© gogreennurseery.</a> All Rights Reserved</p>
    </div>
</footer>
<!-- Footer Section Exit  -->
<a href="home.html" class="scroll-top fas fa-angle-up"></a>
@endsection
