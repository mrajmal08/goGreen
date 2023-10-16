@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/faq.css') }}">
@endpush
@section('content')


<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/faq.jpg') }});">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Frequentlt asked question start-->


<section class="category" id="category">
    <h1>Frequently Ask Questions</h1>
    <main class="accordion">
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    How do i order on website?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <p>To place an order on a website, you can follow these general steps:
                    <ul>
                       <li>Use the website's search function or browse through the categories to find the product you want to order.</li>
                       <li>Once you've found the product, click on it to view the product details page and click on the "Add to Cart" or "Buy Now" button. This will add the item to your shopping cart.</li>
                       <li>Usually, there is a shopping cart icon or a specific section on the website where you can view the items you have added. Click on the cart icon or navigate to the cart page to review the items, quantities, and prices. You can make any necessary changes here, such as adjusting quantities or removing items.</li>
                    </ul>
                </p>
              </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    What information is necessary for shipping?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>you will need to enter your shipping address, contact details, and any other required information for delivery. Fill in the required fields accurately.</li>
                </ul>
              </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    How to payment for an order?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>You will pay for your order in cash on delivery. </li>
                    <li>Payment options or methods available. Select "Cash on Delivery" or any similar option that indicates payment upon delivery.</li>
                    <li>Enter your shipping address and other necessary details for delivery. Make sure to provide accurate information to ensure a smooth delivery process.</li>
                    <li>Check the items, quantities, to ensure everything is correct.</li>
                    <li>Confirm your order by clicking the "CONFRM ORDER" or similar button. This action will initiate the order placement process.</li>
                    <li>When the delivery person arrives, they will hand over your order. Check the items to ensure they are correct and in good condition. Then, provide the payment to the delivery person. They will typically provide you with a receipt or confirmation of payment.</li>
                </ul>
              </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                 What is the cost of shipping?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>we offer free delivery  at Rs.5000 shopping.</li>
                    <li>Our delivery fee is Rs. 250 per order.</li>
                    <li>Delivey charges will be as per your region.</li>

                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                  When I will  receive my parcel?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>Our standard delivery time is 7-8 days.</li>
                    <li>Please see our detailed delivery time policy.</li>
                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                Which cities are currently covered by your shipping services?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>We offer delivery in some specific cities.<li>
                    <li>Please check our detailed delivery area.</li>
                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                If your plant or pot has arrived damaged, what should you do?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>You should open and check your parcel at the time of delivery,there will be no possibility of exchanging parcels at a later time.</li>
                    <li>If you receive a damaged parcel, please inform the delivery person and we will arrange for a replacement to be delivered within a few days.</li>
                </ul>
            </div>
        </div>
       
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    How Can I Return a Product?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>You must inspect and accept the parcel upon delivery as no exchanges will be allowed later.</li>
                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    What should I do if there is an issue with my plant?
                </h3>
                <button class="question-btn">
                    <span class="up-icon">
                        <i class="fas fa-chevron-up"></i>
                    </span>
                    <span class="down-icon">
                       <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
            </div>
            <div class="answer">
                <ul>
                    <li>Don't worry, we're here to help you with all your plant questions or concerns! You can get in touch with our experts at go green nursery for help taking care of your plant friends.</li>
                </ul>
            </div>
        </div>
    </main>
</section>


<!--Frequentlt asked question end-->

@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/faqscript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
