@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/soilfertilizer.css') }}">
@endpush
@section('content')


<div class="sidebar">
    <h1>Soil and Fertilizer</h1>
    <ol>
        <ul>
           <li><a href="DAP fertilizer.html">DAP fertilizer</a></li>
           <li><a href="Crop residuess.html">Crop residuess</a></li>
           <li><a href="Organo-mineral fertilizer.html">Organo-mineral fertilizer</a></li>
           <li><a href="Ammunium Sulfate Fertilizer.html">Ammunium Sulfate Fertilizer</a></li>
           <li><a href="spray.html">spray</a></li>
           <li><a href="Amide Nitrogen Fertilizer.html">Amide Nitrogen Fertilizer</a></li>
           <li><a href="Nitrate Nitrogen Fertilizer.html">Nitrate Nitrogen Fertilizer </a></li>
           <li><a href="Ammunium Chloride.html">Ammunium Chloride</a></li>
           <li><a href="Water Soluable Phosphorous Fertilizer.html">Water Soluable Phosphorous Fertilizer </a></li>
           <li><a href="Potssium Fertilizar.html">Potssium Fertilizar</a></li>
        </ul>
     </ol>
</div>








<!-- product section starts  -->

<section class="product" id="product">


    <h1 class="heading">Soil and Fertilizer</h1>

    <div class="box-container">

        <div class="box" data-name="b-DAP fertilizer">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="soilfertimg/DAP fertilizer.jpg" alt="">
            <h3>DAP Fertilizer</h3>
            <div class="price">Rs.12,000 </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-soil and fertilizer">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="soilfertimg/soil and fertilizer.jpg" alt="">
            <h3>Fertilizer</h3>
            <div class="price">Rs.12,175</div>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box" data-name="b-spray">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="soilfertimg/spray.jpeg" alt="">
            <h3>Spray</h3>
                <div class="price">Rs.2,000</div>

            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box" data-name="b-soil1">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="soilfertimg/soil1.jpeg" alt="">
            <h3>Soil</h3>

            <div class="price">Rs.599</div>

            <a href="#" class="btn">add to cart</a>
        </div>


        <div class="box" data-name="b-soil">

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>

            </div>
            <img src="soilfertimg/soil.jpeg" alt="">
            <h3>Soil and Fertilizer</h3>

            <div class="price">Rs.11,000</div>

            <a href="#" class="btn">add to cart</a>
        </div>




    <div class="box-preview">

        <div class="preview" data-target="b-DAP fertilizer">
           <i class="fas fa-times"></i>
           <img src="soilfertimg/DAP fertilizer.jpg" alt="" width="50%">
           <h3>DAP Fertilizer</h3>
           <h2>Description:</h2>
           <p>Produced from the reaction of ammonia and phosphoric acid, Di-Ammonium phosphate (DAP) is one of the most widely used phosphate fertilizer in agriculture across the world today. DAP is composed of 18% Nitrogen and 46% Phosphorus. DAP is alkaline with a high pH, exceeding 7.5. The initial pH of DAP solution is basic and can influence the microsite reactions of phosphate and soil OM .</p>
           <div class="price">Rs.12,000</div>
           <div class="buttons">
              <a href="#" class="cart">add to cart</a>
           </div>
        </div>

        <div class="preview" data-target="b-soil and fertilizer">
            <i class="fas fa-times"></i>
            <img src="soilfertimg/soil and fertilizer.jpg" alt="" width="50%">
            <h3>Fertilizer</h3>
            <h2>Description:</h2>
            <p>Fertilizer, natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. A fertiliser is a natural or artificial substance containing chemical elements (such as Nitrogen (N), Phosphorus (P) and Potassium (K)) that improve growth and productiveness of plants. Some synonyms include the terms "enrichment" or "plant nutrient.</p>
            <div class="price">Rs.12,175</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-spray">
            <i class="fas fa-times"></i>
            <img src="soilfertimg/spray.jpeg" alt="" width="50%">
            <h3>Spray</h3>
            <h2>Description:</h2>
            <p> Sprays and dusts are used to control insects, mites, and fungous and bacterial diseases of plants; insects, such as lice and flies, on animals; and weeds, by means of chemical weed killers or herbicides. We all know plants need water to survive, and we tend to dispense that water from a faucet or watering can—not from the nozzle of a spray can. But gently misting some houseplants offers a bevy of benefits that will help them thrive over the long haul. So, read on to find out why you might want to add regular misting to your plant care routine, as well as the correct way to do it.</p>
            <div class="price">Rs.2,000</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="b-soil1">
            <i class="fas fa-times"></i>
            <img src="soilfertimg/soil1.jpeg" alt="" width="50%">
            <h3>Soil</h3>
            <h2>Description:</h2>
            <p> Soil is the loose surface material that covers most land. It consists of inorganic particles and organic matter. Soil provides the structural support to plants used in agriculture and is also their source of water and nutrients. Soils vary greatly in their chemical and physical properties. Soil provides plants a foothold for their roots and holds the necessary nutrients for plants to grow. Soil filters the rainwater and regulates the discharge of excess rainwater, preventing flooding. It also buffers against pollutants, thus protecting groundwater quality.</p>
            <div class="price">Rs.599</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>


        <div class="preview" data-target="b-soil">
            <i class="fas fa-times"></i>
            <img src="soilfertimg/soil.jpeg" alt="" width="50%">
            <h3>Soil and Fertilizer</h3>
            <h2>Description:</h2>
            <p> Fertilizers, artificial or natural, are the components that increase plant productivity and development. Fertilizers help the soil increase its fertility thereby promoting growth. The use of manures as compost is presumably as old as agriculture itself. With the help of fertilizers, plants become resilient against harmful plant pathogens, pests, and weeds. Elimination of diseases in plants increases the value in the harvest. Soil provides ecosystem services critical for life: soil acts as a water filter and a growing medium; provides habitat for billions of organisms, contributing to biodiversity; and supplies most of the antibiotics used to fight diseases.</p>
            <div class="price">Rs.11,000</div>
            <div class="buttons">
               <a href="#" class="cart">add to cart</a>
            </div>
        </div>



    </div>
</section>


@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/spray.css') }}">
@endpush
@section('content')
