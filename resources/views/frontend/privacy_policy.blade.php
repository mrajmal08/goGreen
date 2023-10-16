@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/privacypolicy.css') }}">
@endpush
@section('content')



<!--Product detail start-->

<section class="product-container">
     <div class="content">
        <h3 class="heading">Privacy policy</h3>
    </div>
    <div class="description">
        <p>This privacy policy has been gathered to more readily serve the people who are worried about how their 'Actually Recognizable Data' is being utilized on the web. what's more, data security, is data that can be utilized all alone or with other data to recognize, contact, or find a solitary individual, or to distinguish a person in setting. Kindly read our security strategy cautiously to get a reasonable comprehension of how we gather, use, safeguard or in any case handle your By and by Recognizable Data as per our site.</p>
    </div>
</section>
<section class="product-container">
    <div class="content">
        <h3 class="heading">What information we collect when you order and why?</h3>
    </div>
    <div class="description">
        <p>When you buy goods from us, you are entering into a contract with us. To effectively process your order, we will ask you to provide some personal information such as:</p>
        <p>1. Full name </p>
        <p>2. Address</p>
        <p>3. Contact numbers</p>
        <p>4. Email address.</p>
    </div>
</section>

<!--Product deatil end-->

<!--Product detail start-->

<!--<section class="product-container">

    <div class="content">
        <h3 class="heading">How would we utilize your data?</h3>
    </div>
        <div class="description">
            <p>We might utilize the data we gather from you when you register, make a buy, pursue our pamphlet, answer a review or promoting correspondence, surf the site, or utilize specific other site highlights in the accompanying ways: </p>
            <p>1. To customize your experience and to permit us to convey the kind of happy and item contributions in which you are generally intrigued.</p>
            <p>2. To work on our site to more readily serve you.</p>
            <p>3. To permit us to more readily support you in answering your client care demands.</p>
            <p>4. To regulate a challenge, advancement, study or other site highlight.</p>
            <p>5. To deal with your exchanges rapidly.</p>
            <p>6. To request appraisals and audits of administrations or items.</p>
            <p>7. To follow up with them after correspondence (live chat, email or phone inquiries)</p>
        </div>

</section>-->

<!--Product deatil end-->

<!--Product detail start-->

<section class="product-container">

    <div class="content">
        <h3 class="heading">Who we share your information with and why?</h3>
    </div>
        <div class="description">
            <p>Go Green Nursery  works with a number of trusted suppliers, in order to provide you the high quality goods and services you expect from us such as delivery companies. </p>
            <h3> Deliver / Decore person: </h3>
            <p>1. We works with a number of trusted person who supply products and give services on our behalf.We will only retain the minimum amount of your personal information required to fulfill orders or provide services on our behalf.</p>
            <p>2.In order for you to receive your goods,Go Green Nursery works with several delivery persons. We only share limited information with them to ensure safe delivery of your items.</p>
        </div>

</section>



@include('layouts.welcome.footer')
@push('frontJs')

    <script src="{{ asset('js/homescript.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
@endpush
@endsection
