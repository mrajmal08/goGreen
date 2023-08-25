@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/seeds.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="flower seeds.html" class="circle-link">
            <div class="circle-image">
                <img src="{{ asset('images/flowrimg/Daffodily.jpeg')}}" alt="Image 3">
            </div>
            <p>Flowering Seeds</p>
        </a>
        <a href="vegetable seeds.html" class="circle-link">
            <div class="circle-image">
                <img src="vegimg/Peas.jpeg" alt="Image 1">
            </div>
            <p>Vegetable Seeds</p>
        </a>
        <a href="fruit seed.html" class="circle-link">
            <div class="circle-image">
                <img src="frutimg/Melon.jpeg" alt="Image 2">
            </div>
            <p>Fruit Seeds</p>
        </a>
    </div>

    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Happiness is growing your own food</a>
            </marquee>
        </div>
        </section>



        <div class="sidebar">
            <h1>Seeds</h1>
            <ol>
                <li><a href="#">1-Flowering Seeds</a></li>
                <ul>
                    <li><a href="marigold seeds.html">Marigold</a></li>
                    <li><a href="sunflower Seeds.html">Sunflower Seeds</a></li>
                    <li><a href="blossom seeds.html">Blossom</a></li>
                    <li><a href="aubrieta seeds.html">Aubrieta Seeds</a></li>
                    <li><a href="blanket seeds.html">Blanket Flower</a></li>
                    <li><a href="burgundy seeds.html">Burgundy</a></li>
                    <li><a href="calendula seeds.html">Calendula </a></li>
                    <li><a href="columbine seeds.html">Columbine</a></li>
                    <li><a href="four clocks seeds.html">Four O'Clocks</a></li>
                    <li><a href="morning seeds.html">Morning Glories</a></li>
                </ul>
                <li><a href="#">2-Vegetable Seeds</a></li>
                <ul>
                    <li><a href="tomatoes seeds.html">Tomatoes</a></li>
                    <li><a href="lettuces seeds.html">Lettuces</a></li>
                    <li><a href="beetroots.html">Beetroots</a></li>
                    <li><a href="radish seeds.html">Radish</a></li>
                    <li><a href="Squashespumkin seeds.html">Squashes & Pumpkins</a></li>
                    <li><a href="peas seeds.html">Beans & Peas</a></li>
                    <li><a href="peppers.seeds.html">Peppers</a></li>
                    <li><a href="hemp seeds.html">Hemp</a></li>
                    <li><a href="carrot seeds.html">Carrot</a></li>
                    <li><a href="cherry tomato seeds.html">Cherry Tomato</a></li>
                </ul>
                <li><a href="#">3-Fruit Seeds</a></li>
                <ul>
                    <li><a href="squash seeds.html">Squash</a></li>
                    <li><a href="malon seeds.html">Melon</a></li>
                    <li><a href="strawberry seeds.html">Strawberry</a></li>
                    <li><a href="grapes seeds.html">Grapes </a></li>
                    <li><a href="concord seeds.html">Concord</a></li>
                    <li><a href="banana seeds.html">Banana</a></li>
                    <li><a href="watermelon seeds.html">Watermelon</a></li>
                    <li><a href="cherry seeds.html">Cherry</a></li>
                    <li><a href="pineapple seeds.html">Pineapple</a></li>
                    <li><a href="pomegranate seeds.html">Pomegranate</a></li>
                </ul>
            </ol>
        </div>




        <!-- product section starts  -->

        <section class="product" id="product">


            <h1 class="heading">All types of Seeds</h1>

            <div class="box-container">

                <div class="box" data-name="b-marigold">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="{{ asset('images/seedsimg/marigold.jpeg')}}" alt="">
                    <h3>Marigold seeds</h3>
                    <div class="location"> Location: <span>Indoor Plants</span>
                    </div>
                    <div class="price">Rs.1200</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-sunflower">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/sunflower.jpeg" alt="">
                    <h3>Sunflower seeds</h3>
                    <div class="location"> Location: <span>outdoor Plants</span>
                    </div>
                    <div class="price">Rs.134</div>
                    <a href="#" class="btn">add to cart</a>

                </div>

                <div class="box" data-name="b-blossom">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/blossom.jpeg" alt="">
                    <h3>Blossom seeds</h3>

                    <div class="location"> Location: <span>Indoor Plants</span>
                    </div>
                    <div class="price">Rs.899</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-Tomato">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/Tomato.jpeg" alt="">
                    <h3>Tomato seeds</h3>
                    <div class="location"> Location: <span>Outdoor Plants </span>
                    </div>
                    <div class="price">Rs.3,480</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-spinach">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/spinach.jpeg" alt="">
                    <h3>Spinach seeds</h3>
                    <div class="location"> Location: <span>indoor Plants </span>
                    </div>
                    <div class="price">Rs.70</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-Peas">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/Peas.jpeg" alt="">
                    <h3>Peas seeds</h3>
                    <div class="location"> Location: <span>indoor Plants </span>
                    </div>
                    <div class="price">Rs.70</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-squash">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/squash.jpeg" alt="">
                    <h3>Squash seeds</h3>

                    <div class="location"> Location: <span>outdoor Plants </span>
                    </div>
                    <div class="price">Rs.120</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-Melon">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/Melon.jpeg" alt="">
                    <h3>Melon seeds</h3>

                    <div class="location"> Location: <span>indoor Plants </span>
                    </div>
                    <div class="price">Rs.288</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-strawberry">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="seedsimg/strawberry.jpeg" alt="">
                    <h3>Strawberry seeds</h3>

                    <div class="location"> Location: <span>in/outdoor plants </span>
                    </div>
                    <div class="price">Rs.150</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

            </div>

            <div class="box-preview">

                <div class="preview" data-target="b-marigold">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/marigold.jpeg" alt="" width="50%">
                    <h3>Marigold seeds</h3>
                    <div class="location">Location:<span>indoor Plants</span></div>
                    <h2>Description:</h2>
                    <p>Marigolds are composite flowers ranging in size from medium to large and measuring approximately 3 to
                        5 centimeters in diameter. Depending on the variety, the showy blossoms can grow in a pom-pom,
                        anemone, or daisy-shape and are present in a range of yellow, orange, and red hues, sometimes with
                        striped or bicolor petals. Marigolds need moist soil for the first week or two after planting to
                        establish a strong root system. Once established, they require watering around once per week.
                        Marigolds need full sun all day to provide blooms all season long</p>
                    <div class="price">Rs.1200</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-sunflower">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/sunflower.jpeg" alt="" width="50%">
                    <h3>Sunflower seeds</h3>
                    <div class="location">Location:<span>outdoor Plants</span></div>
                    <h2>Description:</h2>
                    <p> The seeds are 10-15 mm long and 4 mm broad, cylindrical or drop-shaped. The sunflower seed consists
                        of a hard hull (pericarp) and a kernel, which is the actual seed. Although sunflowers require a lot
                        of water to germinate, they only require an inch of water per week during the growing season.
                        Sunflowers like to grow in full sun in well-drained soil.</p>
                    <div class="price">Rs.134</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-blossom">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/blossom.jpeg" alt="" width="50%">
                    <h3>Blossom seeds</h3>
                    <div class="location">Location:<span>indoor Plants</span></div>
                    <h2>Description:</h2>
                    <p> Cherry Blossom Trees bring billowy pink and white blooms in the spring. These blooms often last no
                        more than two weeks and are also a symbol of renewal and the ephemeral nature of life. The most
                        well-known species is the Japanese Cherry Tree or the Sakura. Water young trees weekly, twice weekly
                        during dry weather, to help them get established. After the first two seasons, watering every two
                        weeks is sufficient, with more watering during droughts. Cherry blossom trees grow best in full sun,
                        with at least six hours of direct sunlight a day</p>
                    <div class="price">Rs.899</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-Tomato">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/Tomato.jpeg" alt="" width="50%">
                    <h3>Tomato seeds</h3>
                    <div class="location">Location:<span>outdoor plants</span></div>
                    <h2>Description:</h2>
                    <p> Every tomato seed contains a tiny tomato plant that is alive but dormant. This means that it is not
                        growing, it is just waiting. When environmental conditions are right, the seed will germinate. This
                        is when the tiny plant sprouts from the seed and begins to grow. Water newly planted tomatoes well
                        to make sure soil is moist and ideal for growing. Early in the growing season, watering plants daily
                        in the morning. As temperatures increase, you might need to water tomato plants twice a day.
                        Tomatoes needs at least 8 hours a day of sunlight to produce fruit, but aim to provide 12 -16 hours
                        of light for the best growing results.</p>
                    <div class="price">Rs.3480</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>


                <div class="preview" data-target="b-spinach">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/spinach.jpeg" alt="" width="50%">
                    <h3>Spinach seeds</h3>
                    <div class="location">Location:<span>indoor plants</span></div>
                    <h2>Description:</h2>
                    <p> Spinach (Spinacia oleracea) is a herbaceous plant whose leaves, green and arranged in rosette, are
                        eaten raw or cooked. The leaves have an oval shape and are wrinkled; they can be whole or sawed. It
                        is a very nutritious, tasteful and easy-to-digest plant. Spinach needs at least one deep watering
                        every week in the absence of rain but probably more, especially since the soil in containers tends
                        to dry out more quickly than the earth does. Spinach likes full sun but will tolerate partial shade.
                        Prepare the planting bed by amending the soil with rich compost or aged manure.</p>
                    <div class="price">Rs.70</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>


                <div class="preview" data-target="b-Peas">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/Peas.jpeg" alt="" width="50%">
                    <h3>Peas seeds</h3>
                    <div class="location">Location:<span>indoor plants</span></div>
                    <h2>Description:</h2>
                    <p> A pea is a most commonly green, occasionally golden yellow, or infrequently purple pod-shaped
                        vegetable, widely grown as a cool-season vegetable crop. The seeds may be planted as soon as the
                        soil temperature reaches 10 °C (50 °F), with the plants growing best. Peas need a deep watering
                        right at the time of planting in order to help them establish themselves in their new home. Provide
                        at least one inch of water per week and try to keep the soil from drying out completely, checking
                        moisture levels daily. Peas require full sun to thrive — that's six to eight hours of direct
                        sunlight daily. Peas will grow in partial shade.</p>
                    <div class="price">Rs.70</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-squash">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/squash.jpeg" alt="" width="50%">
                    <h3>Squash seeds</h3>
                    <div class="location">Location:<span>outdoor plants</span></div>
                    <h2>Description:</h2>
                    <p> A squash is the edible fruit of squash plant, but it's considered a vegetable in the kitchen, like
                        peppers and tomatoes. As a verb, squash means to compress or mash like the way your picky little
                        sister might squash the roasted squash on her plate with a fork. Squash need one inch of water per
                        week. To put that into perspective, you'll need to water mature squash plants once a week so the
                        soil is moist 8 to 12 inches beneath the surface. If your soil is very sandy or the weather is
                        smoking hot, you'll need to water more frequently. Give squash plants room to sprawl by planting
                        them 3 to 6 feet apart. Grow them in an area that gets 6 or more hours of sun and has rich,
                        well-drained soil.</p>
                    <div class="price">Rs.120</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-Melon">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/Melon.jpeg" alt="" width="50%">
                    <h3>Melon seeds</h3>
                    <div class="location">Location:<span>inerdoor plants</span></div>
                    <h2>Description:</h2>
                    <p> The melon seed is, generally, a grayish white hard shell with a white inner kernel, which is soft
                        and oval in shape. The seeds of the melon are rich in protein, omega-3 fatty acids, vitamins, fats
                        and other nutrients. It lacks any distinct scent but has a nutty and sweet taste. Watering is very
                        important—from planting until fruit begins to form. While melon plants are growing, blooming, and
                        setting fruit, they need 1 to 2 inches of water per week. Keep soil moist, but not waterlogged. Pick
                        a sunny spot that receives around 6-7 hours of sunlight every day for growing melons. The seedlings
                        will need plenty of sunlight and warmth during the day. You will need about 4-6 foot area to grow
                        the melons.</p>
                    <div class="price">Rs.288</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="b-strawberry">
                    <i class="fas fa-times"></i>
                    <img src="seedsimg/strawberry.jpeg" alt="" width="50%">
                    <h3>Strawberry seeds</h3>
                    <div class="location">Location:<span>indoor outdoor</span></div>
                    <h2>Description:</h2>
                    <p>A strawberry is both a low-growing, flowering plant and also the name of the fruit that it produces.
                        Strawberries are soft, sweet, bright red berries. They're also delicious. Strawberries have tiny
                        edible seeds, which grow all over their surface. Strawberry plants need regular water to thrive,
                        especially during fruit bearing season, when they need an average of 1-2 inches of water daily. The
                        best way to water strawberries is to use drip or soaker hose placed at least two inches away from
                        the plant. Strawberries require sun to produce fruit. Ten or more hours of sunlight each day is
                        ideal,but they need a minimum of six hours of direct sunlight each day.</p>
                    <div class="price">Rs.150</div>
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
