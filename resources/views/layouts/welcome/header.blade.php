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
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="fas fa-heart"></i></a>
                    <a href="login/login.html"><i class="fas fa-user-circle"></i></a>
                </ul>
            </div>
        </div>
        <!--nevegation  menu start-->
        <div class="header-3">
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
                                <a href="{{ route('growing.bags')}}">Growing Bags</a>
                                <a href="{{ route('steel.pots')}}">Steel Pots</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="gardendecore.html">our Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="events.html">Plants For Events</a>
                                <a href="tips and tricks.html">Gardening Trips & Tricks</a>
                                <a href="gardendecore.html">Garden Decoration</a>
                                <a href="birds cage.html">Bird Houses</a>
                                <a href="landscapinng.html">Landscaping</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="our polices.html">Our Polices</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="faq.html">FAQ</a>
                                <a href="return polices.html">Return Policy</a>
                                <a href="privacy policy.html">Privacy Policy</a>
                                <a href="clam&out of stock.html">Damage Calim & Out Of Stock</a>
                                <a href="delivery area and time.html">Delivery Area</a>
                                <a href="delivery area and time.html">Delivery Time</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="gardener.html">Staff</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="gardener.html">Gardener</a>
                                <a href="delivery person.html">Delivery person</a>
                                <a href="delivery person.html">Decore person</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="deals.html">Deals</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="deals.html">Occasion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header section ends -->
