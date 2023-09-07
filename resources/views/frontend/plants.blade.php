@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/plants.css') }}">
@endpush
@section('content')
    <!-- home section starts  -->

    <div class="home-section">
        <a href="" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="1" />
                    <button type="submit">
                        <img src="{{ asset('images/indrimg/indr2.jpeg') }}" alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Indoor Plants</p>
        </a>
        <a href="" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="2" />
                    <button type="submit">
                        <img src="{{ asset('images/outdrimg/outdr1.jpeg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>Outdoor Plants</p>
        </a>
        <a href="" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="3" />
                    <button type="submit">
                        <img src="{{ asset('images/flowrimg/flowr1.jpeg') }}" alt="Image 3">
                    </button>
                </form>
            </div>
            <p>Flowering Plants</p>
        </a>
        <a href="vegetable plant.html" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="4" />
                    <button type="submit">
                        <img src="{{ asset('images/vegimg/veg2.jpeg') }}" alt="Image 1">
                    </button>
                </form>
            </div>
            <p>Vegetable Plants</p>
        </a>
        <a href="" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="5" />
                    <button type="submit">
                        <img src="{{ asset('images/frutimg/frut1.jpeg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>Fruit Plants</p>
        </a>
        <a href="" class="circle-link">
            <div class="circle-image">
                <form method="GET" action="{{ route('plants') }}">
                    @csrf
                    <input type="hidden" name="id" value="6" />
                    <button type="submit">
                        <img src="{{ asset('images/oficimg/offic1.jpeg') }}" alt="Image 2">
                    </button>
                </form>
            </div>
            <p>Office Plants</p>
        </a>
    </div>
    <home class="banner-container">
        <div class="banner">
            <marquee DIRECTION="left" scrollamount="18" style="background: url({{ asset('images/images/header1.jpg') }});">
                <a>Happiness is having more and more Plants</a>
            </marquee>
        </div>
        </section>


        <div class="sidebar">
            <h1>Plants by location</h1>
            <ol>
                <li><a href="indoor.html">1-Indoor Plants</a></li>
                <ul>
                    <?php $indoor = DB::table('plants_types')
                        ->where('location', 'Indoor Plants')
                        ->get(); ?>
                    @foreach ($indoor as $type)
                        <form method="GET" action="{{ route('plants') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $type->id }}" />
                            <li>
                                <a href="#" class="link-as-button"
                                    onclick="event.preventDefault(); this.closest('form').submit();">{{ $type->name }}</a>
                            </li>
                        </form>
                    @endforeach
                </ul>
                <li><a href="outdoor.html">2-Outdoor Plants</a></li>
                <ul>
                    <?php $indoor = DB::table('plants_types')
                        ->where('location', 'Outdoor Plants')
                        ->get(); ?>
                    @foreach ($indoor as $type)
                        <form method="GET" action="{{ route('plants') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $type->id }}" />
                            <li>
                                <a href="#" class="link-as-button"
                                    onclick="event.preventDefault(); this.closest('form').submit();">{{ $type->name }}</a>
                            </li>
                        </form>
                    @endforeach
                </ul>
                <li><a href="office.html">3-Office Plants</a></li>
                <ul>
                        <?php $indoor = DB::table('plants_types')
                            ->where('location', 'Office Plants')
                            ->get(); ?>
                        @foreach ($indoor as $type)
                            <form method="GET" action="{{ route('plants') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $type->id }}" />
                                <li>
                                    <a href="#" class="link-as-button"
                                        onclick="event.preventDefault(); this.closest('form').submit();">{{ $type->name }}</a>
                                </li>
                            </form>
                        @endforeach
                </ul>
            </ol>
        </div>

        <!-- product section starts  -->

        <section class="product" id="product">
            <h1 class="heading">Products of Plants</h1>
            <div class="box-container">
                @foreach ($plants as $plant)
                    <div class="box" data-name="b-calathea">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                        </div>
                        <a class="underline" href="{{ route('plant.detail', [$plant->id])}}">
                        <img src="{{ asset('assets/plantsFiles') . '/' . $plant->photo }}" alt="">
                        <h3>{{ $plant->name }}</h3></a>
                        <div class="location"> Location:
                            <span>{{ DB::table('plants_categories')->where('id', $plant->cat_id)->pluck('name')->first() }}</span>
                        </div>
                        <div class="price">Rs.{{ $plant->price }}</div>
                        <form method="GET" action="{{ route('add.to.cart') }}">
                            @csrf
                            <input type="hidden" name="type" value="plant" />
                            <input type="hidden" name="id" value="{{ $plant->id }}" />
                            <a href="#" class="btn"
                            onclick="event.preventDefault(); this.closest('form').submit();">add to cart</a>
                        </form>
                    </div>
                @endforeach
            </div>
        </section>

        @include('layouts.welcome.footer')
        @push('frontJs')
            <script src="{{ asset('js/homescript.js') }}" defer></script>
            <script src="{{ asset('js/script.js') }}" defer></script>
        @endpush
    @endsection
