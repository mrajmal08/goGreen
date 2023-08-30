@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/gardeningtool.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="pitch fork accesseries.html" class="circle-link">
            <div class="circle-image">
                <img src="{{ asset('images/accesrimg/pitch fork.png')}}" alt="Image 3">
            </div>
            <p>Pitch Fork</p>
        </a>
        <a href="Hedge Trimmer accesseries.html" class="circle-link">
            <div class="circle-image">
                <img src="{{ asset('images/accesrimg/hedge trimmer.jpg')}}"alt="Image 1">
            </div>
            <p>Hedge Trimmer</p>
        </a>
        <a href="tiller accesseries.html" class="circle-link">
            <div class="circle-image">
                <img src="{{ asset('images/accesrimg/tiller.jpg')}}" alt="Image 2">
            </div>
            <p>Tiller</p>
        </a>
    </div>

    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Let's Start Gardening Today</a>
            </marquee>
        </div>
        </section>



        <div class="sidebar">
            <h1>Gardening Tools</h1>
            <ol>
                <ul>
                    <li><a href="Apron accesseries.html">Apron</a></li>
                    <li><a href="ladder accesseries.html">Ladder</a></li>
                    <li><a href="shed accesseries.html">Shed</a></li>
                    <li><a href="Grass cutter accesseries.html">Grass cutter</a></li>
                    <li><a href="bucket accesseries.html">Bucket</a></li>
                    <li><a href="earthworms accesseries.html">Earthworms</a></li>
                    <li><a href="Scythe accesseries.html">Scythe</a></li>
                    <li><a href="Fertilizer accesseries.html">Fertilizer</a></li>
                    <li><a href="seed accesseries.html">Seeds </a></li>
                    <li><a href="Hedge Trimmer accesseries.html">Hedge Trimmer</a></li>
                </ul>
            </ol>
        </div>




        <!-- product section starts  -->

        <section class="product" id="product">
            <h1 class="heading">Gardening Tool</h1>
            <div class="box-container">
                <div class="box" data-name="b-lawn mower">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="{{ asset('images/ccesrimg/lawn mower.jpg')}}" alt="">
                    <h3>Lawn Mower</h3>
                    <div class="price">Rs.14,999</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-loopers">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <img src="accesrimg/loopers.PNG" alt="">
                    <h3>Loopers</h3>
                    <div class="price">Rs.4500</div>
                    <a href="#" class="btn">add to cart</a>

                </div>

                <div class="box" data-name="b-scissor">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="{{ asset('images/accesrimg/scissor.jpg')}}" alt="">
                    <h3>Scissor</h3>
                    <div class="price">Rs.528</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-leaf blower">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/leaf blower.jpg" alt="">
                    <h3>Leaf Blower</h3>
                    <div class="price">Rs.7,140</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-saw">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/saw.jpg" alt="">
                    <h3>Saw</h3>
                    <div class="price">Rs.3,999</div>

                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box" data-name="b-hand hoe">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/hand hoe.png" alt="">
                    <h3>Hand Hoe</h3>
                    <div class="price">Rs.499</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-sickle">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/sickle.jpg" alt="">
                    <h3>Sickle</h3>
                    <div class="price">Rs.1500</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-fork">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/fork.jpg" alt="">
                    <h3>Fork</h3>
                    <div class="price">Rs.390</div>

                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="box" data-name="b-weeder">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                    </div>
                    <img src="accesrimg/weeder.jpg" alt="">
                    <h3>weeder</h3>
                    <div class="price">Rs.1,888</div>

                    <a href="#" class="btn">add to cart</a>
                </div>


                <div class="box-preview">

                    <div class="preview" data-target="b-lawn mower">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/lawn mower.jpg" alt="" width="50%">
                        <h3>Lawn Mower</h3>
                        <h2>Description:</h2>
                        <p>A lawn mower is a machine used to mow grass or plants. This machine is commonly used to tidy up
                            the garden and also to clear the fields from grass or other types of grass. The commonly used
                            lawn mowers are made of thin, hard and very sharp iron plates, so they can easily mow the grass.
                            Your lawn mower can help fight weed growth and bring back your yard in tip-top shape. Every time
                            you use your machine, you'll cut everything in the surrounding area, including weeds and grass.
                            However, as grass recovers faster than weeds, the lush greenery of your lawns will return
                            quicker than you think.</p>
                        <div class="price">Rs.14,999</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-loopers">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/loopers.PNG" alt="" width="50%">
                        <h3>Loopers</h3>
                        <h2>Description:</h2>
                        <p>Loopers are the larvae (caterpillars) of various moth species. The larvae are called 'loopers'
                            because of the way they move. Larvae grip the surface with their forelegs and arch their back as
                            they move their hind legs up to just behind their forelegs, creating the 'loop'. Bacillus
                            thuringiensis and moderately selective insecticides (such as chlorantraniliprole and spinetoram)
                            are very effective against cabbage looper and imported cabbageworm, especially when applied to
                            early-instar (young) caterpillars.</p>
                        <div class="price">Rs.4,500</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-scissor">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/scissor.jpg" alt="" width="50%">
                        <h3>scissor</h3>
                        <h2>Description:</h2>
                        <p>A pair of scissors consists of a pair of metal blades pivoted so that the sharpened edges slide
                            against each other when the handles (bows) opposite to the pivot are closed. Scissors are used
                            for cutting various thin materials, such as paper, cardboard, metal foil, cloth, rope, and
                            wire.Pruning shears, also called hand pruners (in American English), or secateurs (in British
                            English), are a type of scissors used for plants. They are strong enough to prune hard branches
                            of trees and shrubs, sometimes up to two centimetres thick.</p>
                        <div class="price">Rs.528</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-leaf blower">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/leave blower.PNG" alt="" width="50%">
                        <h3>Leaf Blower</h3>
                        <h2>Description:</h2>
                        <p>A leaf blower is an ideal gardening tool to quickly move debris such as leaves and grass cuttings
                            from a difficult to access area quickly or raking up debris speedily from your garden or outdoor
                            places. One of the quickest and easiest ways to moving out waste is to invest in a leaf blower.
                            In early autumn a leaf blower becomes a gardener's best friend providing a simple and effective
                            way of moving and collecting fallen leaves and garden debris. A leaf blower, commonly known as a
                            blower, is a device that propels air out of a nozzle to move debris such as leaves and grass
                            cuttings. Leaf blowers are powered by electric or gasoline motors.</p>
                        <div class="price">Rs.7,140</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-saw">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/saw2.jpg" alt="" width="50%">
                        <h3>Saw</h3>
                        <h2>Description:</h2>
                        <p>The farming industry requires a lot of different tools for the wide range of projects that are
                            needed to be completed on farms. A few tools that are used in farming are saws, pruners, and
                            cable cutters. In this blog we will be going over each of these tools and how they are used in
                            farming applications. Continue reading to learn more about saw, pruners, and wire cutters For
                            farming, both hand saws and pole saws are useful tools. Hand saws are commonly used to cut
                            branches and cutting out small roots growing in unwanted places, such as the garden or in crops.
                        </p>
                        <div class="price">Rs.3,999</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-hand hoe">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/hand hoe.png" alt="" width="50%">
                        <h3>Hand Hoe</h3>
                        <h2>Description:</h2>
                        <p>A hoe is an ancient and versatile agricultural and horticultural hand tool used to shape soil,
                            remove weeds, clear soil, and harvest root crops. Shaping the soil includes piling soil around
                            the base of plants (hilling), digging narrow furrows (drills) and shallow trenches for planting
                            seeds or bulbs. Weeding with a hoe includes agitating the surface of the soil or cutting foliage
                            from roots, and clearing the soil of old roots and crop residues. Hoes for digging and moving
                            soil are used to harvest root crops such as potatoes.</p>
                        <div class="price">Rs.499</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-sickle">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/sickle.jpg" alt="" width="50%">
                        <h3>Sickle</h3>
                        <h2>Description:</h2>
                        <p>Sickle is one of the most common hand tools used for harvesting of the crops, grass and cutting
                            of other vegetative matters. It consists of curved steel edged blade fixed to the wooden handled
                            the cutting edge may be plain or serrated depending upon the design. The curvature of the blade
                            differs widely in plain edged and serrated sickles. The blade is fabricated from medium carbon
                            or high carbon steel and hardened to resist wear. Manganese steel, tool and alloy steel can also
                            be used to produce better quality sickles which have more than the sickles fabricated from the
                            plain carbon steel. The blade has a knife section and thickness reduces towards the cutting
                            edge.</p>
                        <div class="price">Rs.1500</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-fork">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/fork.jpg" alt="" width="50%">
                        <h3>Fork</h3>
                        <h2>Description:</h2>
                        <p>Fork, is a tool for digging. It is used for loosening soil in gardening and farming. It is used
                            similarly to a spade, but it can be pushed more easily into the ground. It does not cut through
                            plant roots. Garden forks were made of wood, but now most are made of steel. Garden forks are
                            slightly different from pitchforks. Their tines are usually shorter and thicker and closer
                            together. A garden fork is used similarly to a spade in loosening and turning over soil. Its
                            tines allow it to be pushed more easily into the ground, and it can rake out stones and weeds
                            and break up clods, it is not so easily stopped by stones, and it does not cut through weed
                            roots or root-crops.</p>
                        <div class="price">Rs.390</div>
                        <div class="buttons">
                            <a href="#" class="cart">add to cart</a>
                        </div>
                    </div>

                    <div class="preview" data-target="b-weeder">
                        <i class="fas fa-times"></i>
                        <img src="accesrimg/weeder.jpg" alt="" width="50%">
                        <h3>Weeder</h3>
                        <h2>Description:</h2>
                        <p>A mechanical weeder is a hand-operated device that allows quick and efficient weeding of
                            line-sown or line-transplanted rice. It can cut, uproot and bury weeds. It should be followed by
                            hand weeding of the remaining weeds very close to the rice plants. Several types of lowland and
                            upland specific weeders are available. A hand weeder is small, about the size of a regular
                            garden trowel. It has a very similar handle in size and shape. Instead of a trowel's head,
                            however, the handle is attached to a long, thin metal pole that ends in two forking tines that
                            are roughly 1 inch (2.5 cm.) long.</p>
                        <div class="price">Rs.1,888</div>
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
