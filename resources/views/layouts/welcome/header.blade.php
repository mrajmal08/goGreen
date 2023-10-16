    <!-- header section starts  -->
    <header>
        <div class="header-2">
            <ul class="social-network d-flex align-items-center p-0">
                <a href="/" class="logo"><i class="fas fa-seedling"></i></a>
                <h5>GoGreenNursery</h5>
            </ul>
            <form method="GET" action="{{ route('filter') }}" class="search-bar-container">
                @csrf
                <input type="search" name="search" id="search-bar" placeholder="search here...">
                {{-- <label for="search-bar" class="fas fa-search"></label> --}}
                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"> <label
                        for="search-bar" class="fas fa-search"></label></a>
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
        @if ($errors->any())
            <div style="    text-align: center;
        position: relative;
        top: -26px;
    }">
                <h3 style="color: red">{{ $errors->first() }}</h3>
            </div>
        @endif
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
                                <a href="{{ route('trips.tricks') }}">Gardening Tips & Tricks</a>
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
                                <a href="{{ route('damage.calm') }}">Damage Claim</a>
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
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header section ends -->
