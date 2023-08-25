@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/seedstarter.css') }}">
@endpush
@section('content')
    <!-- header section ends -->

    <!-- home section starts  -->

    <div class="home-section">
        <a href="Growing Bag accesseries.html" class="circle-link">
            <div class="circle-image">
                <img src="{{ asset('images/accesrimg/growing bag.jpg') }}" alt="Image 3">
            </div>
            <p>Growing Bag</p>
        </a>
        <a href="seed starter accesseries.html" class="circle-link">
            <div class="circle-image">
                <img src="accesrimg/seed starter 2.jpg" alt="1">
            </div>
            <p>Seed Starter</p>
        </a>
        <a href="led light accesseries.html" class="circle-link">
            <div class="circle-image">
                <img src="accesrimg/LED ligts.jpg" alt="Image 2">
            </div>
            <p>LED Lights</p>
        </a>
    </div>

    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Saw Some Seeds</a>
            </marquee>
        </div>
        </section>



        <div class="sidebar">
            <h1>Seed starter</h1>
            <ol>
                <ul>
                    <li><a href="News paper pots acceseries.html">News paper pots</a></li>
                    <li><a href="Seed starting flat acceseries.html">Seed starting flat</a></li>
                    <li><a href="Pallet starting kits accesseries.html">Pallet starting kits</a></li>
                    <li><a href="Seedling trays with dome accesseries.html">Seedling trays with dome</a></li>
                    <li><a href="Seed starting mix accesseries.html">Seed starting mix</a></li>
                </ul>
            </ol>
        </div>
        <!-- product section starts  -->

        <section class="product" id="product">
            <h1 class="heading">Seed Starter categories</h1>
            <div class="box-container">
                <div class="box" data-name="b-1020 Tray">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="{{ asset('images/accesrimg/1020 Tray.jpg')}}" alt="">
                    <h3>1020 Tray</h3>
                    <div class="price">Rs.7,280</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-humidity doms">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="accesrimg/humidity doms.jpg" alt="">
                    <h3>Humidity Doms</h3>
                    <div class="price">Rs.3,615</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-cell tray">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="accesrimg/cell tray.jpg" alt="">
                    <h3>Cell Tray</h3>
                    <div class="price">Rs.200</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-heat mats">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="accesrimg/heat mats.jpg" alt="">
                    <h3>Heat Mats</h3>
                    <div class="price">Rs.1,250</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-hydroponic">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/hydroponic.jpg" alt="">
                    <h3>Hydroponic Equipment</h3>
                    <div class="price">Rs.12,616</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-seedstarter pots">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/seedstarter pots.jpg" alt="">
                    <h3>Seed Starter Pots</h3>
                    <div class="price">Rs.650</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-led strip">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/led strip.jpg" alt="">
                    <h3>LED strip Grow Lights</h3>
                    <div class="price">Rs.2,571</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-grow rack fan">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/grow rack fan.jpg" alt="">
                    <h3>Grow Rack Fan</h3>
                    <div class="price">Rs.1,749</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-coco coir brick">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/coco coir brick.jpg" alt="">
                    <h3>Coco Coir Brick</h3>
                    <div class="price">Rs.990</div>

                    <a href="#" class="btn">add to cart</a>
                </div>



                <div class="box-preview">

                    <div class="preview" data-target="b-1020 Tray">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/1020 Tray.jpg" alt="" width="50%">
                        <h3>1020 Tray</h3>
                        <h2>Description:</h2>
                        <p>The common seedling tray size is 540mm x 280mm with different cells. The less the number, the
                            larger the cell. The numbers of cells are 32, 50, 72, 105, 128, 200, etc. The selection of plug
                            tray specifications should not only consider the size and shape of the seeds, but also the size
                            of the young plant. By using seedling trays, growers can produce healthier, more uniform and
                            vigorous seedlings and allow for field planting without disturbing the root system. The use of
                            seed trays for seedling production is a common practice in modern agriculture.</p>
                        <div class="price">Rs.7,280</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-humidity doms">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/humidity doms.jpg" alt="" width="50%">
                        <h3>Humidity Doms</h3>
                        <h2>Description:</h2>
                        <p>A humidity dome is designed to work like a greenhouse. These pieces of plastic or glass fit just
                            perfectly over standard seed trays. The idea behind humidity domes is to capture heat and retain
                            moisture both variables that improve and quicken seed germination. Humidity domes come in a few
                            different types there are tall or short domes, and some with vents that open and close to
                            regulate humidity levels inside the dome. Humidity domes cover the edges of the tray to help
                            prevent pests from wreaking havoc on your new seedlings. Although the seal is not airtight, it
                            will prevent most plant pests from being able to access the moist soil as long as the vents are
                            kept closed.</p>
                        <div class="price">Rs.3,615</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-cell tray">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/cell tray.jpg" alt="" width="50%">
                        <h3>Cell Tray</h3>
                        <h2>Description:</h2>
                        <p>Starting seeds in cell trays, especially in the larger ones, gives the grower the advantage of
                            being able to start more seedlings in their growing space. This is especially handy for row
                            crops where the grower may want to plant 100 or more of each variety. Growing this many seedling
                            starts in larger seed pots would take up way too much space. The other advantage is that you
                            will waste less growing media starting out your seeds and then up-potting the successfully
                            germinated starts into new pots. These are trays split into individual compartments. You would
                            sow several seeds per cell, then cut off the weakest seedling(s) leaving just one seedling
                            growing in each cell.</p>
                        <div class="price">Rs.200</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-heat mats">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/heat mats.jpg" alt="" width="50%">
                        <h3>Heat Mats</h3>
                        <h2>Description:</h2>
                        <p> Specialized heating pads (mats) are also used in other settings. Heat mats in plant propagation
                            stimulate seed germination and root development; they operate at cooler temperatures. Heat mats
                            also are available in the pet trade, especially as warming spots for reptiles such as lizards
                            and snakes. Heat mats have one basic function which is to gently warm the soil, thus promoting
                            faster germination and strong, healthy seedlings. They are useful for rooting cuttings. Heat
                            mats are marketed as a propagation mat or seedling heat mats as well, but the function is the
                            same.</p>
                        <div class="price">Rs.1,250</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-hydroponic">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/hydroponic.jpg" alt="" width="50%">
                        <h3>Hydroponic Equipment</h3>
                        <h2>Description:</h2>
                        <p>Hydroponic systems end the unpredictability of growing plants outdoors and in the earth. Without
                            the mechanical resistance of the soil, seedlings can mature much faster. By eliminating
                            pesticides, hydroponics produce much healthier and high-quality fruits and vegetables. To grow
                            hydroponically, you need plants, a container, water, a way to anchor the plants, nutrients and a
                            light source. It is possible to grow vegetables hydroponically both outdoors and indoors. If
                            growing indoors, artificial lighting will help faster growth.</p>
                        <div class="price">Rs.12,616</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-seedstarter pots">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/seedstarter pots.jpg" alt="" width="50%">
                        <h3>Seed Starter Pots</h3>
                        <h2>Description:</h2>
                        <p>Peat pots create quick work of starting seeds for a spring garden. Peat pots make transplanting
                            seeds a snap since they break down in the soil. They're designed to break down and become part
                            of the soil. This means simple planting and no packaging to throw away or plastic to recycle.
                            Seed-starting mix is a soil-less medium used for growing plants from seed. It's a far better
                            choice for starting seeds than standard potting soil because it's finer and lighter, making it
                            easier for tiny seedling roots to grow.</p>
                        <div class="price">Rs.650</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-led strip">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/led strip.jpg" alt="" width="50%">
                        <h3>LED strip Grow Lights</h3>
                        <h2>Description:</h2>
                        <p>LED strips are very energy efficient and cost-effective compared to traditional light, making
                            them ideal for anyone looking for ways to save money on their indoor gardening projects without
                            sacrificing quality plant growth. With a wide range of colors of light available, they can even
                            provide unique color combinations that would otherwise be difficult to recreate with other types
                            of light solutions. The Full-Spectrum LED Grow Light has a spectrum that replicates the natural
                            sunlight. This allows plants to grow in all stages of their life cycle. The light is also
                            adjustable so that you can control the brightness and duration of light exposure.</p>
                        <div class="price">Rs.2,571</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-grow rack fan">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/grow rack fan.jpg" alt="" width="50%">
                        <h3>Grow Rack Fan</h3>
                        <h2>Description:</h2>
                        <p>Fans below the canopy help keep air refreshed within and below the canopy—this helps control
                            temperature and moisture and, as we said, this helps you reduce the Your exhaust fan plays a
                            similar role to the intake fan though instead of bringing new air in, it pushes the stale, warm
                            air out. As your grow tent will get warm and humid, it is essential that you have an exhaust fan
                            to help cool it down and maintain an optimal environment. accessibility of pests that prefer
                            higher humidity. It also helps dry out any moisture or water off the floor.</p>
                        <div class="price">Rs.1,749</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-coco coir brick">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/coco coir brick.jpg" alt="" width="50%">
                        <h3>coco coir brick</h3>
                        <h2>Description:</h2>
                        <p>Each 600g compressed block is simply soaked in water and within approx 30 minutes it “expands” to
                            produce approx 8L litres of compost. We supply 2 x 600g Blocks, which makes approx 16 litres of
                            PEAT FREE compost. Perfect to go in our Coir Pots 5 kilo block of coco coir. Because the texture
                            of the blocks is very firm, you will need to be prepared initially for the water to run across
                            the surface and down the sides of the block. Extracted from coconut husks, the coir fibers'
                            texture is the ideal balance giving your plant room to breathe and for roots to grow freely.
                            Often used for hydroponic cultivation and orchid growers as well. The compressed bricks are free
                            from pathogens and seeds and suitable for organic growers.</p>
                        <div class="price">Rs.990</div>
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
