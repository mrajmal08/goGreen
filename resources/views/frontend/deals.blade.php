@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/deals.css') }}">
@endpush
@section('content')
    <!-- header section ends -->
    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }})">
                <a>Happiness is having more and more Plants</a>
            </marquee>
        </div>
        </section>
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
                </div>

                <div class="image">
                    <img src="{{ asset('images/images/deal-img.Jpg') }}" alt="">
                </div>
            </div>
        </section>

        <section class="product" id="product">
            <h1 class="heading">Categories of Deals</h1>
            <div class="box-container">
                <div class="box" data-name="b-calathea">
                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="{{ asset('images/indrimg/calathea.Jpg') }}" alt="">
                    <h3>Calathea Zebrina Plants</h3>
                    <div class="location"> Location: <span>Indoor Plant</span>
                    </div>
                    <div class="price">Rs.15,000<span>24,678</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-succulents">
                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="{{ asset('images/outdrimg/succulents.Jpg') }}" alt="">
                    <h3>Succulents</h3>
                    <div class="location"> Location: <span>outdoor Plant</span>
                    </div>
                    <div class="price">Rs.2,500<span>3,900</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-wonbaket">
                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="{{ asset('images/oficimg/wonbaket.Jpg') }}" alt="">
                    <h3>Woven Basket Hanging</h3>
                    <div class="location"> Location: <span>Office Plants</span>
                    </div>
                    <div class="price">Rs.3,500<span>4,499</span></div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-Tomato">
                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="{{ asset('images/seedsimg/Tomato.jpeg') }}" alt="">
                    <h3>Tomato seeds</h3>
                    <div class="location"> Location: <span>Outdoor Plants </span>
                    </div>
                    <div class="price">Rs.2,500<span>3,480</span></div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-poppy seed">
                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="{{ asset('images/seedsimg/poppy seed.Jpg') }}" alt="">
                    <h3>Poppy Seed</h3>
                    <div class="location"> Location: <span>indoor Plants </span>
                    </div>
                    <div class="price">Rs.1,000<span>1,999</span></div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-soil and fertilizer">

                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="{{ asset('images/soilfertimg/soil and fertilizer.Jpg') }}" alt="">
                    <h3>Fertilizer</h3>
                    <div class="location">- <span> </span>
                    </div>
                    <div class="price">Rs.9,175<span>12,175</span></div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-Water Soluable Phosphorous">

                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="{{ asset('images/soilfertimg/Water Soluable Phosphorous.jpeg') }}" alt="">
                    <h3>Water Soluable Phosphorous Fertilizer</h3>

                    <div class="price">Rs.3,650<span>9,650</span></div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-garden hose">

                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="{{ asset('images/accesrimg/garden hose.Jpg') }}" alt="">
                    <h3>Garden Hose</h3>

                    <div class="location"> - <span></span>
                    </div>
                    <div class="price">Rs.2,800 <span>4,800</span></div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-wheelbarrow">

                    <span class="discount">30%</span>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="{{ asset('images/accesrimg/wheelbarrow.Jpg') }}" alt="">
                    <h3>Wheelbarrow</h3>

                    <div class="location"> - <span></span>
                    </div>
                    <div class="price">Rs.8,650<span>10,650</span></div>

                    <a href="#" class="btn">add to cart</a>
                </div>

            </div>


            <div class="box-preview">

                <div class="preview" data-target="b-calathea">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/indrimg/calathea.Jpg') }}" alt="">
                    <h3>Calathea Zebrina Plants</h3>
                    <div class="location">Location:<span>indoor Plants</span></div>
                    <h2>Description:</h2>
                    <p> Calathea zebrina, commonly known as zebra plant, is noted for its striking ornamental leaves which
                        feature zebra-like stripes as suggested by both the specific epithet and the common name. This is a
                        compact, rhizomatous, evergreen perennial that typically grows to 1-3' tall in containers. Calathea
                        must be kept in damp soil at all times, but definitely do not allow the plant to sit in water or in
                        very wet soil. Think 'little and often' as a watering policy. As with most variegated plants,
                        Calathea need plenty of diffused light.</p>
                    <div class="price">Rs.15,000</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-succulents">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/outdrimg/succulents.Jpg') }}" alt="" width="50%">
                    <h3>succulent plants</h3>
                    <div class="location">Location:<span>outdoor plants</span></div>
                    <h2>Description:</h2>
                    <p>succulent, any plant with thick fleshy tissues adapted to water storage. Some succulents (e.g.,
                        cacti) store water only in the stem and have no leaves or very small leaves, whereas others store
                        water mainly in the leaves. The most important rule for watering succulents is this: Only water when
                        the soil in the succulents' growing container is bone dry. We repeat, let the soil dry out
                        completely between waterings. If the soil isn't crumbly, dry dirt, don't water it. See, most
                        houseplants want their soil moist at all times.</p>
                    <div class="price">Rs.2,500</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-wonbaket">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/oficimg/wonbaket.Jpg') }}" alt="" width="50%">
                    <h3>Woven Basket Hanging</h3>
                    <div class="location">Location:<span>office Plants</span></div>
                    <h2>Description:</h2>
                    <p>Woven Basket Hanging Rosa alba plants are tall shrubs with arching stems and bluish-green leaves.
                        They bloom only in mid summer. They are extremely cold hardy and disease resistant, hence they are
                        used to create new varieties for subarctic climates like northern Scandinavia and Canada.
                        Established roses water every 2-3 days. Newly planted or roses planted in pots water every day.Like
                        most blooming plants, roses will need at least six to eight hours of direct sunlight daily in order
                        to thrive and produce bountiful blooms.</p>
                    <div class="price">Rs.3,500</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-Tomato">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/seedsimg/Tomato.jpeg') }}" alt="" width="50%">
                    <h3> Tomato seeds </h3>
                    <div class="location">Location:<span>outdoor Plants</span></div>
                    <h2>Description:</h2>
                    <p>Every tomato seed contains a tiny tomato plant that is alive but dormant. This means that it is not
                        growing, it is just waiting. When environmental conditions are right, the seed will germinate. This
                        is when the tiny plant sprouts from the seed and begins to grow. Water newly planted tomatoes well
                        to make sure soil is moist and ideal for growing. Early in the growing season, watering plants daily
                        in the morning. As temperatures increase, you might need to water tomato plants twice a day.</p>
                    <div class="price">Rs.2,500</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-poppy seed">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/seedsimg/poppy seed.Jpg') }}" alt="" width="50%">
                    <h3>Poppy Seed</h3>
                    <div class="location">Location:<span>indoor Plants</span></div>
                    <h2>Description:</h2>
                    <p>Poppies have lobed or dissected leaves and milky sap. The buds are often nodding and are borne on
                        solitary stalks. The flowers have four to six petals with numerous stamens surrounding the ovary.
                        The two sepals usually drop off as the petals unfold. Poppy plants may rot and die in soaked soils,
                        so only water when the soil feels dry to a finger's depth. Typically, you only need to water the
                        plants once every several days. Poppies need at least 6 hours of sun. Some varieties of poppies grow
                        very large, up to 5 feet tall.</p>
                    <div class="price">Rs.1,000</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-soil and fertilizer">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/soilfertimg/soil and fertilizer.Jpg') }}" alt="" width="50%">
                    <h3>Fertilizer</h3>
                    <h2>Description:</h2>
                    <p>Fertilizer, natural or artificial substance containing the chemical elements that improve growth and
                        productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical
                        elements taken from the soil by previous crops. A fertiliser is a natural or artificial substance
                        containing chemical elements (such as Nitrogen (N), Phosphorus (P) and Potassium (K)) that improve
                        growth and productiveness of plants. Some synonyms include the terms "enrichment" or "plant
                        nutrient.</p>
                    <div class="price">Rs.9,175</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-Water Soluable Phosphorous">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/soilfertimg/Water Soluable Phosphorous.jpeg') }}" alt=""
                        width="50%">
                    <h3>Water Soluable Phosphorous Fertilizer</h3>
                    <h2>Description:</h2>
                    <p>A water-soluble fertilizer with high phosphorus and Nitrogen content along with plant development
                        also cleans drip pipes. It is readily soluble in water and is best for drip irrigation and foliar
                        application of fertilizer. This combination ensures strong flower and fruit development. A
                        water-soluble fertilizer with high phosphorus and Nitrogen content along with plant development also
                        cleans drip pipes. It is readily soluble in water and is best for drip irrigation and foliar
                        application of fertilizer. This combination ensures strong flower and fruit development.</p>
                    <div class="price">Rs.3,650</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-garden hose">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/accesrimg/garden hose.Jpg') }}" alt="" width="50%">
                    <h3>Garden Hose</h3>
                    <h2>Description:</h2>
                    <p>A garden hose is used to water plants in a garden or lawn, or to convey water to a sprinkler for the
                        same purpose. A tough hose is used to water crops in agriculture for drip irrigation. A fire hose is
                        used by firefighters to convey water to the site of a fire. Industrial hoses for agricultural use
                        help transfer a wide range of materials, including water, harvest materials like grains and seeds,
                        manures, fertilizers, pesticides, herbicides, and more.</p>
                    <div class="price">Rs.2,800</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-wheelbarrow">
                    <i class="fas fa-times"></i>
                    <img src="{{ asset('images/accesrimg/wheelbarrow.Jpg') }}" alt="" width="50%">
                    <h3>Wheelbarrow</h3>
                    <h2>Description:</h2>
                    <p>A wheelbarrow is a garden tool that's used to transport piles of dirt, weeds, or any other small
                        load. If you have a big pile of sand to move, we recommend using a wheelbarrow. Most wheelbarrows
                        are little carts with two long handles and one wheel in front, designed so that one person can more
                        easily move a heavy load on their own. A wheelbarrow is a garden tool that's used to transport piles
                        of dirt, weeds, or any other small load. If you have a big pile of sand to move, we recommend using
                        a wheelbarrow.</p>
                    <div class="price">Rs.8,650</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- .icons section starts  -->

        <section class="icons-container">

            <div class="icon">
                <img src="{{ asset('images/images/icon1.png') }}" alt="">
                <div class="content">
                    <h3>free shipping</h3>
                    <p>Free shipping on order</p>
                </div>
            </div>
            <div class="icon">
                <img src="{{ asset('images/images/icon2.png') }}" alt="">
                <div class="content">
                    <h3>100% Money Back</h3>
                    <p>You've 30 days to Return</p>
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

        <!-- .icons section ends -->
        @include('layouts.welcome.footer')
        @push('frontJs')
            <script src="{{ asset('js/homescript.js') }}" defer></script>
            <script src="{{ asset('js/script.js') }}" defer></script>
        @endpush
    @endsection
