@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/plantsbyseason.css') }}">
@endpush

@section('content')


    <!-- header section ends -->

    <!-- home section starts  -->

    <div class="homesection" id="homediv">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/images/seasonbanr.jpg') }});">
                    </div>
                </div>
            </div>
        </div>
        </section>




        <div class="sidebar">
            <h1>Plants By Season</h1>
            <ol>
                <li><a href="#">Summer Plants</a></li>
                <ul>
                    <li><a href="Zinnia flower.html">Zinnia</a></li>
                    <li><a href="cone flower.html">Cone Flower</a></li>
                    <li><a href="marigold flower.html">Marigolds</a></li>
                    <li><a href="morning seeds.html">Morning Glories</a></li>
                    <li><a href="Black Eyed Susan Vine plant.html">Black-eyed Susan Vine</a></li>
                </ul>
                <li><a href="#">Winter Plants</a></li>
                <ul>
                    <li><a href="pansy flower.html">Pansy</a></li>
                    <li><a href="Cyclamen flower.html">Cyclamen </a></li>
                    <li><a href="Camellia flower.html">Camellia</a></li>
                    <li><a href="lavender plant.html">Lavender Camellia</a></li>
                    <li><a href="sweet alyssum plant.html">Sweet Alyssum</a></li>
                </ul>
                <li><a href="#">Spring Plants</a></li>
                <ul>
                    <li><a href="Daffodily flower.html">Daffodily</a></li>
                    <li><a href="Red Lily flower.html">Red Lily</a></li>
                    <li><a href="White Lily flower.html">White Lily</a></li>
                    <li><a href="columbine seeds.html">Columbine</a></li>
                    <li><a href="Ornamental Pepper plant.html">Ornamental Pepper</a></li>
                </ul>
            </ol>
        </div>




        <!-- product section starts  -->

        <section class="product" id="product">
            <h1 class="heading">All Season plant category</h1>
            <div class="box-container">
                <div class="box" data-name="b-zinnia">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="{{ asset('images/flowrimg/zinnia.jpeg')}}" alt="">
                    <h3>zinnia</h3>
                    <div class="location"> Location: <span>Indoor Plants</span>
                    </div>
                    <div class="price">Rs.125</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-cone flower">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="flowrimg/cone flower.jpeg" alt="">
                    <h3>cone flower</h3>
                    <div class="location"> Location: <span>indoor Plant</span>
                    </div>
                    <div class="price">Rs.275</div>
                    <a href="#" class="btn">add to cart</a>

                </div>

                <div class="box" data-name="b-california">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="flowrimg/california.jpeg" alt="">
                    <h3>california</h3>

                    <div class="location"> Location: <span>Indoor Plants</span>
                    </div>
                    <div class="price">Rs.199</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-pansy">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="flowrimg/pansy.jpeg" alt="">
                    <h3>Pansy</h3>
                    <div class="location"> Location: <span>Outdoor Plants </span>
                    </div>
                    <div class="price">Rs.100</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-cyclamen">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="flowrimg/cyclamen.jpeg" alt="">
                    <h3>Cyclamen</h3>
                    <div class="location"> Location: <span>indoor Plants </span>
                    </div>
                    <div class="price">Rs.269</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-camellia">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="flowrimg/camellia.jpeg" alt="">
                    <h3>camellia</h3>
                    <div class="location"> Location: <span>Outdoor Plants </span>
                    </div>
                    <div class="price">Rs.745</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-flowr1">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="flowrimg/flowr1.jpeg" alt="">
                    <h3>purple</h3>

                    <div class="location"> Location: <span>Outdoor plants</span>
                    </div>
                    <div class="price">Rs.1500</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-palm tree">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="outdrimg/palm tree.jpeg" alt="">
                    <h3>Palm Tree</h3>

                    <div class="location"> Location: <span>Outdoor plants</span>
                    </div>
                    <div class="price">Rs.25,000</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-outdr1">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="outdrimg/outdr1.jpeg" alt="">
                    <h3>Woven Hanging</h3>

                    <div class="location"> Location: <span>Outdoor Plants</span>
                    </div>
                    <div class="price">Rs.2,232</div>

                    <a href="#" class="btn">add to cart</a>
                </div>


                <div class="box-preview">

                    <div class="preview" data-target="b-zinnia">
                        <i class="fas fa-times"></i>
                        <img src="flowrimg/zinnia.jpeg" alt="">
                        <h3>zinnia Flower</h3>
                        <div class="location">Location:<span>indoor plants</span></div>
                        <h2>Description:</h2>
                        <p> Zinnias are annual flowers that come in a wide range of varieties, offering a plethora of
                            colors, shapes, and sizes. They are prized for their long-lasting, showy blooms that add a
                            burst of color to gardens, landscapes, and floral arrangements.Zinnias prefer well-draining
                            soil that is loose and fertile. Water the soil around the base of the plant rather than
                            overhead watering to minimize the risk of fungal diseases.Zinnias are generally
                            heat-tolerant flowers and can withstand hot summer temperatures.</p>
                        <div class="price">Rs.125</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-cone flower">
                        <i class="fas fa-times"></i>
                        <img src="flowrimg/cone flower.jpeg" alt="" width="50%">
                        <h3>Calathea Zebrina Plants</h3>
                        <div class="location">Location:<span>indoor plants</span></div>
                        <h2>Description:</h2>
                        <p> Coneflower plants may actually display pink flowers, when the cultivar Echinacea purpurea
                            Pink Double Delight is planted Coneflower care may include limited fertilization, but this
                            is often not needed. If flowers are small or poorly developed, try working in a small amount
                            of well composted material in the soil around the plants. Water coneflowers deeply once a
                            week during the growing season, especially in dry weather conditions. This allows the water
                            to penetrate the soil and reach the plant's roots.</p>
                        <div class="price">Rs.275</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-california">
                        <i class="fas fa-times"></i>
                        <img src="flowrimg/california.jpeg" alt="" width="50%">
                        <h3>california Plants</h3>
                        <div class="location">Location:<span>outdoor plants</span></div>
                        <h2>Description:</h2>
                        <p>California is home to several vibrant cities,Known for its stunning natural beauty, iconic
                            landmarks, cultural diversity.Flowers in California generally thrive in well-draining soil.
                            Amend the soil with organic matter like compost to improve its fertility and drainage.
                            Watering needs can vary depending on the flower species and the specific microclimate of
                            your location within California. Consider the natural precipitation patterns in your region
                            and adjust watering accordingly.Most flowers require ample sunlight to thrive.</p>
                        <div class="price">Rs.199</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-pansy">
                        <i class="fas fa-times"></i>
                        <img src="flowrimg/pansy.jpeg" alt="" width="50%">
                        <h3>pansy Plants</h3>
                        <div class="location">Location:<span>indoor plants</span></div>
                        <h2>Description:</h2>
                        <p>Pansies are known for their cheerful and playful nature, bringing a touch of joy to any
                            garden or floral arrangement. They are versatile flowers that can be used in various ways,
                            including bedding plants, container gardens, borders, and hanging baskets. They require at
                            least 4 to 6 hours of direct sunlight per day to grow and bloom optimally.Water the soil
                            around the base of the plants, rather than overhead watering, to minimize the risk of fungal
                            diseases and ensure the water reaches the roots effectively.</p>
                        <div class="price">Rs.100</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-cyclamen">
                        <i class="fas fa-times"></i>
                        <img src="flowrimg/cyclamen.jpeg" alt="" width="50%">
                        <h3>cyclamen Plants</h3>
                        <div class="location">Location:<span>indoor plants</span></div>
                        <h2>Description:</h2>
                        <p>Cyclamen flowers are known for their unique beauty, delicate appearance, and captivating
                            colors. Here's a description of a cyclamen flower. Cyclamen plants prefer evenly moist soil,
                            but they are sensitive to overwatering. Avoid waterlogged conditions, as it can lead to root
                            rot.Well-Draining: Cyclamen thrives in well-draining soil. Use a loose, porous potting mix
                            specifically formulated for indoor plants or mix equal parts peat moss, perlite, and
                            compost. Direct sunlight can scorch the leaves and cause the flowers to wilt prematurely.
                        </p>
                        <div class="price">Rs.269</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-camellia">
                        <i class="fas fa-times"></i>
                        <img src="flowrimg/camellia.jpeg" alt="" width="50%">
                        <h3>camellia Plants</h3>
                        <div class="location">Location:<span>outdoor plants</span></div>
                        <h2>Description:</h2>
                        <p>Camellias are flowering plants that belong to the genus Camellia, which includes various
                            species and cultivars. They are highly valued for their showy blooms, which come in a wide
                            range of colors, sizes, and forms. Camellias prefer well-draining soil that retains some
                            moisture but does not become waterlogged.Camellias prefer consistent soil moisture. Water
                            the plants regularly, especially during dry periods, to keep the soil evenly moist. Avoid
                            overwatering, as it can lead to root rot.In regions with intense heat or hot summers.</p>
                        <div class="price">Rs.745</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-flowr1">
                        <i class="fas fa-times"></i>
                        <img src="flowrimg/flowr1.jpeg" alt="" width="50%">
                        <h3>purple Plants</h3>
                        <div class="location">Location:<span>outdoor plants</span></div>
                        <h2>Description:</h2>
                        <p>Purple is a common choice of flower due to its variety of hues and calming effect on a space.
                            It can range from light lavenders and lilacs to more vibrant violets and magentas. Add
                            lavender to your bathroom decor to create a soothing retreat or include foxgloves in a
                            bouquet to create a dynamic look. Even though Purple Hearts can survive for long periods
                            without being watered, keeping a regular watering schedule is still the best idea. Adults
                            prefer every 10-15 days.</p>
                        <div class="price">Rs.1500</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-palm tree">
                        <i class="fas fa-times"></i>
                        <img src="outdrimg/palm tree.jpeg" alt="" width="50%">
                        <h3>palm Plants</h3>
                        <div class="location">Location:<span>outdoor plants</span></div>
                        <h2>Description:</h2>
                        <p>Any of several kinds of tropical tree with a tall, slender, smooth trunk, no branches, and
                            large, spreading leaves at the top: All the islands have pristine shores, swaying palm
                            trees, aquamarine waters, and lots of ocean-side adventure.: See also palm2 (def. 1). A new
                            palm should be watered everyday on its first week, switch to every other day the following
                            and then settle for 3 times a week on the third. For more established palms, watering should
                            be done only 2-3 times per week.</p>
                        <div class="price">Rs.25,000</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>
                    <div class="preview" data-target="b-outdr1">
                        <i class="fas fa-times"></i>
                        <img src="outdrimg/outdr1.jpeg" alt="" width="50%">
                        <h3>Woven Hanging Plants</h3>
                        <div class="location">Location:<span>outdoor plants</span></div>
                        <h2>Description:</h2>
                        <p>Hanging baskets are plants placed in a structure that is suspended from chains, ropes or
                            other materials. They are primarily decorative plants around homes and other structures.
                            They allow homes with limited garden space to still have fresh-grown living plants and
                            flowers. In general, water plants in hanging baskets when the soil surface becomes dry to
                            the touch. On hot, sunny days it may be necessary to water once a day. When watering hanging
                            baskets, be sure to apply water until water begins to flow out the bottom of the container.
                        </p>
                        <div class="price">Rs.2,232</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
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
