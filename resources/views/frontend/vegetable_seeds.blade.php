@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/vegetableseeds.css') }}">
@endpush
@section('content')

<!-- home section starts  -->

<div class="home-section">
    <a href="onion seeds.html" class="circle-link">
      <div class="circle-image">
        <img src="{{ asset('images/seedsimg/onine seed.jpg')}}" alt="Image 3">
      </div>
      <p>Onion Seeds</p>
    </a>
    <a href="bitter gourd seed.html" class="circle-link">
        <div class="circle-image">
          <img src="seedsimg/bitter gourd seed.jpg"Image 1">
        </div>
        <p>Bitter Gourd Seeds</p>
    </a>
    <a href="pumpkin seeds.html" class="circle-link">
        <div class="circle-image">
          <img src="seedsimg/pumkin sed.jpg" alt="Image 2">
        </div>
        <p>Pumpkin Seeds</p>
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
    <h1>Vegetable Seeds</h1>
    <ol>
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
    </ol>
</div>




<!-- product section starts  -->

<section class="product" id="product">


    <h1 class="heading">Vegetable Seeds</h1>

    <div class="box-container">

        <div class="box" data-name="b-carrot">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/seedsimg/carrot.jpeg') }}" alt="">
            <h3>Carrot Seed</h3>
            <div class="location"> Location: <span> Outdoor</span>
            </div>
            <div class="price">Rs.75</div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-potato seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/potato seed.jpg" alt="">
            <h3>potato Seeds</h3>
            <div class="location"> Location: <span>Outdoor</span>
            </div>
            <div class="price">Rs.4000</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-radish seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/radish seed.jpg" alt="">
            <h3>Radish Seed</h3>

                <div class="location"> Location: <span>Indoor</span>
                </div>
                <div class="price">Rs.100</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Tomato seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/Tomato seed.jpg" alt="">
            <h3>Tomato Seeds</h3>
            <div class="location"> Location: <span>indoor Plants </span>
            </div>
            <div class="price">Rs.3480</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-peas seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/peas seed.jpg" alt="">
            <h3>Peas Seed</h3>
            <div class="location"> Location: <span>indoor Plants </span>
            </div>
            <div class="price">Rs.70</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-corn seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/corn seed.jpg" alt="">
            <h3>Corn Seed</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.2500</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-cucumber seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/cucumber seed.jpg" alt="">
            <h3>Cucumber Seed</h3>

            <div class="location"> Location: <span>indoor Plants </span>
            </div>
            <div class="price">Rs.75</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-ginger seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/ginger seed.jpg" alt="">
            <h3>Ginger Seeds</h3>

            <div class="location"> Location: <span>Outdoor plants</span>
            </div>
            <div class="price">Rs.227</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-coriander seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/coriander seed.jpg" alt="">
            <h3>Coriander Seed</h3>

            <div class="location"> Location: <span>in/Outdoor Plants </span>
            </div>
            <div class="price">Rs.291</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box-preview">

            <div class="preview" data-target="b-carrot">
               <i class="fas fa-times"></i>
               <img src="seedsimg/carrot.jpeg" alt="" width="50%">
               <h3>Carrot Seed</h3>
               <div class="location">Location:<span>outdoor Plants</span></div>
               <h2>Description:</h2>
               <p>Seeds are small, straw to brown in color, flat on one side and curved on the other, with 4 to 6 ridges on the curved side, similar to celery except much larger. Carrots are biennial. They will produce a white umbel flower in the second growing season if the roots are not harvested. Consistent moisture produces the tastiest carrots, so give them about 1" of water per week. How to avoid thinning: Carrot seed is especially small, so it's difficult to get them spaced evenly. Sowing. Carrots grow best in full sun and light, fertile, well-drained soil. If your soil is stony, shallow or heavy clay, you may end up with stunted or forked roots, so try short-rooted types. </p>
               <div class="price">Rs.75</div>
               <div class="buttons">
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>

            <div class="preview" data-target="b-potato seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/potato.jpg" alt="" width="50%">
                <h3>potato Seeds</h3>
                <div class="location">Location:<span>outdoor Plants</span></div>
                <h2>Description:</h2>
                <p> A seed potato is a potato that has been grown to be replanted to produce a potato crop. It's the usual way that potatoes are made available to farmers and growers although it is possible to produce potato seeds (also known as True Potato Seed, TPS), it is unusual to do so. Generally, potatoes need between 1-2 inches of water per week; this could be provided by rain events or you to make up the difference. You'll need a location with at least 6 hours of direct sunlight and fertile, loose, well-drained soil; hard or compacted soil leads to misshapen tubers.</p>
                <div class="price">Rs.4000</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-radish seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/radish.jpg" alt="" width="50%">
                <h3>Radish Seed</h3>
                <div class="location">Location:<span>indoor Plants</span></div>
                <h2>Description:</h2>
                <p> Radishes are a group of root vegetables with light-colored, crunchy flesh, variable skin color, and an almost spicy, peppery taste. They vary in shape from short and round to long and narrow, and the skin can be red, black, white, yellow, pink, or purple. On average, radishes require one inch of water per week. The most important thing is to maintain a steady and even level of moisture. If the soil is too dry, the plant will go to seed and the radishes won't taste good, and if the soil is too wet, the roots will split and rot. Full sun requires direct light at least 6 hours/day; prefers 8 - 10 hours/day. Days to maturity: 25 - 35.</p>
                <div class="price">Rs.100</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-Tomato seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/Tomato.jpeg" alt="" width="50%">
                <h3>Tomato seeds</h3>
                <div class="location">Location:<span>indoor plants</span></div>
                <h2>Description:</h2>
                <p>Every tomato seed contains a tiny tomato plant that is alive but dormant. This means that it is not growing, it is just waiting. When environmental conditions are right, the seed will germinate. This is when the tiny plant sprouts from the seed and begins to grow. Water newly planted tomatoes well to make sure soil is moist and ideal for growing. Early in the growing season, watering plants daily in the morning. As temperatures increase, you might need to water tomato plants twice a day. Garden tomatoes typically require 1-2 inches of water a week. Tomatoes love the sunshine. A position in full sun that means an average of at least eight hours a day.</p>
                <div class="price">Rs.3480</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-peas seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/Peas.jpeg" alt="" width="50%">
                <h3>Peas Seed</h3>
                <div class="location">Location:<span>indoor plants</span></div>
                <h2>Description:</h2>
                <p> Each pod contains several seeds called peas. A pea seed is a most commonly green, occasionally golden yellow, or infrequently purple pod-shaped vegetable, widely grown as a cool season vegetable crop. Seeds are globose or angled, smooth or wrinkled, exalbuminous, whitish, gray, green, or brownish. Peas need a deep watering right at the time of planting in order to help them establish themselves in their new home. Provide at least one inch of water per week and try to keep the soil from drying out completely, checking moisture levels daily. Peas need full sun for best growth. They can tolerate some partial shade but you'll get less yield. They are not suitable for very shady areas.</p>
                <div class="price">Rs.70</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-corn seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/corn seed.jpg" alt="" width="50%">
                <h3>Corn Seed</h3>
                <div class="location">Location:<span>outdoor plants</span></div>
                <h2>Description:</h2>
                <p> Corn kernels are the fruits of maize. Maize is a grain, and the kernels are used in cooking as a vegetable or a source of starch. The kernels can be of various colors: blackish, bluish-gray, purple, green, red, white and yellow. One ear of corn contains roughly 800 kernels in 16 rows. Corn needs about 1 inch of water a week, particularly when the stalks begin to tassel. Water stress during pollination will result in ears with lots of missing kernels, so don't skip watering your corn patch. Apply water at the soil surface by using a soaker hose or drip irrigation. A minimum of 6-8 hours of sunlight every day is the common growing corn plant light requirement.</p>
                <div class="price">Rs.2500</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-cucumber seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/cumcumber.jpg" alt="" width="50%">
                <h3>Cucumber Seed</h3>
                <div class="location">Location:<span>indoor plants</span></div>
                <h2>Description:</h2>
                <p> The white seeds range from 0.5-1.8cm in length, and are emarginate and elliptical with pointed ends. A gram of seed includes 33-40 seeds (9,11,12). Dispersal Syndrome: Cucumbers occasionally escape from cultivation (15). When seedlings emerge, begin to water frequently. The main care requirement for cucumbers is consistent watering! They need at least one inch of water per week (or more, if temperatures are particularly high). Inconsistent watering leads to bitter-tasting fruit. Select a site that gets full sun (at least 6-8 hours of direct sunlight per day). Cucumbers like warmth and lots of light! Cucumbers require fertile soil. Prior to planting, add about 2 inches of aged manure and/or compost to the bed and work it in to a depth of 6 to 8 inches.</p>
                <div class="price">Rs.75</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-ginger seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/ginger.jpg" alt="" width="50%">
                <h3>Ginger Seeds</h3>
                <div class="location">Location:<span>outdoor plants</span></div>
                <h2>Description:</h2>
                <p> Ginger is a rhizome that grows underground from a seed piece (sometimes called the "mother"). The seed rhizome looks similar to the mature ginger you find in the grocery store however unlike the supermarket ginger, the seed ginger we use is certified disease-free and certified organic. The one thing you don't want when growing ginger is waterlogged soil. Although you should water the plant deeply and regularly during the growing season—usually at least an inch a week—be careful not to overdo it. Soggy conditions can result in root rot. Ginger thrives in partial shade with only about two to five hours of sun a day. Take that into account if you're planting your ginger outdoors.</p>
                <div class="price">Rs.227</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-coriander seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/coriander.PNG" alt="" width="50%">
                <h3>Coriander Seed</h3>
                <div class="location">Location:<span>indoor outdoor</span></div>
                <h2>Description:</h2>
                <p>Coriander seed has a warm and subtle flavour with a slight citrus hint. It has an aromatic scent that is soothingly warm, nutty, slightly fruity, and complex. Water the seedlings regularly throughout the growing season. They require about 1 inch of water per week for best growth. Thin seedlings to 6 inches apart so that they have room to develop healthy leaves. Once the plants are established, they do not need as much water per week. Coriander prefers full sun, but it will grow in a little shade. In hotter zones, protection from the strongest sun is advisable. Coriander has weak stems and fine leaves.</p>
                <div class="price">Rs.291</div>
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
