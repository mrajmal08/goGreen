@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/typesofplants.css') }}">
@endpush
@section('content')


<div class="home-section">
    <div class="slide-image">
        <img src="{{ asset('images/images/plantslide.jpg')}}" alt="Image 1">
    </div>
</div>

<!-- home section starts -->

<div class="sidebar">
    <h1>Types of Plants</h1>
    <ol>
        <li><a href="#">→</a></li>
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
        <li><a href="#">→</a></li>
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
        <li><a href="#">→</a></li>
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
    <h1 class="heading">All Types of Plants</h1>
    <div class="box-container">
        <div class="box" data-name="b-chamaedorea elegans">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="{{ asset('images/indrimg/chameadorea elegans.jpeg')}}" alt="">
            <h3>Chameadorea Elegans</h3>
            <div class="location"> Location: <span>Indoor Plant</span>
            </div>
            <div class="price">Rs.2650</div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-asplenium nidus">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="indrimg/asplenium nidus.jpeg" alt="">
            <h3>Asplenium Nidus</h3>
            <div class="location"> Location: <span>indoor Plant</span>
            </div>
            <div class="price">Rs.6000</div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-aloe striatula">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <img src="indrimg/aloe striatula.jpeg" alt="">
            <h3>Aloe Striatula</h3>
                <div class="location"> Location: <span>otdoor Plants</span>
                </div>
                <div class="price">Rs.2700</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Sweet alyssum">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="outdrimg/Sweet alyssum.jpeg" alt="">
            <h3>Sweet Alyssum</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.220</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-calibrachoa">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="outdrimg/calibrachoa.jpeg" alt="">
            <h3>Calibrachoa</h3>
            <div class="location"> Location: <span>outdoor Plants </span>
            </div>
            <div class="price">Rs.4,546</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-lavender">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="outdrimg/lavender.jpeg" alt="">
            <h3>Lavender</h3>
            <div class="location"> Location: <span>Outdoor Plants </span>
            </div>
            <div class="price">Rs.200</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-Tillandsia Cyanea">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="oficimg/Tillandsia Cyanea.jpg" alt="">
            <h3>Tillandsia Plant</h3>

            <div class="location"> Location: <span>office plants</span>
            </div>
            <div class="price">Rs.2700</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-cofee">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="oficimg/cofee.jpg" alt="">
            <h3>coffee Plants</h3>

            <div class="location"> Location: <span>office plants </span>
            </div>
            <div class="price">Rs.7500</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-wonbaket">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="oficimg/wonbaket.jpg" alt="">
            <h3>Woven Basket Hanging</h3>

            <div class="location"> Location: <span>Office Plants </span>
            </div>
            <div class="price">Rs.4,999</div>

            <a href="#" class="btn">add to cart</a>
        </div>




    <div class="box-preview">

        <div class="preview" data-target="b-chamaedorea elegans">
           <i class="fas fa-times"></i>
           <img src="indrimg/chameadorea elegans.jpeg" alt="" width="50%">
           <h3>Chamaedorea Elegans Plants</h3>
           <div class="location">Location:<span>indoor Plants</span></div>
           <h2>Description:</h2>
           <p> Chamaedorea elegans, commonly called parlor palm or neanthe bella palm, is a small, compact, usually single-trunked palm that is native to rainforests from southeastern Mexico to northern Guatemala. Where winter hardy, it will rise to 5-6' tall in shady areas of the landscape. Water once or twice a week in summer and once every two weeks in winter. Repot the Chameadorea once every 2 years. This ensures that the plant has more soil and thus a larger storage for nutrients. The Chamaedorea does like light, but not direct sunlight. A spot in the semi-shade is therefore the best solution. Place the plant in front of a window on the north.</p>
           <div class="price">Rs.2,650</div>
           <div class="buttons">
              <a href="#" class="cart">add to cart</a>
           </div>
        </div>

        <div class="preview" data-target="b-asplenium nidus">
            <i class="fas fa-times"></i>
            <img src="indrimg/asplenium nidus.jpeg" alt="" width="50%">
            <h3> Asplenium Nidus Plants </h3>
            <div class="location">Location:<span>indoor Plants</span></div>
            <h2>Description:</h2>
            <p>Asplenium nidus, commonly called bird's nest fern, is a slow-growing, epiphytic fern of the spleenwort family featuring simple, entire, strap-shaped, glossy, bright apple green fronds with contrasting dark brown to black midribs and undulating margins. Water the plant once or twice every two weeks, letting the soil get dry between watering. It needs more water under bright light and a smaller amount in lower lighting conditions. The water around the fern rather than in the center. Usually, ferns prefer damp, but not water-logged soil. Bright light or light shade, such as a north-facing window is suitable. Too much sun may turn it yellow or stop growth.</p>
            <div class="price">Rs.6000</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-aloe striatula">
            <i class="fas fa-times"></i>
            <img src="indrimg/aloe striatula.jpeg" alt="" width="50%">
            <h3>Aloe striatula Plants</h3>
            <div class="location">Location:<span>outdoor Plants </span></div>
            <h2>Description:</h2>
            <p>It has a sprawling, scrambling habit and may even climb if given support. Its fleshy leaves are striped different shades of green. In summer it bears tall, dramatic flower spikes not dissimilar to those of kniphofia, and it eventually forms a branching, woody trunk. Water aloe plants deeply, but infrequently. In other words, the soil should feel moist after watering, but should be allowed to dry out to some extent before you water again. If the soil stays overly wet, the plant's roots can rot. These plants need dry and well drained and sandy.</p>
            <div class="price">Rs.2700</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-Sweet alyssum">
            <i class="fas fa-times"></i>
            <img src="outdrimg/sweet alyssum.jpeg" width="50%">
            <h3>Sweet Alyssum Plants</h3>
            <div class="location">Location:<span>outdoor plants</span></div>
            <h2>Description:</h2>
            <p>Sweet alyssum can be used as a seasonal ground cover. Alyssum grows 3-9 inches tall with a wider spread. Cotyledons are rounded and bright green, while the first true leaves are longer and narrower. The spreading mounds have well-branched stems covered with small linear leaves. Water sweet alyssum sparingly. Give the plants one inch of water per week and make sure the soil dries out completely between waterings. Sweet alyssum flowers best with at least six hours of full sun, but can tolerate partial shade. In warmer climates, plants perform best with protection from hot afternoon sun.</p>
            <div class="price">Rs.220</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-calibrachoa">
            <i class="fas fa-times"></i>
            <img src="outdrimg/calibrachoa.jpeg" alt="" width="50%">
            <h3>calibrachoa plants</h3>
            <div class="location">Location:<span>outdoor plants</span></div>
            <h2>Description:</h2>
            <p>These are compact, mounded plants which grow 3-9” tall on mostly trailing stems. Sometimes commonly called million bells, these plants are prolific bloomers that produce hundreds of 1” wide flowers from spring to frost. Flower colors include shades of violet, blue, pink, red, magenta, yellow, bronze, and white. Place potting mix in a hanging basket or container. Remove from the pot and gently tease the roots out if pot-bound. Place 6 to 12 inches apart and firm soil around the base. Water well to thoroughly wet the plant and settle the soil around it.</p>
            <div class="price">Rs.4,546</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-lavender">
            <i class="fas fa-times"></i>
            <img src="outdrimg/lavender.jpeg" alt="" width="50%">
            <h3>Lavender plants</h3>
            <div class="location">Location:<span>outdoor Plants</span></div>
            <h2>Description:</h2>
            <p>Lavenders are small evergreen shrubs with gray-green hoary linear leaves. The purple flowers are sparsely arranged on spikes at the tips of long bare stalks and produce small nutlet fruits. How to Care for Lavender. Water once or twice a week after planting until plants are established. Water mature plants every 2 to 3 weeks until buds form, then once or twice weekly until harvest. (Yellowing leaves are often a sign of overwatering.) Lavender requires 8-10 hours of direct sun each day. Lavender thrives best with 6 or more hours of direct sunlight, but 8-10 hours is ideal. </p>
            <div class="price">Rs.200</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-Tillandsia Cyanea">
            <i class="fas fa-times"></i>
            <img src="oficimg/Tillandsia Cyanea.jpg" alt="" width="50%">
            <h3>Red Prayer Plant</h3>
            <div class="location">Location:<span>office Plants</span></div>
            <h2>Description:</h2>
            <p>Tillandsia cyanea (common name pink quill) is a member of the bromeliad family of air plants, and gets its name from the plume of bright pink bracts that last for months. It prefers a loose, fir bark mix, such as an orchid mix or one specially labeled for bromeliads. In the warmer seasons, gentle misting every week, allowing the runoff to wet the roots, may be needed. Always allow the potting medium to dry out before rewatering and, if in doubt, underwatering rather than overwatering is the more sensible option. During the colder months, watering should be infrequent. Give your pink quill plant plenty of bright, indirect light.</p>
            <div class="price">Rs.2700</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-cofee">
            <i class="fas fa-times"></i>
            <img src="oficimg/cofee.jpg" alt="" width="50%">
            <h3>coffee plant</h3>
            <div class="location">Location:<span>office Plants</span></div>
            <h2>Description:</h2>
            <p>The arabica coffee plant is a small tree that is between 2m and 8m tall and has evergreen, usually shiny leaves. The flowers are white and sweetly scented, and the fruits are red, but sometimes yellow or purple. Each fruit produces two green seeds, which are commonly known as coffee beans. Coffee plants don't like to stay wet, so water every 1 to 2 weeks, allowing the potting mix to dry out halfway between waterings. You'll need to water more often in brighter light and less often in lower light, says Marino. But always poke your finger into the soil to check the moisture level before giving it a drink</p>
            <div class="price">Rs.7500</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>
        <div class="preview" data-target="b-wonbaket">
            <i class="fas fa-times"></i>
            <img src="oficimg/wonbaket.jpg" alt="" width="50%">
            <h3>Woven Basket Hanging</h3>
            <div class="location">Location:<span>office Plants</span></div>
            <h2>Description:</h2>
            <p>Woven Basket Hanging Rosa alba plants are tall shrubs with arching stems and bluish-green leaves. They bloom only in mid summer. They are extremely cold hardy and disease resistant, hence they are used to create new varieties for subarctic climates like northern Scandinavia and Canada. Established roses water every 2-3 days. Newly planted or roses planted in pots water every day.Like most blooming plants, roses will need at least six to eight hours of direct sunlight daily in order to thrive and produce bountiful blooms. Less light than this allotted requirement will result not only in a decrease of flowers but also an increase in ailments to the plant, including things like disease and pests.</p>
            <div class="price">Rs.4999</div>
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
