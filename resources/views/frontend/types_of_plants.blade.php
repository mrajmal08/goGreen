@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/typesofplants.css') }}">
@endpush

@section('content')
    <div class="home-section">
        <div class="slide-image">
            <img src="{{ asset('images/images/plantslide.jpg') }}" alt="Image 1">
        </div>
    </div>

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
                <img src="{{ asset('images/indrimg/chamaedoreaelegans.jpeg') }}" alt="">
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
                <img src="{{ asset('images/indrimg/asplenium nidus.jpeg') }}" alt="">
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
                <img src="{{ asset('images/indrimg/aloe striatula.jpeg') }}" alt="">
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
                <img src="{{ asset('images/outdrimg/Sweet alyssum.jpeg') }}" alt="">
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
                <img src="{{ asset('images/outdrimg/calibrachoa.jpeg') }}" alt="">
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
                <img src="{{ asset('images/outdrimg/lavender.jpeg') }}" alt="">
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
                <img src="{{ asset('images/oficimg/Tillandsia Cyanea.Jpg') }}" alt="">
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
                <img src="{{ asset('images/oficimg/cofee.Jpg') }}" alt="">
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
                <img src="{{ asset('images/oficimg/wonbaket.Jpg') }}" alt="">
                <h3>Woven Basket Hanging</h3>
                <div class="location"> Location: <span>Office Plants </span>
                </div>
                <div class="price">Rs.4,999</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box-preview">

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
                        to thrive and produce bountiful blooms. Less light than this allotted requirement will result not
                        only in a decrease of flowers but also an increase in ailments to the plant, including things like
                        disease and pests.</p>
                    <div class="price">Rs.4999</div>
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
