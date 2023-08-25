@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/plants.css') }}">
@endpush

@section('content')

<div class="home-section">
    <a href="indoor.html" class="circle-link">
      <div class="circle-image">
        <img src="{{ asset('images/indrimg/indr2.jpeg')}}" alt="Image 1">
      </div>
      <p>Indoor Plants</p>
    </a>
    <a href="outdoor.html" class="circle-link">
      <div class="circle-image">
        <img src="{{ asset('images/outdrimg/outdr1.jpeg')}}" alt="Image 2">
      </div>
      <p>Outdoor Plants</p>
    </a>
    <a href="flowering.html" class="circle-link">
      <div class="circle-image">
        <img src="{{ asset('images/flowrimg/flowr1.jpeg')}}" alt="Image 3">
      </div>
      <p>Flowering Plants</p>
    </a>
    <a href="vegetable plant.html" class="circle-link">
        <div class="circle-image">
          <img src="{{ asset('images/vegimg/veg2.jpeg')}}"Image 1">
        </div>
        <p>Vegetable Plants</p>
    </a>
    <a href="fruit plant.html" class="circle-link">
        <div class="circle-image">
          <img src="{{ asset('images/frutimg/frut1.jpeg')}}" alt="Image 2">
        </div>
        <p>Fruit Plants</p>
    </a>
    <a href="office.html" class="circle-link">
        <div class="circle-image">
          <img src="{{ asset('images/oficimg/offic1.jpeg')}}" alt="Image 2">
        </div>
        <p>Office Plants</p>
    </a>
</div>

<home class="banner-container">
    <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
               <a>Happiness is having more and more Plants</a>
            </marquee>
    </div>
</section>



<div class="sidebar">
    <h1>Plants by location</h1>
    <ol>
        <li><a href="indoor.html">1-Indoor Plants</a></li>
        <ul>
           <li><a href="calathea zebrina plant.html">Calathea Zebrina Plants</a></li>
           <li><a href="wandering jaw plant.html">Wandering Jew</a></li>
           <li><a href="musa oriana plant.html">Musa oriana</a></li>
           <li><a href="cascade palm plant.html">Cascade Palm</a></li>
           <li><a href="aloe striatula plant.html">Aloe striatula</a></li>
           <li><a href="asplenium nidus Plant.html">Asplenium nidus</a></li>
           <li><a href="chameadorea elegans plant.html">Chamaedorea elegans</a></li>
           <li><a href="spathiphyllum plant.html">Spathiphyllum</a></li>
           <li><a href="tradescantia plant.html">Tradescantia</a></li>
           <li><a href="monstera plant.html">Monstera</a></li>
        </ul>
        <li><a href="outdoor.html">2-Outdoor Plants</a></li>
        <ul>
           <li><a href="herbs plant.html">Herbs</a></li>
           <li><a href="calibrachoa plant.html">Calibrachoa</a></li>
           <li><a href="lavender plant.html">Lavender</a></li>
           <li><a href="sweet alyssum plant.html">Sweet Alyssum</a></li>
           <li><a href="Black Eyed Susan Vine plant.html">Black-eyed Susan Vine</a></li>
           <li><a href="Caladium plant.html">Caladium</a></li>
           <li><a href="Ornamental Pepper plant.html">Ornamental Pepper</a></li>
           <li><a href="Heliotrope plant.html">Heliotrope</a></li>
           <li><a href="Succulents plant.html">Succulents</a></li>
           <li><a href="Cherry Tomato plant.html">Cherry Tomato</a></li>
        </ul>
        <li><a href="office.html">3-Office Plants</a></li>
    <ul>
       <li><a href="Aglaonema Wishes Plants.html">Aglaonema Wishes</a></li>
       <li><a href="Dracaena Gold Star plant.html">Dracaena Gold Star</a></li>
       <li><a href="Costa Farms Chinese Evergreen plant.html">Costa Farms Chinese Evergreen</a></li>
       <li><a href="Birds Nest Fern plant.html">Birds Nest Fern</a></li>
       <li><a href="Modern Bamboo plant.html">Modern Bamboo</a></li>
       <li><a href="ZZ Plant.html">ZZ Plant</a></li>
       <li><a href="Coffee Plant.html">Coffee Plant</a></li>
       <li><a href="Red Prayer Plant.html">Red Prayer Plant</a></li>
       <li><a href="Woven Basket Hanging plant.html">Woven Basket Hanging</a></li>
       <li><a href="Tillandsia Cyanea plant.html">Tillandsia Cyanea</a></li>
    </ul>
    </ol>
</div>




<!-- product section starts  -->

<section class="product" id="product">


    <h1 class="heading">Products of Plants</h1>

    <div class="box-container">

        <div class="box" data-name="b-calathea">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/indrimg/calathea.jpg')}}" alt="">
            <h3>Calathea Zebrina Plants</h3>
            <div class="location"> Location: <span>Indoor Plant</span>
            </div>
            <div class="price">Rs.24,678</div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-wandering jew">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/indrimg/wandering jew.jpg')}}" alt="">
            <h3>Wandering Jew</h3>
            <div class="location"> Location: <span>indoor Plant</span>
            </div>
            <div class="price">Rs.1000</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-monstra">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/indrimg/monstra.PNG')}}" alt="">
            <h3>Monstera</h3>

                <div class="location"> Location: <span>indoor Plants</span>
                </div>
                <div class="price">Rs.2000</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-herb">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/outdrimg/herb.jpg')}}" alt="">
            <h3>Herbs</h3>
            <div class="location"> Location: <span>in/Outdoor Plants </span>
            </div>
            <div class="price">Rs.700</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-succulents">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/outdrimg/succulents.jpg')}}" alt="">
            <h3>Succulents</h3>
            <div class="location"> Location: <span>outdoor Plants </span>
            </div>
            <div class="price">Rs.3,900</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-eye">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/outdrimg/eye.jpg')}}" alt="">
            <h3>Black-Eyed Susan Vine</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.120</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-red prayer">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/oficimg/red prayer.jpg')}}" alt="">
            <h3>Red Prayer Plant</h3>

            <div class="location"> Location: <span>Office Plants </span>
            </div>
            <div class="price">Rs.199</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-cofee">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/oficimg/cofee.jpg')}}" alt="">
            <h3>Coffee Plant</h3>

            <div class="location"> Location: <span>Office Plants </span>
            </div>
            <div class="price">Rs.7,500</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-wonbaket">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/oficimg/wonbaket.jpg')}}" alt="">
            <h3>Woven Basket Hanging</h3>

            <div class="location"> Location: <span>Office Plants </span>
            </div>
            <div class="price">Rs.4,999</div>

            <a href="#" class="btn">add to cart</a>
        </div>

    </div>


    <div class="box-preview">

        <div class="preview" data-target="b-calathea">
           <i class="fas fa-times"></i>
           <img src="{{ asset('images/indrimg/calathea.jpg')}}" alt="">
           <h3>Calathea Zebrina Plants</h3>
           <div class="location">Location:<span>indoor Plants</span></div>
           <h2>Description:</h2>
           <p> Calathea zebrina, commonly known as zebra plant, is noted for its striking ornamental leaves which feature zebra-like stripes as suggested by both the specific epithet and the common name. This is a compact, rhizomatous, evergreen perennial that typically grows to 1-3' tall in containers. Calathea must be kept in damp soil at all times, but definitely do not allow the plant to sit in water or in very wet soil. Think 'little and often' as a watering policy. As with most variegated plants, Calathea need plenty of diffused light. Direct sunlight will cause the leaves to fade and lose their markings.</p>
           <div class="price">Rs.24,678</div>
           <div class="buttons">
              <a href="#" class="cart">add to cart</a>
           </div>
        </div>

        <div class="preview" data-target="b-wandering jew">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/indrimg/wandering jew.jpg')}}" alt="" width="50%">
            <h3> Wandering Jew </h3>
            <div class="location">Location:<span>indoor Plants</span></div>
            <h2>Description:</h2>
            <p>Wandering jew is a stunning plant that have heart-shaped green leaves with purple stripes and a silvery sheen. Depending on the type, the leaves may be solid or have different colors on them. Flowers have three petals and can be violet or white, or sometimes even pink.Wandering jews like to be watered regularly, and won't tolerate their soil drying out too much. Keep the soil evenly moist (but not soaking wet) at all times. Water the plant thoroughly, and allow the water to drain from the bottom of the pot. However, if placed in direct light, the leaves will burn. The ideal location is an east or west facing window.</p>
            <div class="price">Rs.1,000</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-monstra">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/indrimg/monstra.PNG')}}" alt="" width="50%">
            <h3>Monstera </h3>
            <div class="location">Location:<span>indoor Plants </span></div>
            <h2>Description:</h2>
            <p>Monstera deliciosa, commonly called split-leaf philodendron or swiss cheese plant, is native to Central America. Water. Water every 1-2 weeks, allowing soil to dry out between waterings. Expect to water more often in brighter light and less often in lower light. Pro tip: Monsteras can benefit from filtered water or water left out overnight before using. Your Monstera Peru will perform best in bright to medium-bright indirect light. It can tolerate direct morning sun but avoid areas in which it will be exposed to harsh afternoon sun. It can also tolerate low light levels but will exhibit slower leggy growth.</p>
            <div class="price">Rs.2,000</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-herb">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/outdrimg/herb.jpg')}}" alt="" width="50%">
            <h3>Herbs Plants</h3>
            <div class="location">Location:<span>indoor outdoor</span></div>
            <h2>Description:</h2>
            <p>Herbs are small plants that have a fleshy or juicy stem when they are young. The stems of some herbs develop hard, woody tissue when they grow old. Most herbs are perennials. This means that the top of each plant die each growing season, but the roots remain alive and produce new plants year after year. In general, you should water your herbs two to three times a week. Herbs that require more watering: Basil, cilantro, mint and parsley. After initially planting or buying your herbs, provide enough water to keep the soil moist for a few days. Most herbs need a fair amount of sunlight.</p>
            <div class="price">Rs.700</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-succulents">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/outdrimg/succulents.jpg')}}" alt="" width="50%">
            <h3>succulent plants</h3>
            <div class="location">Location:<span>outdoor plants</span></div>
            <h2>Description:</h2>
            <p>succulent, any plant with thick fleshy tissues adapted to water storage. Some succulents (e.g., cacti) store water only in the stem and have no leaves or very small leaves, whereas others store water mainly in the leaves. The most important rule for watering succulents is this: Only water when the soil in the succulents' growing container is bone dry. We repeat, let the soil dry out completely between waterings. If the soil isn't crumbly, dry dirt, don't water it. See, most houseplants want their soil moist at all times. Succulents love sun exposure, and most varieties need at least 4-6 hours of daily indirect sunlight to thrive.</p>
            <div class="price">Rs.3,900</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-eye">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/outdrimg/eye.jpg')}}" alt="" width="50%">
            <h3>Black-Eyed Susan Vine plants</h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p>Black-eyed Susan vine is a showy tropical tender evergreen that is best grown as an annual and replaced each year. Dispite its common name, it has no relation to black-eye Susans (Rudbeckia hirta) Plant in full sun with some afternoon shade, in rich, medium moisture, well-drained soils. Like most tropical plants, Thunbergia alata does not tolerate drought. Water regularly throughout the growing season to keep the soil evenly moist but not soggy. Plants grown in containers may need more frequent watering. Wilting foliage is often the first sign that your plants are thirsty. </p>
            <div class="price">Rs.120</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-red prayer">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/oficimg/red prayer.jpg')}}" alt="" width="50%">
            <h3>Red Prayer Plant</h3>
            <div class="location">Location:<span>office Plants</span></div>
            <h2>Description:</h2>
            <p>Marana Leuconeura, commonly known as a prayer plant, is an ornamental tropical plant native to the rainforests of Brazil. The Maranta gets its nickname from its behavior. Prayer plants display nyctinasty, meaning their leaves move in accordance with their circadian rhythm. Prayer plants do not like to dry out, so it's essential to water when just the first inch or two of the soil are dry. Prayer plants prefer indirect sunlight as opposed to direct sunlight and thrive in shady but warm areas. Since they are native to rainforests, you should provide the plants with lower light, controlled by either location or some type of cover.</p>
            <div class="price">Rs.199</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-cofee">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/oficimg/cofee.jpg')}}" alt="" width="50%">
            <h3>coffee plant</h3>
            <div class="location">Location:<span>office Plants</span></div>
            <h2>Description:</h2>
            <p>The arabica coffee plant is a small tree that is between 2m and 8m tall and has evergreen, usually shiny leaves. The flowers are white and sweetly scented, and the fruits are red, but sometimes yellow or purple. Each fruit produces two green seeds, which are commonly known as coffee beans. Coffee plants don't like to stay wet, so water every 1 to 2 weeks, allowing the potting mix to dry out halfway between waterings. You'll need to water more often in brighter light and less often in lower light, says Marino. But always poke your finger into the soil to check the moisture level before giving it a drink</p>
            <div class="price">Rs.7,500</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-wonbaket">
            <i class="fas fa-times"></i>
            <img src="{{ asset('images/oficimg/wonbaket.jpg')}}" alt="" width="50%">
            <h3>Woven Basket Hanging</h3>
            <div class="location">Location:<span>office Plants</span></div>
            <h2>Description:</h2>
            <p>Woven Basket Hanging Rosa alba plants are tall shrubs with arching stems and bluish-green leaves. They bloom only in mid summer. They are extremely cold hardy and disease resistant, hence they are used to create new varieties for subarctic climates like northern Scandinavia and Canada. Established roses water every 2-3 days. Newly planted or roses planted in pots water every day.Like most blooming plants, roses will need at least six to eight hours of direct sunlight daily in order to thrive and produce bountiful blooms. Less light than this allotted requirement will result not only in a decrease of flowers but also an increase in ailments to the plant, including things like disease and pests.</p>
            <div class="price">Rs.4,999</div>
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
