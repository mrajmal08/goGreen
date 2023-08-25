@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/gardener.css') }}">
@endpush
@section('content')


<!-- home section starts  -->

<home class="homesection" id="homediv">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url({{ asset('images/staff/staff.png')}});">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- home section ends -->

<!--Product detail start-->

<section class="product-container">

        <div class="content">
            <h1 class="heading">Gardeners</h1>
        </div>
            <div class="description">
               <p> A person whose hobby  or occupation is developing blossoms,trees .... is known as a gardener.  If you want homegrown blossoms and veggies, get to know a gardener.</p>
        <p> If you develop vegetables professionally, you're known as a farmer,but if you design, tend, or care for a blossoms garden, you're a gardener. Establishing anything on a limited scale, in your own lawn,  also makes you a gardener.</p>


               <div class="content">
        <h1 class="heading">Gardener responsibilities include:</h1>
    </div>
    <div class="description">
        <p>The responsibilities of a gardener can vary depending on the specific job or context, but generally, a gardener is responsible for the care and maintenance of plants, flowers, trees, and other aspects of a garden or outdoor space. Here are some common responsibilities of a gardener:</p>

        <h3> 1.Planting and cultivating:</h3>
        <p> Gardeners are responsible for planting and sowing seeds, bulbs, or young plants in appropriate locations, taking into consideration factors like soil conditions, sunlight, and watering needs. They may also be involved in transplanting, pruning, and fertilizing to promote healthy growth.</p>
        <h3> 2. Soil preparation and maintenance:</h3>
        <p> Gardeners prepare the soil by removing weeds, loosening it, and adding compost or other organic matter to improve its quality. They may also perform soil testing to determine its nutrient content and pH level, making adjustments as necessary.</p>
        <h3> 3. Watering and irrigation: </h3>
        <p> Gardeners ensure that plants receive adequate water by monitoring moisture levels, adjusting watering schedules, and using irrigation systems effectively. They may also be responsible for water conservation practices to optimize water usage.</p>
        <h3>4. Pest and disease management:</h3>
        <p> Gardeners identify and control pests, such as insects or rodents, that may damage plants. They may use organic or chemical methods to prevent or manage pest infestations. Additionally, gardeners may diagnose and treat plant diseases, implementing appropriate measures to maintain plant health.</p>
        <h3>5. Pruning and trimming:</h3>
        <p> Gardeners trim and prune plants to promote growth, maintain shape, remove dead or diseased branches, and enhance their aesthetic appeal. This includes shrubs, hedges, and sometimes trees.</p>
        <h3> 6. Lawn maintenance:</h3>
        <p> If there is a lawn in the garden, gardeners are responsible for mowing, edging, and fertilizing it to ensure it remains healthy and well-groomed. They may also address weed control and overseeding as needed.</p>
        <h3>7. Seasonal care:</h3>
        <p>Gardeners adapt their tasks according to the changing seasons. This involves planting seasonal flowers or vegetables, preparing plants for winter or adverse weather conditions, and performing fall cleanup or spring rejuvenation tasks.</p>
        <h3>8.  Equipment and tool maintenance:</h3>
        <p> Gardeners maintain and clean their tools and equipment, ensuring they are in good working order. This includes sharpening blades, oiling machinery, and replacing worn-out or broken tools.</p>

        <h3>9. Landscape design and planning: </h3>
        <p>In some cases, gardeners are involved in designing and planning the layout of gardens or outdoor spaces. They may suggest suitable plant species, create planting schemes, and recommend landscaping features to achieve desired aesthetics and functionality.</p>

        <h3>10. Client communication:</h3>
        <p> If working for clients or in a team, gardeners may need to communicate with customers, supervisors, or other team members. This involves discussing plant care plans, addressing client concerns, and providing recommendations or advice.</p>
        <p>It's worth noting that the responsibilities of a gardener can vary depending on the scale and nature of the garden. Some gardeners may specialize in specific areas, such as vegetable gardens, ornamental gardens, or landscaping, while others may have a broader range of tasks in maintaining large estates or public parks. </p>
        <p> Transform your garden into a breathtaking oasis with our expert decorating services. Our team of skilled designers will meticulously craft a captivating landscape, combining vibrant flora, elegant hardscaping, and enchanting lighting to create a haven of serenity in your backyard. Let us bring your vision to life and turn your garden into a captivating masterpiece that will leave you and your guests in awe.</p>

    </div>

</section>
<!--Product deatil end-->

<!--icons section starts  -->
<section class="icons-container">

    <div class="icon">
        <img src="{{ asset('images/images/icon1.png')}}" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping on order</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon2.png')}}" alt="">
        <div class="content">
            <h3>100% Money Back</h3>
            <p>You’ve 30 days to Return</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon3.png')}}" alt="">
        <div class="content">
            <h3>Payment Secure</h3>
            <p>100% secure payment</p>
        </div>
    </div>
    <div class="icon">
        <img src="{{ asset('images/images/icon4.png')}}" alt="">
        <div class="content">
            <h3>Support 24/7</h3>
            <p>Contact us anytime</p>
        </div>
    </div>

</section>


@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
