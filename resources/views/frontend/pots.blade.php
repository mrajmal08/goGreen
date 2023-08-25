@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/pots.css') }}">
@endpush
@section('content')
    <div class="sidebar">
        <h1>Categories</h1>
        <ol>
            <li><a href="#"></a></li>
            <ul>
                <li><a href="Ceramic Round Planter.html">Ceramic Round Planter</a></li>
                <li><a href="Caribbean Round Planter.html">Caribbean Round Planter</a></li>
                <li><a href="Concrete Bowl Planter.html">Concrete Bowl Planter</a></li>
                <li><a href="Plastic Plant Pot.html">Plastic Plant Pot</a></li>
                <li><a href="Cylindric Plant Pot.html">Cylindric Plant Pot</a></li>
                <li><a href="Antique Stone Finishs.html">Antique Stone Finishs</a></li>
                <li><a href="Balconera Cottage.html">Balconera Cottage</a></li>
                <li><a href="Stone Finish Planter.html">Stone Finish Planter</a></li>
                <li><a href="Fluted Ceramic Round Planter.html">Fluted Ceramic Round Planter</a></li>
                <li><a href="Bamboo Plant Stand Shelf.html"> Bamboo Plant Stand Shelf </a></li>
            </ul>
        </ol>
    </div>

    <!-- product section starts  -->
    <section class="product" id="product">
        <h1 class="heading">Categories of Pots</h1>
        <div class="box-container">
            <div class="box" data-name="b-antique stone finish planter">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <img src="{{ asset('images/pots/antique stone finish planter.png')}}" alt="">
                <h3>Antique Stone Finish Planter</h3>
                <div class="price">Rs.4990 </div>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="box" data-name="b-bamboo plant stand shelf">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/bamboo plant stand shelf .png" alt="">
                <h3>Bamboo Plant Stand Shelf</h3>
                <div class="location"> Location: <span>indoor Plant</span>
                </div>
                <div class="price">Rs.2000</div>
                <a href="#" class="btn">add to cart</a>

            </div>

            <div class="box" data-name="b-metal elevated planter">

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/metal elevated planter.png" alt="">
                <h3>Metal Elevated Planter Box</h3>

                <div class="location"> Location: <span>Indoor Ports</span>
                </div>
                <div class="price">Rs.1000</div>

                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-name="b-half moon shaped ladder plant shelf">

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/half moon shaped ladder plant shelf.png" alt="">
                <h3>Half Moon Shaped Ladder Plant Shelf</h3>
                <div class="location"> Location: <span>Outdoor Plants </span>
                </div>
                <div class="price">Rs.3500 </div>

                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-name="b-hanging planter set">

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/hanging planter set.png" alt="">
                <h3>Hanging Planter Set</h3>
                <div class="location"> Location: <span>Indoor Plants </span>
                </div>
                <div class="price">Rs.15000</div>

                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-name="b-pots">

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/pots.jpg" alt="">
                <h3>Simple Pots</h3>
                <div class="location"> Location: <span>Outdoor Plants </span>
                </div>
                <div class="price">Rs.4500 </div>

                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="box" data-name="b-triangle plant pot">

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/triangle plant pot.png" alt="">
                <h3>Triangle Plant Pot </h3>

                <div class="location"> Location: <span>Indoor Plants </span>
                </div>
                <div class="price">Rs.4500</div>

                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box" data-name="b-round trivet iron plant stand">

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/round trivet iron plant stand2.png" alt="">
                <h3>Round Plant Stand</h3>

                <div class="location"> Location: <span>Office pot </span>
                </div>
                <div class="price">Rs.4500</div>

                <a href="#" class="btn">add to cart</a>
            </div>


            <div class="box" data-name="b-patio planter">

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>

                </div>
                <img src="pots/patio planter.png" alt="">
                <h3>patio planter</h3>

                <div class="location"> Location: <span>in/outdoor Pots </span>
                </div>
                <div class="price">Rs.1200</div>

                <a href="#" class="btn">add to cart</a>
            </div>

        </div>




        <div class="box-preview">


            <div class="preview" data-target="b-antique stone finish planter">
                <i class="fas fa-times"></i>
                <img src="pots/antique stone finish planter.png" alt="" width="50%">
                <h3>Antique Stone Finish Planter</h3>
                <h2>Description:</h2>
                <p>An antique stone finish planter is a decorative container designed to resemble aged or weathered stone.
                    It is crafted using various materials, such as fiberglass, resin, or concrete, and is designed to mimic
                    the appearance of antique stone planters, which typically have a rustic, weathered, or aged look.
                    Depending on the planter's dimensions, you could go for small flowering plants, succulents, herbs, or
                    even small trees.</p>
                <div class="price">Rs.499</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-bamboo plant stand shelf">
                <i class="fas fa-times"></i>
                <img src="pots/bamboo plant stand shelf .png" alt="" width="50%">
                <h3>Bamboo Plant Stand Shelf</h3>
                <h2>Description:</h2>
                <p>A bamboo plant stand shelf is a versatile and eco-friendly piece of furniture designed to display and
                    organize plants in a stylish and functional way. It is typically made from bamboo, a fast-growing and
                    sustainable material known for its strength and durability.The plant stand shelf consists of multiple
                    tiers or shelves, usually arranged vertically, to create a layered display for your plants. Bamboo plant
                    stand shelves come in different designs, sizes, and configurations, allowing you to create an attractive
                    plant display both indoors and outdoors.</p>
                <div class="price">Rs.1499</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-metal elevated planter">
                <i class="fas fa-times"></i>
                <img src="pots/metal elevated planter.png" alt="" width="50%">
                <h3>Metal Elevated Planter</h3>
                <h2>Description:</h2>
                <p>A metal elevated planter box is a raised gardening container made primarily from metal materials. It is
                    designed to provide a sturdy and durable structure for growing plants in an elevated position, making it
                    easier to access and maintain your garden.Metal elevated planter boxes can be crafted from various types
                    of metal, including steel, aluminum, wrought iron, or galvanized metal.</p>
                <div class="price">Rs.1499</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-half moon shaped ladder plant shelf">
                <i class="fas fa-times"></i>
                <img src="pots/half moon shaped ladder plant shelf.png" alt="" width="50%">
                <h3>Half Moon Shaped Ladder Plant Shelf</h3>
                <h2>Description:</h2>
                <p>A half-moon shaped ladder plant shelf is a decorative and functional structure designed to showcase
                    plants in a curved or semi-circular arrangement. It resembles a ladder with multiple shelves or tiers,
                    but with a distinctive half-moon shape.Typically constructed from materials like wood or metal, the
                    half-moon shaped ladder plant shelf features a series of shelves arranged in a curved pattern.</p>
                <div class="price">Rs.1879</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>



            <div class="preview" data-target="b-hanging planter set">
                <i class="fas fa-times"></i>
                <img src="pots/hanging planter set.png" alt="" width="50%">
                <h3>Hanging Planter Set</h3>
                <h2>Description:</h2>
                <p>A hanging planter set is a collection of plant containers specifically designed to be suspended or hung
                    from various surfaces, such as hooks, brackets, or overhead structures. It provides an attractive and
                    space-saving solution for displaying plants, adding a touch of greenery and visual interest to both
                    indoor and outdoor spaces. Different hanging planters have varying sizes and shapes. Opt for sizes that
                    accommodate the types of plants you intend to display. Some planters are better suited for smaller
                    plants, while others can hold larger specimens.</p>
                <div class="price">Rs.1879</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-pots">
                <i class="fas fa-times"></i>
                <img src="pots/pots.jpg" alt="" width="50%">
                <h3>Simple Pots</h3>
                <h2>Description:</h2>
                <p>Pots are containers specifically designed for planting and cultivating various types of plants, flowers,
                    herbs, or vegetables. They come in a wide range of shapes, sizes, materials, and designs, offering
                    versatility and functionality for both indoor and outdoor gardening. Choose a pot size that allows
                    sufficient space for the plant's root system to grow. The shape of the pot should complement the plant's
                    growth habits and the overall design of your space. </p>
                <div class="price">Rs.899</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>



            <div class="preview" data-target="b-triangle plant pot">
                <i class="fas fa-times"></i>
                <img src="pots/triangle plant pot.png" alt="" width="50%">
                <h3>Triangle Plant Pot</h3>
                <h2>Description:</h2>
                <p>A triangle plant pot is a type of container specifically designed in the shape of a triangle to hold and
                    display plants. It offers a unique and modern aesthetic that adds visual interest to your indoor or
                    outdoor space. Consider the size of the triangle plant pot in relation to the plant you intend to place
                    inside. Make sure the pot is large enough to accommodate the plant's root system. Triangle plant pots
                    can be made from a variety of materials, including ceramic, plastic, metal, concrete, and more. Choose a
                    material that suits your style and matches the overall decor of your space.</p>
                <div class="price">Rs.1299</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-round trivet iron plant stand">
                <i class="fas fa-times"></i>
                <img src="pots/round trivet iron plant stand.png" alt="" width="40%">
                <h3>Round Trivet Iron Plant Stand</h3>
                <h2>Description:</h2>
                <p>A round plant stand is a decorative and functional furniture piece designed to display and elevate
                    plants. It typically features a circular platform or multiple circular platforms at different heights to
                    accommodate multiple plants. The round shape adds a touch of elegance and softness to the overall
                    design. Trivet plant stands are often made of iron or metal, which provides durability and stability.
                    The metal construction can withstand the weight of various plant pots.</p>
                <div class="price">Rs.2299</div>
                <div class="buttons">
                    <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-patio planter">
                <i class="fas fa-times"></i>
                <img src="pots/patio planter.png" alt="" width="50%">
                <h3>patio planter</h3>
                <h2>Description:</h2>
                <p>A patio planter is a gardening container designed for use on patios, balconies, or other small outdoor
                    spaces. It serves as a versatile and attractive solution for growing plants, flowers, herbs, and even
                    some vegetables in a limited area. Select a planter size that fits well in your available space and can
                    accommodate the root system of the plants you intend to grow. Make sure the planter is not too large or
                    too small for the area. </p>
                <div class="price">Rs.1200</div>
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
