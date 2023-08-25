@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/flowering.css') }}">
@endpush

@section('content')

<!-- home section starts  -->

<home class="homesection" id="homediv">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/images/flowerbanner.jpeg') }});">
                    <div class="content">
                        <h3>Mood Fresh Flowering</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="sidebar">
    <h1>Flowering Plants</h1>
    <ol>
        <li><a href="#">→</a></li>
        <ul>
           <li><a href="marigold flower.html">Marigolds</a></li>
           <li><a href="cone flower.html">Cone Flower</a></li>
           <li><a href="yellow rose flower.html">Yellow Rose</a></li>
           <li><a href="candytuft flower.html">Candytuft</a></li>
           <li><a href="Red Lily flower.html">Red Lily</a></li>
           <li><a href="Red Rose flower.html">Red Rose</a></li>
           <li><a href="White Lily flower.html">White Lily</a></li>
           <li><a href="Orchid flower.html">Orchid</a></li>
           <li><a href="Daffodily flower.html">Daffodily</a></li>
           <li><a href="Daisy flower.html">Daisy</a></li>
        </ul>
        <li><a href="#">→</a></li>
        <ul>
           <li><a href="pansy flower.html">Pansy</a></li>
           <li><a href="Cyclamen flower.html">Cyclamen </a></li>
           <li><a href="Zinnia flower.html">Zinnia</a></li>
           <li><a href="California flower.html">California</a></li>
           <li><a href="Cyclamen flower.html">Cyclamen</a></li>
           <li><a href="Camellia flower.html">Camellia</a></li>
           <li><a href="Calla Lily flower.html">Calla Lily</a></li>
           <li><a href="Dianthus Caryophyllus flower.html">Dianthus Caryophyllus</a></li>
           <li><a href="Gerbera Daisy flower.html">Gerbera Daisy</a></li>
           <li><a href="Hippeastrum flower.html">Hippeastrum</a></li>
        </ul>
    </ol>
</div>




<!-- product section starts  -->

<section class="product" id="product">


    <h1 class="heading">Flowering plant category</h1>

    <div class="box-container">

        <div class="box" data-name="b-Marigolds">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/flowrimg/Marigolds.jpeg')}}" alt="">
            <h3>Marigolds</h3>
            <div class="location"> Location: <span>Indoor Plant</span>
            </div>
            <div class="price">Rs.1200</div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Yellow Rose">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/Yellow Rose.jpeg" alt="">
            <h3>Yellow Rose</h3>
            <div class="location"> Location: <span>indoor Plant</span>
            </div>
            <div class="price">Rs.1000</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-Candytuft">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/Candytuft.jpeg" alt="">
            <h3>Candytuft</h3>

                <div class="location"> Location: <span>Indoor Plants</span>
                </div>
                <div class="price">Rs.1300</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-red lily">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/red lily.jpeg" alt="">
            <h3>Red Lily</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.550</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Red Rose">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/Red Rose.jpeg" alt="">
            <h3>Red Rose</h3>
            <div class="location"> Location: <span>outdoor Plants </span>
            </div>
            <div class="price">Rs.375</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-white lily">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/white lily.jpeg" alt="">
            <h3>White Lily</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.5999</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-Orchid">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/orchid.jpeg" alt="">
            <h3>Orchid</h3>

            <div class="location"> Location: <span>Outdoor plants</span>
            </div>
            <div class="price">Rs.5,249</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-Daffodily">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/Daffodily.jpeg" alt="">
            <h3>Daffodily</h3>

            <div class="location"> Location: <span>Outdoor Plants</span>
            </div>
            <div class="price">Rs.310</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-Daisy">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="flowrimg/Daisy.jpeg" alt="">
            <h3>Daisy</h3>

            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.4,500</div>

            <a href="#" class="btn">add to cart</a>
        </div>



        <div class="box-preview">

            <div class="preview" data-target="b-Marigolds">
               <i class="fas fa-times"></i>
               <img src="flowrimg/Marigolds.jpeg" alt="" width="50%">
               <h3>Marigolds flower</h3>
               <div class="location">Location:<span>indoor Plants</span></div>
               <h2>Description:</h2>
               <p> Marigolds are composite flowers ranging in size from medium to large and measuring approximately 3 to 5 centimeters in diameter. Depending on the variety, the showy blossoms can grow in a pom-pom, anemone, or daisy-shape and are present in a range of yellow, orange, and red hues, sometimes with striped or bicolor petals. The flowers have a pungent, sharp, and musky aroma that can be considered unpleasant. The flowers also have a robust citrusy flavor with a peppery and bitter finish. Marigolds need moist soil for the first week or two after planting to establish a strong root system. Once established, they require watering around once per week. Marigolds need full sun all day to provide blooms all season long</p>
               <div class="price">Rs.1200</div>
               <div class="buttons">
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>

            <div class="preview" data-target="b-Yellow Rose">
                <i class="fas fa-times"></i>
                <img src="flowrimg/Yellow Rose.jpeg" alt="" width="50%">
                <h3>Yellow Rose Flower</h3>
                <div class="location">Location:<span>indoor Plants</span></div>
                <h2>Description:</h2>
                <p>The yellow rose meaning is often considered that of friendship. However, the color once signified the negative traits of jealousy and greed. Never fear as it's widely known that the sunny hue represents a positive, amicable bond. Shop our yellow rose bouquet collection. The Yellow rose generally needs about a gallon of water each schedule,With the potted plants, you might want to water them deeply until you see that the water is dripping at the bottom of the pot. Then, wait for the soil to dry before watering them again. Yellow rose get sunlight per day for healthy.  Watering is required every 3 to 5 days when living in a cold region. Water it early in the morning when the soil is dry, indoor</p>
                <div class="price">Rs.1000</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-Candytuft">
                <i class="fas fa-times"></i>
                <img src="flowrimg/Candytuft.jpeg" alt="" width="50%">
                <h3>Candytuft Flower</h3>
                <div class="location">Location:<span>indoor Plants </span></div>
                <h2>Description:</h2>
                <p>Candytuft is a low-growing, spreading, evergreen ground cover that may be classified as herbaceous perennial or sub-shrub. It has a mounding and sprawling habit and measures 6 to 12 inches in height and 6 to 18 inches in width. Grow candytuft in moist but well-drained soil in full sun to dappled shade. Water once a week during dry spells. Mulch around perennial varieties in autumn to protect them from cold and then, in spring, prune the stems back to about 10cm, to promote lush new growth. Iberis have a moderate growth rate and prefer full sun (greater than 6 hours of direct sunlight) but will tolerate partial shade. Iberis prefer moist to slightly dry conditions but do not tolerate excessive moisture.</p>
                <div class="price">Rs.1300</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-red lily">
                <i class="fas fa-times"></i>
                <img src="flowrimg/red lily.jpeg" alt="" width="50%">
                <h3>Red Lily Flower</h3>
                <div class="location">Location:<span>outdoor plants</span></div>
                <h2>Description:</h2>
                <p>Petals are deep, rich red with hints of dark orange at the margins. Centers are slightly darker with red freckles and anthers. Flowers face upward on strong stems with foliage that is dark and whorled. Like most Asiatic lilies, Red County has minimal fragrance. In the high temperatures of summer, water continuously to cool the plant and the soil temperature. Lilies should be watered immediately after planting and once every two or three days after that. They requires about 2.5 cm of water each week. Lilies love full sun, and six hours or more is imperative. Lilies like to have their "head in the sun, feet in the shade." To keep their roots cool, plant them with low-growing annuals, perennials, or grasses.</p>
                <div class="price">Rs.550</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="b-Red Rose">
                <i class="fas fa-times"></i>
                <img src="flowrimg/Red Rose.jpeg" alt="" width="50%">
                <h3>Red Rose Flower</h3>
                <div class="location">Location:<span>outdoor plants</span></div>
                <h2>Description:</h2>
                <p>The Red Naomi is known for its warm shade of red and soft velvety hues. It has long stems and excellent transport properties. Characteristics: This red rose is known for its bright, flame-red colour, which does not fade at all during the flowering period. Established Roses of all kinds need a good soak of at least 2 gallons (10 litres) of water once per week. If you have a particularly large and mature climbing rose then (depending on the soil type) you may need to increase this to 4 gallons (20 litres) every time your water the rose. Roses thrive on direct sunlight. For best results, a minimum of four hours of direct sunlight is recommended. However, even when planted against a north wall roses can still perform well as long as they are in an otherwise light and airy aspect.</p>
                <div class="price">Rs.375</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="b-white lily">
                <i class="fas fa-times"></i>
                <img src="flowrimg/white lily.jpeg" alt="" width="50%">
                <h3>white lily Flower</h3>
                <div class="location">Location:<span>outdoor Plants</span></div>
                <h2>Description:</h2>
                <p>The white lily is a beautiful herbaceous plant with a scaly bulb, big and white. It has a bulbous underground stem and another aerial herbaceous stem coated with leaves, few leaves are widespread and others erect, lanceolate shaped, and sparsely undulating in the edges. Peace lilies should be watered around once per week, and usually around one inch of water. You want to make sure the top layer of soil is always moist, and you can judge this by doing a finger test. You do not want to let the soil dry out for long periods, or your plant will suffer from underwatering. For dependable blooms, lilies should get 6 to 8 hours of direct sunlight a day (aka “full sun”). If it's too shady, the stems will attempt to lean towards the sun or get spindly and fall over. </p>
                <div class="price">Rs.5,999</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="b-Orchid">
                <i class="fas fa-times"></i>
                <img src="flowrimg/orchid.jpeg" alt="" width="50%">
                <h3>orchid flower</h3>
                <div class="location">Location:<span>office Plants</span></div>
                <h2>Description:</h2>
                <p>Orchids are plants prized for their beautiful and unique flowers. Orchids make up one of the world's largest plant families, with between 15,000 and 35,000 species, or types. Many people grow orchids as a hobby. Orchids grow in most parts of the world except for the areas near the North and South poles. An orchid generally needs water once a week during the winter and twice a week when the weather turns warm and dry. An orchid shouldn't go longer than two to three weeks without water; it will start dying.Orchids thrive with 6 to 8 hours of bright, indirect sunlight per day. They will do best if placed in an east or west facing window, depending on the variety of orchid, where the sunlight is not too intense or direct.</p>
                <div class="price">Rs.5,249</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="b-Daffodily">
                <i class="fas fa-times"></i>
                <img src="flowrimg/Daffodily.jpeg" alt="" width="50%">
                <h3>Daffodily Flower</h3>
                <div class="location">Location:<span>office Plants</span></div>
                <h2>Description:</h2>
                <p>Daffodil plants have a single flower on a long green stalk, with green leaves growing from the base of the stem. The flowers have yellow or white petals surrounding a trumpet, which can be a similar or contrasting colour. Daffodils grow between 5 to 80cm tall. Today's Common Gardening Question: How much water do Daffodils need? The Answer: Daffodils require approximately 1 inch of water each week while they are actively growing. Once they stop blooming, and the flowers fade, continue watering them no less than once weekly for 1 month. Plant daffodils in a sunny spot, one that gets at least 6 hours of bright sun each day. Like most bulbs, daffodils prefer well-drained soil; otherwise they are prone to rotting.</p>
                <div class="price">Rs.310</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>
            <div class="preview" data-target="b-Daisy">
                <i class="fas fa-times"></i>
                <img src="flowrimg/Daisy.jpeg" alt="" width="50%">
                <h3>Daisy flower</h3>
                <div class="location">Location:<span>office Plants</span></div>
                <h2>Description:</h2>
                <p>Daisies are characterized by the star-shaped flower head, consisting of a densely packed cluster of numerous, small, individual flowers (florets). Both of these species have a center composed of yellow disc florets surrounded by ray florets with long, white petals. Watering daisies every day will cause the soil to remain constantly moist, which can put your flowers at risk of disease and death. Instead, daisies need 1-2 inches (2.5-5 cm) of water every other week most of the year. In summer, this amount increases to 1-2 inches of water every week. Full sun is best for this plant, but it will flower as long as it gets a few hours of sun each day, and lots of indirect light.</p>
                <div class="price">Rs.4,500</div>
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
