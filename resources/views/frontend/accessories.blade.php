@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/accessories.css') }}">
@endpush
@section('content')



<!-- home section starts  -->

<div class="home-section">
    <a href="gardening tool.html" class="circle-link">
      <div class="circle-image">
        <img src="{{ asset('images/accesrimg/garden tool 3.jpg')}}" alt="Image 3">
      </div>
      <p>Gardening Tool</p>
    </a>
    <a href="seed starter.html" class="circle-link">
        <div class="circle-image">
          <img src="{{ asset('images/accesrimg/seed starter 1.jpg')}}"alt="Image 1">
        </div>
        <p>Seed Starter</p>
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
    <h1>Accessories</h1>
    <ol>
        <ul>
           <li><a href="Axe accessories.html">Axe</a></li>
           <li><a href="Gardening Gloves.html">Gardening Gloves</a></li>
           <li><a href="Boots accesseries.html">Boots</a></li>
           <li><a href="Tap accesseries.html">Tap</a></li>
           <li><a href="Recyclebin accessries.html">Recyclebin</a></li>
           <li><a href="Gardener accereies.html">Gardener</a></li>
           <li><a href="Fence accesseries.html">Fence </a></li>
           <li><a href="Grass accesseries.html">Grass</a></li>
           <li><a href="Hedge shears accesseries.html">Hedge shears</a></li>
           <li><a href="Flower pot accesseries.html">Flower pot</a></li>
        </ul>
    </ol>
</div>



<!-- product section starts  -->

<section class="product" id="product">


    <h1 class="heading">Gardening Tool</h1>

    <div class="box-container">

        <div class="box" data-name="b-watering can">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="{{ asset('images/accesrimg/watering can.jpg')}}" alt="">
            <h3>Watering Can</h3>
            <div class="price">Rs.150</div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-Rake">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/Rake.jpg" alt="">
            <h3>Rake</h3>
            <div class="price">Rs.2250</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-spade">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/spade.jpg" alt="">
            <h3>Spade</h3>
            <div class="price">Rs.950</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-seedling tray">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/seedling tray.jpg" alt="">
            <h3>Seedling Tray</h3>
            <div class="price">Rs.1840</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-plastic bag">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/plastic bag.jpg" alt="">
            <h3>Plastic Bag</h3>
            <div class="price">Rs.150</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-garden fork">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/garden fork.jpg" alt="">
            <h3>Garden Fork</h3>
            <div class="price">Rs.390</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-wheelbarrow">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/wheelbarrow.jpg" alt="">
            <h3>Wheelbarrow</h3>
            <div class="price">Rs.10,625</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-trowel">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/trowel.jpg" alt="">
            <h3>Trowel</h3>
            <div class="price">Rs.1898</div>

            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box" data-name="b-garden hose">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="accesrimg/garden hose.jpg" alt="">
            <h3>Garden Hose</h3>
            <div class="price">Rs.4800</div>

            <a href="#" class="btn">add to cart</a>
        </div>



        <div class="box-preview">

            <div class="preview" data-target="b-watering can">
               <i class="fas fa-times"></i>
               <img src="accesrimg/watering can.jpg" alt="" width="50%">
               <h3>watering can</h3>
               <h2>Description:</h2>
               <p>A watering can (or watering pot) is a portable container, usually with a handle and a funnel, used to water plants by hand. It has been in use since at least A.D. 79 and has since seen many improvements in design. Apart from watering plants, it has varied uses, as it is a fairly versatile tool. Easier to water Houseplants: These cans are utilitarian and portable, thus making them convenient to use around your home. For your houseplants, as they are specifically made for indoor plants, these will hold any amount of water. It will be easy to pour water exactly where you want it.</p>
               <div class="price">Rs.150</div>
               <div class="buttons">
                  <a href="#" class="cart">add to cart</a>
               </div>
            </div>

            <div class="preview" data-target="b-Rake">
                <i class="fas fa-times"></i>
                <img src="accesrimg/Rake.jpg" alt="" width="50%">
                <h3>Rake</h3>
                <h2>Description:</h2>
                <p>Rake, farm implement consisting of a row of straight or curved teeth of metal or wood attached to a bar or frame. It is used for gathering hay or grain into piles; for clearing fields, lawns, and yards; and for stirring and spreading soil. Horse-drawn rakes first appeared in the early 19th cent. but were not used generally until later. Of the several types of modern power-drawn hay rakes, the side-delivery rakes, which gather hay into continuous windrows by a rolling action, are the most popular.A rake is a garden tool consisting of a row of metal or wooden teeth attached to a long handle.</p>
                <div class="price">Rs.2250</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-spade">
                <i class="fas fa-times"></i>
                <img src="accesrimg/spade.jpg" alt="" width="50%">
                <h3>spade</h3>
                <h2>Description:</h2>
                <p>The garden spade is the workhorse of many digging jobs. If your garden plans include any project involving digging, you'll want to use a good spade. With its sharp, straight blade and low angle you can easily use your weight to push it down into the soil. Below are descriptions and tips for five of the tough jobs a spade is useful for: turning soil, creating edges, removing sod, digging up or dividing plants, and digging holes. a tool for digging, having an iron blade adapted for pressing into the ground with the foot and a long handle commonly with a grip or crosspiece at the top, and with the blade usually narrower and flatter than that of a shovel. some implement, piece, or part resembling this.</p>
                <div class="price">Rs.950</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-seedling tray">
                <i class="fas fa-times"></i>
                <img src="accesrimg/seedling tray.jpg" alt="" width="50%">
                <h3>Seedling Tray</h3>
                <h2>Description:</h2>
                <p> Now in general, all seed trays serve the same sort of purpose- they hold your soil in place so that you can grow healthy transplants for your flower garden. By planting your seeds in a single tray, it makes it easier to treat your seedlings all the same as they're in the same container. A tray that once filled with soil or compost is used for planting seeds in. A seed tray allows you to plant many seeds together in one container. This makes it much easier to water them and transport them. What is this? After the seeds germinate, the seed tray holds seedlings as they grow, until they are ready for transplant outdoors or into larger containers.</p>
                <div class="price">Rs.1840</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
             </div>

             <div class="preview" data-target="b-plastic bag">
                <i class="fas fa-times"></i>
                <img src="accesrimg/plastic bag.jpg" alt="" width="50%">
                <h3>Plastic Bag</h3>
                <h2>Description:</h2>
                <p>Plants are protected from extreme weather conditions and other outside influences. Better Growth: A poly nursery bag creates a greenhouse effect, that stimulates growth. No Root Rot: The bags provide ample drainage so roots won't rot. Oxygen: Vent holes allow for plenty of oxygen so the plant can breathe. A poly nursery bag creates a greenhouse effect, that stimulates growth. They are used for food storage, packaging and transporting goods and for waste disposal among many other uses. A plastic bag or polybag is defined as a container made of a thin, flexible plastic film which is open at one end. Although in any size, it is often called a "sack" if it can hold 25 kg / 50 lb </p>
                <div class="price">Rs.150</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-garden fork">
                <i class="fas fa-times"></i>
                <img src="accesrimg/garden fork.jpg" alt="" width="50%">
                <h3>Garden Fork</h3>
                <h2>Description:</h2>
                <p>A garden fork is used similarly to a spade in loosening and turning over soil. Its tines allow it to be pushed more easily into the ground, and it can rake out stones and weeds and break up clods, it is not so easily stopped by stones, and it does not cut through weed roots or root-crops. Garden forks were originally made of wood, but the majority are now made of forged carbon steel or stainless steel. They are often used for digging up weeds, hand forks are sometimes referred to as 'weeding forks' but they are suited to many jobs around the garden, such as preparing planting holes, transplanting, aerating and mixing additives into your soil and are indispensable for levelling around border edges and tidying</p>
                <div class="price">Rs.390</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-wheelbarrow">
                <i class="fas fa-times"></i>
                <img src="accesrimg/wheelbarrow.jpg" alt="" width="50%">
                <h3>Wheelbarrow</h3>
                <h2>Description:</h2>
                <p>A wheelbarrow is a garden tool that's used to transport piles of dirt, weeds, or any other small load. If you have a big pile of sand to move, we recommend using a wheelbarrow. Most wheelbarrows are little carts with two long handles and one wheel in front, designed so that one person can more easily move a heavy load on their own. A wheelbarrow is a garden tool that's used to transport piles of dirt, weeds, or any other small load. If you have a big pile of sand to move, we recommend using a wheelbarrow.</p>
                <div class="price">Rs.10,650</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
            </div>

            <div class="preview" data-target="b-trowel">
                <i class="fas fa-times"></i>
                <img src="accesrimg/trowel.jpg" alt="" width="50%">
                <h3>Trowel</h3>
                <h2>Description:</h2>
                <p>A trowel is a big garden tool which you use for digging small holes or removing weeds. Garden trowel, a tool with a pointed, scoop-shaped metal blade with plastic handle It is used for breaking up earth, digging small holes, especially for planting and weeding, mixing in fertilizer or other additives, and transferring plants to pots. Garden Trowel Part Four: Maintenance And Care Cleaning. To clean the trowel you will need a bucket of water, an old rag.</p>
                <div class="price">Rs.1,898</div>
                <div class="buttons">
                   <a href="#" class="cart">add to cart</a>
                </div>
             </div>

             <div class="preview" data-target="b-garden hose">
                <i class="fas fa-times"></i>
                <img src="accesrimg/garden hose.jpg" alt="" width="50%">
                <h3>Garden Hose</h3>
                <h2>Description:</h2>
                <p>A garden hose is used to water plants in a garden or lawn, or to convey water to a sprinkler for the same purpose. A tough hose is used to water crops in agriculture for drip irrigation. A fire hose is used by firefighters to convey water to the site of a fire. Industrial hoses for agricultural use help transfer a wide range of materials, including water, harvest materials like grains and seeds, manures, fertilizers, pesticides, herbicides, and more.</p>
                <div class="price">Rs.4,800</div>
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
