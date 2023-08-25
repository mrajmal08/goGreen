@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/typesofpots.css') }}">
@endpush
@section('content')


<div class="sidebar">
    <h1>Types of Pots</h1>
    <ol>
        <ul>
           <li><a href="Decorative Round Planter.html">Decorative Round Planter</a></li>
           <li><a href="Gallen Grow Bags.html">Gallen Grow Bags</a></li>
           <li><a href="Hammered Copper Plated Tub.html">Hammered Copper Plated Tub </a></li>
           <li><a href="Concrete Bowl Planter.html">Concrete Bowl Planter</a></li>
           <li><a href="Triangle Plant Pot.html">Triangle  Plant Pot</a></li>
           <li><a href="Metal Cylinder Planter Pots.html">Metal Cylinder Planter Pots</a></li>
           <li><a href="Hanging Planter Set.html">Hanging Planter Set</a></li>
           <li><a href="Tall Square Planter.html">Tall Square Planter</a></li>
           <li><a href="Metal Trough Planter.html">Metal Trough Planter</a></li>
           <li><a href="Planting Bags.html">Planting Bags</a></li>
        </ul>
    </ol>
</div>


<!-- product section starts  -->

<section class="product" id="product">
    <h1 class="heading">All Types of Pots</h1>
    <div class="box-container">
        <div class="box" data-name="b-tall planter">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/pots/tall planter .png')}}" alt="">
            <h3>Tall Planter</h3>
            <div class="price">Rs.1500 </div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-suspending planter pot">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/pots/suspending planter pot.png')}}" alt="">
            <h3>Suspending Planter </h3>
            <div class="price">Rs.2000 </div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-metal cylinder planter pots">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="pots/metal cylinder planter pots.png" alt="">
            <h3>Metal Cylinder Planter </h3>

                <div class="price">Rs.1000 </div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-gallen grow bags">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/gallen grow bags.png" alt="">
            <h3>Gallen Grow</h3>

            <div class="price">Rs.3500</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-wicker round planter">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/wicker round planter.png" alt="">
            <h3>Wicker Round Planter</h3>

            <div class="price">Rs.15000 </div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box"data-name="b-hanging planter set">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/hanging planter set.png" alt="">
            <h3>Hanging Planter Set</h3>

            <div class="price">Rs.4500 </div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-fluted ceramic round planter">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/fluted ceramic round planter.png" alt="">
            <h3>Fluted  Round Planter </h3>


            <div class="price">Rs.4500 </div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box"data-name="b-antique stone finish planter">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/antique stone finish planter.png" alt="">
            <h3>Antique Stone Finish  Planter </h3>


            <div class="price">Rs.4500</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-raised bed flower planter">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="pots/raised bed flower planter.png" alt="">
            <h3>Raised Bed  Planter</h3>

            <div class="price">Rs.3500</div>

            <a href="#" class="btn">add to cart</a>
        </div>
    </div>






    <div class="box-preview">


        <div class="preview" data-target="b-tall planter">
            <i class="fas fa-times"></i>
            <img src="pots/tall planter .png" alt="" width="50%">
            <h3>Tall Planter</h3>
            <h2>Description:</h2>
            <p>A tall planter, also known as a tall plant pot or tall plant container, is a type of gardening container designed specifically to hold and display plants, flowers, or small trees at an elevated height. Tall planters are characterized by their height. Consider the available space and the desired visual impact when selecting a tall planter. Ensure the height complements the surrounding environment and doesn't obstruct views or pathways.</p>
            <div class="price">Rs.999</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>



        <div class="preview" data-target="b-suspending planter pot">
            <i class="fas fa-times"></i>
            <img src="pots/suspending planter pot.png" alt="" width="50%">
            <h3>Suspending Planter Pot</h3>
            <h2>Description:</h2>
            <p>A Suspending Planter, also known as a hanging planter or suspended planter, is a type of gardening container designed to hold and display plants while being suspended from above. These planters are ideal for creating a vertical garden and adding greenery to spaces with limited floor or ground area. Hanging planters come in various designs and styles, ranging from classic to modern, bohemian to minimalist. Choose a design that complements your decor and personal taste.</p>
            <div class="price">Rs.1499</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>


        <div class="preview" data-target="b-metal cylinder planter pots">
            <i class="fas fa-times"></i>
            <img src="pots/metal cylinder planter pots.png" alt="" width="50%">
            <h3>Metal Cylinder Planter Pots</h3>
            <h2>Description:</h2>
            <p>A Metal Cylinder Planter is a cylindrical-shaped gardening container made primarily from metal materials. This type of planter is designed to hold and display various plants, flowers, and greenery while providing a sleek and contemporary look to both indoor and outdoor spaces. Metal cylinder planters are typically made from materials such as stainless steel, aluminum, galvanized steel, or other metal alloys. Choose a material that suits your preferences and the overall design of your space.</p>
            <div class="price">Rs.1599</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>


        <div class="preview" data-target="b-gallen grow bags">
            <i class="fas fa-times"></i>
            <img src="pots/gallen grow bags.png" alt="" width="50%">
            <h3>Gallen Grow Bags</h3>
            <h2>Description:</h2>
            <p>Gallen grow planters, also known as fabric pots or grow bags, are gardening containers made from a breathable and flexible fabric material. These bags are designed for planting and growing various types of plants, including vegetables, herbs, flowers, and more. Gallon grow bags are a popular choice among gardeners and urban growers due to their advantages over traditional plastic pots. The fabric's breathability helps regulate soil temperature by allowing excess heat to dissipate. This can be particularly beneficial during hot summer months.</p>
            <div class="price">Rs.1399</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-wicker round planter">
            <i class="fas fa-times"></i>
            <img src="pots/wicker round planter.png" alt="" width="50%">
            <h3>Wicker Round Planter</h3>
            <h2>Description:</h2>
            <p>A Wicker Round Planter is a type of gardening container designed to hold and display plants while adding a natural and rustic touch to indoor and outdoor spaces. These planters are made from wicker, a material traditionally derived from natural plant fibers like rattan or willow, woven into a sturdy and decorative design. Wicker round planters can be made from natural materials like rattan, bamboo, or other plant fibers, as well as synthetic wicker made from plastic or resin. The choice of material affects durability and weather resistance.</p>
            <div class="price">Rs.1699</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-hanging planter set">
            <i class="fas fa-times"></i>
            <img src="pots/hanging planter set.png" alt="" width="50%">
            <h3>Hanging Planter Set</h3>
            <h2>Description:</h2>
            <p>A Hanging Planter Set refers to a collection of multiple hanging planters designed to hold and display plants while suspended from above. These sets often come with two or more individual planters that can be hung together in a group or individually in different locations. These sets typically include multiple planters that can be hung at different heights, creating an appealing and dynamic arrangement.</p>
            <div class="price">Rs.1299</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-fluted ceramic round planter">
            <i class="fas fa-times"></i>
            <img src="pots/fluted ceramic round planter.png" alt="" width="50%">
            <h3>Fluted Ceramic Round Planter</h3>
            <h2>Description:</h2>
            <p>A Fluted Round Planter is a type of gardening container that features a distinctive fluted or ribbed design on its surface. This planter is round in shape and typically made from various materials like  ceramic, stone, or even lightweight resin or plastic. These planters offer a combination of elegant aesthetics and functional design, making them popular choices for both indoor and outdoor plant displays.</p>
            <div class="price">Rs.1546</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>


        <div class="preview" data-target="b-antique stone finish planter">
            <i class="fas fa-times"></i>
            <img src="pots/antique stone finish planter.png" alt="" width="50%">
            <h3>Antique Stone Finish Planter</h3>
            <h2>Description:</h2>
            <p>An Antique Stone Finish Planter is a type of gardening container designed to resemble the appearance of aged or weathered stone, providing a vintage and rustic charm to outdoor and indoor spaces. Antique stone finish planters are typically made from lightweight and durable materials like resin, fiberglass, or concrete. These materials allow for intricate detailing while keeping the planter relatively easy to move.</p>
            <div class="price">Rs.1546</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-raised bed flower planter">
            <i class="fas fa-times"></i>
            <img src="pots/raised bed flower planter.png" alt="" width="50%">
            <h3>Raised Bed Flower Planter</h3>
            <h2>Description:</h2>
            <p>A raised bed planter, also known simply as a raised bed, is a gardening structure designed to create a contained and elevated planting area above the ground. Raised beds are commonly used in gardening and horticulture for various purposes, including growing vegetables, herbs, flowers, and other plants. Raised bed flower planters can be designed in various shapes, including rectangular, square, circular, and even custom shapes to fit unique spaces. Consider the overall design of your garden and how the raised bed will integrate with the rest of the landscape.</p>
            <div class="price">Rs.3500</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

    </div>
</section>

@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
