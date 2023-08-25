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
                       <li>Once you've found the product, click on it to view the product details page. Select the desired quantity, size, color, or any other relevant options, and click on the "Add to Cart" or "Buy Now" button. This will add the item to your virtual shopping cart.</li>
                       <li>Usually, there is a shopping cart icon or a specific section on the website where you can review the items you have added. Click on the cart icon or navigate to the cart page to review the items, quantities, and prices. You can make any necessary changes here, such as adjusting quantities or removing items.</li>
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
                    <li>Choose the shipping method that suits your needs. Options may include standard shipping, express delivery, or in-store pickup if available.</li>
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
                    <li>You will pay for your order in cash on deliver </li>
                    <li>payment options or methods available. Select "Cash on Delivery" or any similar option that indicates payment upon delivery.</li>
                    <li>Enter your shipping address and other necessary details for delivery. Make sure to provide accurate information to ensure a smooth delivery process.</li>
                    <li>Double-check the items, quantities, and shipping information to ensure everything is correct before proceeding.</li>
                    <li>Confirm your order by clicking the "Place Order" or similar button. This action will initiate the order placement process.</li>
                    <li>When the delivery person arrives, they will hand over your order. Check the items to ensure they are correct and in good condition. Then, provide the cash payment to the delivery person. They will typically provide you with a receipt or confirmation of payment</li>
                </ul>
              </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    How much is shipping?
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
                    <li>We offer free delivery in special Occasion.</li>
                    <li>We charge a flat Rs. 250 on any order that is to be delivered in sialkot</li>
                    <li>Delivery is arranged according to the chargers area</li>
                    <li>Please see our detailed delivery charges policy.</li>

                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                  When will I receive my parcel?
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
                    <li>Our standard delivery time is 7-8 working days.</li>
                    <li>Please see our detailed delivery time policy.</li>
                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    In which cities can you ship your plant?
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
                    <li>We offer delivery in most of the major cities area of sialkot.
                    <li>Please check our detailed delivery service area.</li>
                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    My plant or pot arrived damaged,what do i do?
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
                    <li>You should open and check your parcel at the time of delivery, there will be no parcel exchange later</li>
                    <li>We're so sorry your plant or pot was damaged during shipping. We guarantee the safe and healthy arrival of all our plants and will happily send you a replacement free of charge.</li>
                    <li>Please have your order number and a photo of your damaged plant ready, then let us know so we can ship a replacement for you as soon as possible.</li>
                </ul>
            </div>
        </div>
        <div class="question-answer">
            <div class="question">
                <h3 class="title">
                    How Do I Track My Order??
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
                    <li>Enter the required information to track your order. This usually includes the order number and sometimes additional details like your email address or the shipping zip code.</li>
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
                    <li>You should open and check your parcel at the time of delivery, there will be no parcel exchange later</li>
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
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
