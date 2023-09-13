    <!-- header section starts  -->
    <header>
        <div class="header-2">
            <ul class="social-network d-flex align-items-center p-0">
                <a href="/" class="logo"><i class="fas fa-seedling"></i></a>
                <h5>GoGreenNursery</h5>
            </ul>
            <form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fas fa-search"></label>

            </form>
            <div class="icons">
                <ul class="social-network d-flex align-items-center p-0">
                    <a href="{{ route('cart') }}" style="text-decoration: none;"><i
                            class="fas fa-shopping-cart"></i><span
                            style="    font-size: 15px;
                        position: relative;
                        bottom: 19px;">{{ count((array) session('cart')) }}</span></a>

                    <a href="{{ route('wishlist') }}" style="text-decoration: none;"><i class="fas fa-heart"></i><span
                            style="    font-size: 15px;
                    position: relative;
                    bottom: 19px;
                    text-decoration: none;">{{ count((array) session('wishlist')) }}</span></a>

                    {{-- <a href="#"><i class="fas fa-heart"></i></a> --}}
                    @if (auth()->check())
                        <form action="/logout" method="post">
                            @csrf
                            <a href="" onclick="event.preventDefault(); this.closest('form').submit();"><i
                                    class="fas fa-sign-out-alt"></i></a>
                        </form>
                    @else
                        <a href="{{ route('login') }}"><i class="fas fa-user-circle"></i></a>
                    @endif

                </ul>
            </div>
        </div>
           <div class="div-list"
           style="position: absolute;
       top: 69px;
       left: 0;
       right: 0;
       width: 200px; /* Adjust the width as needed */
       margin: 0 auto;
       text-align: center;
       z-index: 1;">
            <div class="div-item">
                <h2>Item 1</h2>
                <p>Description of item 1 goes here.</p>
            </div>
            <div class="div-item">
                <h2>Item 2</h2>
                <p>Description of item 2 goes here.</p>
            </div>
            <div class="div-item">
                <h2>Item 3</h2>
                <p>Description of item 3 goes here.</p>
            </div>
            <!-- Add more div items as needed -->
        </div>
        <!--nevegation  menu start-->
        <div class="header-3" style=" display: block;">
            <div id="menu-bar" class="fas fa-bars"></div>
            <nav class="nav-menu">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children">
                        <div class="box-container"></div>
                        <a href="/">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('plants') }}">Plants</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('types.of.plants') }}">Types of plants</a>
                                <a href="{{ route('plant.by.season') }}">Plants By Season</a>
                                <a href="{{ route('plant.by.location') }}">Plants By Location</a>
                                <a href="{{ route('flowering.plants') }}">Flowering Plants</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('seeds') }}">Seeds</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('flower.seeds') }}">Flower Seeds</a>
                                <a href="{{ route('vegetable.seeds') }}">Vegetable Seeds</a>
                                <a href="{{ route('fruit.seeds') }}">Fruit Seeds</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('soil.fertilizer') }}">Soil&fertilizer</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('soil.fertilizer') }}">Organic fertilizer</a>
                                <a href="{{ route('spray') }}">Spray</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('accessories') }}">Accessories</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('gardening.tools') }}">Gardening Tools</a>
                                <a href="{{ route('seed.starter') }}">Seed Starter</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('pots') }}">Pots</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('types.of.pots') }}">Types of Pots</a>
                                <a href="{{ route('growing.bags') }}">Growing Bags</a>
                                <a href="{{ route('steel.pots') }}">Steel Pots</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('garden.core') }}">our Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('events') }}">Plants For Events</a>
                                <a href="{{ route('trips.tricks') }}">Gardening Trips & Tricks</a>
                                <a href="{{ route('garden.core') }}">Garden Decoration</a>
                                <a href="{{ route('bird.cage') }}">Bird Houses</a>
                                <a href="{{ route('landscaping') }}">Landscaping</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('privacy.policy') }}">Our Polices</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('faq') }}">FAQ</a>
                                <a href="{{ route('return.policy') }}">Return Policy</a>
                                <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                                <a href="{{ route('damage.calm') }}">Damage Calim & Out Of Stock</a>
                                <a href="{{ route('delivery.area.time') }}">Delivery Area and Time</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('gardener') }}">Staff</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('gardener') }}">Gardener</a>
                                <a href="{{ route('delivery.person') }}">Delivery person</a>
                                <a href="{{ route('delivery.person') }}">Decore person</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('deals') }}">Deals</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('deals') }}">Occasion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header section ends -->
