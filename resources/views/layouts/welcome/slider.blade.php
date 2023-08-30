    <!-- home section navbar  -->

    <section class="homesection" id="homediv">
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/images/slider1.jpg') }});">
                        <div class="content">
                            <h3>Go Green Nursery Now </h3>
                            <a href="{{route('plants')}}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/images/slider2.jpg') }});">
                        <div class="content">

                            <h3>Plants make people happy</h3>
                            <a href="{{route('plants')}}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/images/slider3.jpg') }});">
                        <div class="content">

                            <h3>decorate your home now</h3>
                            <a href="{{ route('flowering.plants')}}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/images/slider4.jpeg') }});">
                        <div class="content">

                            <h3>Landscaping now</h3>
                            <a href="{{ route('seeds') }}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url({{ asset('images/images/slider5.jpeg') }});">
                        <div class="content">

                            <h3>Seeds now</h3>
                            <a href="{{ route('seeds') }}" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- home section navbar ends -->
