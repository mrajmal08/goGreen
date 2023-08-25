@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/flowerseeds.css') }}">
@endpush
@section('content')

<!-- home section starts  -->

<div class="home-section">
    <a href="mustard seed.html" class="circle-link">
      <div class="circle-image">
        <img src="{{ asset('images/seedsimg/mustered.jpg')}}" alt="Image 1">
      </div>
      <p>Mustard Seeds</p>
    </a>
    <a href="sunflower Seeds.html" class="circle-link">
        <div class="circle-image">
          <img src="{{ asset('images/seedsimg/sunflower2.jpg')}}"alt="Image 2">
        </div>
        <p>Sun Flower seeds</p>
    </a>
    <a href="Jasmine seed.html" class="circle-link">
        <div class="circle-image">
          <img src="{{ asset('images/seedsimg/jasmina.jpg')}}" alt="Image 3">
        </div>
        <p>Jasmine seeds</p>
    </a>
</div>

<home class="banner-container">
    <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
               <a>Flowers Spread Fragrance Around You</a>
            </marquee>
    </div>
</section>



<div class="sidebar">
    <h1>Flowering Seeds</h1>
    <ol>
        <ul>
           <li><a href="malon seeds.html">Marigold</a></li>
           <li><a href="sunflower Seeds.html">Sunflower Seeds</a></li>
           <li><a href="blossom seeds.html">Blossom</a></li>
           <li><a href="aubrieta seeds.html">Aubrieta Seeds</a></li>
           <li><a href="blanket seeds.html">Blanket Flower</a></li>
           <li><a href="burgundy seeds.html">Burgundy</a></li>
           <li><a href="calendula seeds.html">Calendula </a></li>
           <li><a href="columbine seeds.html">Columbine</a></li>
           <li><a href="four clocks seeds.html">Four O'Clocks </a></li>
           <li><a href="morning seeds.html">Morning Glories</a></li>
        </ul>
    </ol>
</div>




<!-- product section starts  -->

<section class="product" id="product">


    <h1 class="heading">Flowering Seeds</h1>

    <div class="box-container">

        <div class="box" data-name="b-lily seeds">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/seedsimg/lily seeds.jpeg')}}" alt="">
            <h3>Lily Seed</h3>
            <div class="location"> Location: <span>Indoor Plant</span>
            </div>
            <div class="price">Rs.150</div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-iris seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/iris seed.jpg" alt="">
            <h3>Iris Seeds</h3>
            <div class="location"> Location: <span>outdoor Plants</span>
            </div>
            <div class="price">Rs.450</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-daisy">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/daisy.jpeg" alt="">
            <h3>Daisy Seeds</h3>

                <div class="location"> Location: <span>indoor Plants</span>
                </div>
                <div class="price">Rs.99</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-jasmine">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/jasmine seed.jpg" alt="">
            <h3>Jasmine Seeds</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.799</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-lavender seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/lavender seed.jpg" alt="">
            <h3>Lavender Seed</h3>
            <div class="location"> Location: <span>outdoor Plants </span>
            </div>
            <div class="price">Rs.899</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-marigold seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/marigold seed.jpg" alt="">
            <h3>Marigold Seed</h3>
            <div class="location"> Location: <span>Indoor Plants </span>
            </div>
            <div class="price">Rs.1200</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-tulip seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/tulip seed.jpg" alt="">
            <h3>Tulip Seed</h3>

            <div class="location"> Location: <span>outdoor Plants </span>
            </div>
            <div class="price">Rs.199</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-lilac seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/lilac seed.jpg" alt="">
            <h3>Lilac Seeds</h3>

            <div class="location"> Location: <span>indoor Plants </span>
            </div>
            <div class="price">Rs.100</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-poppy seed">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="seedsimg/poppy seed.jpg" alt="">
            <h3>Poppy Seed</h3>

            <div class="location"> Location: <span>Indoor plants</span>
            </div>
            <div class="price">Rs.1999</div>

            <a href="#" class="btn">add to cart</a>
        </div>

    </div>


    <div class="box-preview">

        <div class="preview" data-target="b-lily seeds">
           <i class="fas fa-times"></i>
           <img src="seedsimg/lily seeds.jpeg" alt="" width="50%">
           <h3>Lily Seed</h3>
           <div class="location">Location:<span>indoor Plants</span></div>
           <h2>Description:</h2>
           <p> Lilies are usually raised from bulbs, but they can be grown from seed. Different species vary in the amount of sunlight they require. Most prefer a porous loamy soil, and good drainage is essential. Most species bloom in July or August. In the high temperatures of summer, water continuously to cool the plant and the soil temperature. Lilies should be watered immediately after planting and once every two or three days after that. They requires about 2.5 cm of water each week. Lilies require a lot of sunlight. For consistent blooms, lilies require 6 to 8 hours of direct sunlight every day.</p>
           <div class="price">Rs.150</div>
           <div class="buttons">
              <a href="#" class="cart">add to cart</a>
           </div>
        </div>

        <div class="preview" data-target="b-iris seed">
            <i class="fas fa-times"></i>
            <img src="seedsimg/iris seed.jpg" alt="" width="50%">
            <h3>Iris Seeds </h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p> Iris is a flowering plant genus of 310 accepted species[1] with showy flowers. As well as being the scientific name, iris is also widely used as a common name for all Iris species, as well as some belonging to other closely related genera.  It is a popular garden flower. Once established, Iris normally don't need to be watered except in arid areas. Over-watering is a common error. Irises will bloom best in full sun, meaning at least 6 to 8 hours of sunlight per day. They can tolerate as little as half a day of sun, but it's not ideal. Without enough light, they won't bloom well.</p>
            <div class="price">Rs.450</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-daisy">
            <i class="fas fa-times"></i>
            <img src="seedsimg/daisy.jpeg" alt="" width="50%">
            <h3>Daisy Seeds</h3>
            <div class="location">Location:<span>indoor Plants </span></div>
            <h2>Description:</h2>
            <p>A daisy is a flowering plant with a large, star-shaped head that has clusters of florets surrounding a center disc of yellow or black florets. The daisy family is also known as the aster family, or Asteraceae, referring to the star-shaped flower. There are 23,000 individual species in this family. As a general rule of thumb, daisies usually require approximately 1 to 2 inches of water per week during the summer. Daisies, just like their cheerful appearance would suggest, are sun-loving plants. Plant them in full sun</p>
            <div class="price">Rs.99</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-jasmine">
            <i class="fas fa-times"></i>
            <img src="seedsimg/jasmine seed.jpg" alt="" width="50%">
            <h3>Jasmine Seeds</h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p> Common jasmine is a climbing shrub that can grow up to 8 metres tall. The leaves are made up of 7 to 9 smaller 'leaflets', which are long, pointed and oval-shaped. The flowers are white or very pale pink, with five petals and strongly scented. The fruits are small black berries. Watering Jasmine flowers that are in-ground should be watered once a week. If it is unusually dry or hot, increase the frequency, but let the soil dry out in between. Amount of sunlight Jasmine needs full sun or part shade usually about 6 hours or more of direct sunlight each day for full sun, and 2-4 hours per day for partial shade</p>
            <div class="price">Rs.799</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
         </div>

         <div class="preview" data-target="b-lavender seed">
            <i class="fas fa-times"></i>
            <img src="seedsimg/lavender seed.jpg" alt="" width="50%">
            <h3>Lavender seeds</h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p> Its broad rootstock bears woody branches with upright, rod like, leafy, green shoots. A silvery down covers the gray green narrow leaves, which are oblong and tapered, attached directly at the base, and curled spirally. The oil in lavender's small, blue violet flowers gives the herb its fragrant scent. Water once or twice a week after planting until plants are established. Water mature plants every 2 to 3 weeks until buds form. Lavender requires 8-10 hours of direct sun each day. Lavender thrives best with 6 or more hours of direct sunlight, but 8-10 hours is ideal.</p>
            <div class="price">Rs.899</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-marigold seed">
            <i class="fas fa-times"></i>
            <img src="seedsimg/marigold seed.jpg" alt="" width="50%">
            <h3>Marigold Seed</h3>
            <div class="location">Location:<span>indoor Plants</span></div>
            <h2>Description:</h2>
            <p> Marigolds are comprised of tiny florets surrounded by many layers of delicate, ruffled petals and a thick hollow stem with fernlike leaves. The flowers have a pungent, sharp, and musky aroma that can be considered unpleasant. The flowers also have a robust citrusy flavor with a peppery and bitter finish. When growing marigolds, check soil weekly: When the top inch is dry, it's time to water. Marigolds need full sun all day to provide blooms all season long. Three common types are French, African, and Signet. Marigolds naturally repel pests such as deer or rabbits since they find their odor offensive</p>
            <div class="price">Rs.1200</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-tulip seed">
            <i class="fas fa-times"></i>
            <img src="seedsimg/tulip seed.jpg" alt="" width="50%">
            <h3>Tulip Seed</h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p>Tulips are erect flowers with long, broad, parallel-veined leaves and a cup-shaped, single or double flower at the tip of the stem. Some tulips are varicolored as a result of a viral disease carried and transferred to the plants by aphids. Water once per week week for the first month after planting, then leave the plants alone until springtime. Begin watering again in the springtime, when the leaves appear. Tulips require full sun for the best display, which means at least 6 hours of bright, direct sunlight per day. They also prefer fast-draining soil and, consequently, make excellent additions to rock gardens.</p>
            <div class="price">Rs.199</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-lilac seed">
            <i class="fas fa-times"></i>
            <img src="seedsimg/lilac seed.jpg" alt="" width="50%">
            <h3>Lilac Seeds</h3>
            <div class="location">Location:<span>indoor Plants</span></div>
            <h2>Description:</h2>
            <p>Its broad rootstock bears woody branches with upright, rod like, leafy, green shoots. A silvery down covers the gray green narrow leaves, which are oblong and tapered, attached directly at the base, and curled spirally. Lilacs respond best to deep, infrequent watering. Make sure that your planting area or container drains well. These plants do not like wet feet and will not bloom if over watered. Lilacs grow best in full sun and well-drained soil. Lilacs grown in partial sun or shade will not flower well. The shrubs may take three to four years to establish themselves in a new site, but once established they can live for centuries.</p>
            <div class="price">Rs.100</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
         </div>

         <div class="preview" data-target="b-poppy seed">
            <i class="fas fa-times"></i>
            <img src="seedsimg/poppy seed.jpg" alt="" width="50%">
            <h3>Poppy Seed</h3>
            <div class="location">Location:<span>indoor Plants</span></div>
            <h2>Description:</h2>
            <p>Poppies have lobed or dissected leaves and milky sap. The buds are often nodding and are borne on solitary stalks. The flowers have four to six petals with numerous stamens surrounding the ovary. The two sepals usually drop off as the petals unfold. Poppy plants may rot and die in soaked soils, so only water when the soil feels dry to a finger's depth. Typically, you only need to water the plants once every several days. Poppies need at least 6 hours of sun. Some varieties of poppies grow very large, up to 5 feet tall. Plan accordingly and plant poppies where they will have room to grow. Many varieties of poppies reseed easily.</p>
            <div class="price">Rs.1,999</div>
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
