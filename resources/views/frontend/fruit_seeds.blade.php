@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/fruitseeds.css') }}">
@endpush
@section('content')

<!-- home section starts  -->

<div class="home-section">
    <a href="grapes seeds.html" class="circle-link">
      <div class="circle-image">
        <img src="{{ asset('images/seedsimg/grape seed.jpg')}}" alt="Image 3">
      </div>
      <p>Grapes Seeds</p>
    </a>
    <a href="watermelon seeds.html" class="circle-link">
        <div class="circle-image">
          <img src="seedsimg/watermelon seed.jpg"Image 1">
        </div>
        <p>Watermelon Seeds</p>
    </a>
    <a href="plum seed.html" class="circle-link">
        <div class="circle-image">
          <img src="seedsimg/plum seed.jpg" alt="Image 2">
        </div>
        <p>Plum Seed</p>
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
    <h1>Fruit Seeds</h1>
    <ol>
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


    <h1 class="heading">fruit Seeds</h1>

    <div class="box-container">

        <div class="box" data-name="b-kivi seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/kivi seed.jpg" alt="">
            <h3>Kiwi Seed</h3>
            <div class="location"> Location: <span>outdoor Plant</span>
            </div>
            <div class="price"> Rs.150</div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-apple seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>


            </div>
            <img src="seedsimg/apple seed.jpg" alt="">
            <h3>Apple Seeds</h3>
            <div class="location"> Location: <span>Outdoor Plant</span>
            </div>
            <div class="price">Rs.75</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-banna">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/banna.jpeg" alt="">
            <h3>Banana Seed</h3>

                <div class="location"> Location: <span>In/outdoor Plants</span>
                </div>
                <div class="price">Rs.275</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Mango seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/Mango seed.jpg" alt="">
            <h3>Mango Seeds</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.1200</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-melon seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/melon seed.jpg" alt="">
            <h3>Melon Seed</h3>
            <div class="location"> Location: <span>Indoor Plants </span>
            </div>
            <div class="price">Rs.228</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-peach seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/peach seed.jpg" alt="">
            <h3>Peach Seed</h3>
            <div class="location"> Location: <span>indoor Plants </span>
            </div>
            <div class="price">Rs.119</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-orange seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/orange seed.jpg" alt="">
            <h3>Orange Seed</h3>

            <div class="location"> Location: <span>indoor Plants </span>
            </div>
            <div class="price">Rs.150</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-dates seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/dates seed.jpeg" alt="">
            <h3>Dates Seeds</h3>

            <div class="location"> Location: <span>outdoor Plants </span>
            </div>
            <div class="price">Rs.1899</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-cherry seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/cherry seed.jpg" alt="">
            <h3>Cherry Seed</h3>

            <div class="location"> Location: <span>indoor Plants </span>
            </div>
            <div class="price">Rs.4500</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box-preview">

            <div class="preview" data-target="b-kivi seed">
               <i class="fas fa-times"></i>
               <img src="seedsimg/kivi seed.jpg" alt="" width="50%">
               <h3>Kiwi Seed</h3>
               <div class="location">Location:<span>outdoor Plants</span></div>
               <h2>Description:</h2>
               <p>But these little black seeds that you see in kiwifruit are edible and filled with a number of essential nutrients — even if just in nominal amounts. Omega-3 Fats. Kiwi seeds provide a small amount of omega-3 fats. Omega-3 fats are the so-called “good fats” that are important for brain and heart health. Usually, two irrigations per week are enough to maintain adequate moisture. Avoid giving too much water. Kiwi fruit plants require a large amount of water throughout the growing season but should also be in well-drained soil. Kiwi prefers full sun and well-draining soil. Kiwi plants are vining, and they require a decent amount of space to spread out and grow, sometimes up to 20 feet per plant. </p>
               <div class="price">Rs.150</div>
               <div class="buttons">
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>

            <div class="preview" data-target="b-apple seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/apple seed.jpg" alt="" width="50%">
                <h3>potato Seeds</h3>
                <div class="location">Location:<span>outdoor Plants</span></div>
                <h2>Description:</h2>
                <p>Apples have five seed pockets, with varying numbers of seeds in each pocket. Some believe that apple seeds are poisonous, while others consider them to be healthful. Most people avoid the seeds, which have a bitter taste. By the time the apple trees that you've grown from seed have been planted in the ground for three months, you can slow down to watering them only once a week. Apple trees need at least 8 hours of sun per day during the growing season. Two varieties are required for successful pollination; one can be a crabapple. Dwarf apple trees will start bearing fruit 2 to 3 years after planting. Standard size trees can take up to 8 years to bear fruit.</p>
                <div class="price">Rs.75</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-banna">
                <i class="fas fa-times"></i>
                <img src="seedsimg/banna.jpeg" alt="" width="50%">
                <h3>Banana Seed</h3>
                <div class="location">Location:<span>indoor outdoor</span></div>
                <h2>Description:</h2>
                <p> Seeds of wild bananas are usually less than 1 cm in diameter1 . The seed has two chambers: the larger one containing the endosperm and the embryo, and the smaller one the chalazal mass. Apart from a small discontinuity of parenchymatic tissue, the chambers are separated by the inner integument and cuticle. Bananas require an average of 4 to 6 inches of water each month, or about 1 to 1 1/2 inches per week, depending on the season. However, overwatering can cause root rot. Make sure the soil drains well and does not have standing water. Banana plants need the equivalent of 5+ hours of direct sunlight [DLI of 15+ mol/m²/day] to grow their best. In order to provide an equivalent amount with a grow light, it needs to be pretty bright.</p>
                <div class="price">Rs.275</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-Mango seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/Mango seed.jpg" alt="" width="50%">
                <h3>Mango Seeds</h3>
                <div class="location">Location:<span>outdoor plants</span></div>
                <h2>Description:</h2>
                <p>A mango is a sweet tropical fruit, and it's also the name of the trees on which the fruit grows. Ripe mangoes are juicy, fleshy, and delicious. Like peaches and plums, mangoes have an inedible pit at the center. Unlike these other fruits, the skin of a mango is very tough and also inedible. A fruit-bearing mango tree requires up to 50-120 litres per day. Covering mangoes' water needs during the full bearing stage with 2-3 applications after the fruit set is essential to encourage a flush for fruit growth. On the contrary, irrigations should stop-avoided 2-3 months before flowering. Mango trees ideally need 8 hours of sunlight per day to produce flowers and fruit. Place pot-grown mango trees outside in summer if possible, to give them sufficient sunlight.</p>
                <div class="price">Rs.1200</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-melon seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/Melon.jpeg" alt="" width="50%">
                <h3>Melon Seed</h3>
                <div class="location">Location:<span>indoor plants</span></div>
                <h2>Description:</h2>
                <p> The melon seed is, generally, a grayish white hard shell with a white inner kernel, which is soft and oval in shape. The seeds of the melon are rich in protein, omega-3 fatty acids, vitamins, fats and other nutrients. It lacks any distinct scent but has a nutty and sweet taste. Watering is very important—from planting until fruit begins to form. While melon plants are growing, blooming, and setting fruit, they need 1 to 2 inches of water per week. Keep soil moist, but not waterlogged. Pick a sunny spot that receives around 6-7 hours of sunlight every day for growing melons. The seedlings will need plenty of sunlight and warmth during the day. You will need about 4-6 foot area to grow the melons.</p>
                <div class="price">Rs.228</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>


            <div class="preview" data-target="b-peach seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/peach seed.jpg" alt="" width="50%">
                <h3>Peach Seed</h3>
                <div class="location">Location:<span>indoor plants</span></div>
                <h2>Description:</h2>
                <p> The single, large seed is red-brown, oval shaped, around 1.3-2 cm long, and surrounded by a wood-like husk. Peaches, along with cherries, plums, and apricots, are stone fruits (drupes). Give new trees two gallons of water per week. This equals one inch of rainfall. Once peach trees mature, they can go a week and a half with this same amount of water. Keep the soil evenly moist, but make sure it's never sopping wet. Choose a site for your peach with full sun and excellent drainage. Dig a hole deep enough to accommodate the tap root of the peach plant without damaging it. Keep your peach tree moderately moist through its first growing season.</p>
                <div class="price">Rs.119</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-orange seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/orange seed.jpg" alt="" width="50%">
                <h3>Orange Seed</h3>
                <div class="location">Location:<span>indoor plants</span></div>
                <h2>Description:</h2>
                <p> Inside each segment of most types of orange there are seeds called “pips”. Orange trees can be grown from pips, but some types of orange trees can only be grown from “cuttings” (a piece cut off a tree and made to grow roots). The segments and the skin are separated by white stringy fibrous material called “pith” Water the soil thoroughly once a week, or if the soil starts to become dry. If the soil dries out too often, the orange tree will not survive. As the seedling develops into a tree, it will start getting bigger and grow leaves. Orange trees need full sun to thrive, so place your pot in a spot that gets at least 6 hours of direct sunlight each day. Keep an eye on your soil and water as needed to keep it moist but not soggy. In 4-6 weeks, you should see your first sprouts!</p>
                <div class="price">Rs.150</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-dates seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/dates.jpg" alt="" width="50%">
                <h3>Dates Seeds</h3>
                <div class="location">Location:<span>outdoor plants</span></div>
                <h2>Description:</h2>
                <p> The date (Phoenix dactylifera) is the fruit of the date palm. It is a berry of golden yellow colour or reddish-brown when ripe. Its meat is soft, aromatic and sweet, with a stone inside it of elongate shape and with a longitudinal furrow. Date Palms require no watering once established. Generally, trees need supplemental irrigation to get established, especially if planted after the rainy season. During the first year, irrigate in the amount of 20-25 liters of water twice a week. Keep your plant in full sun. Date palms need full sun and warm temperatures to grow, preferably in dry heat or humidity.</p>
                <div class="price">Rs.1899</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-cherry seed">
                <i class="fas fa-times"></i>
                <img src="seedsimg/charry.PNG" alt="" width="50%">
                <h3>Cherry Seed</h3>
                <div class="location">Location:<span>indoor Plants</span></div>
                <h2>Description:</h2>
                <p>A cherry has a stony hard seed in the center surrounded by edible fleshy fruit measuring around 2 cm in diameter. It also has a very thin skin which is bright and shiny purple or red in colour. Minimum of 3 seeds per pack. All seeds are tested and grown on our farm in Malawi and our growing area in South Africa. Cherry trees thrive in a location that gets full sun and has a well-drained, fertile soil. “Full sun” is defined as at least 6 to 8 hours of sun each day. Sunlight is critical to fruit production and quality, and also helps keep fungal issues from getting a foothold.</p>
                <div class="price">Rs.4500</div>
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
