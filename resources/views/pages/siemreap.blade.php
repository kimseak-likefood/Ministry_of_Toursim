@include('partials.header')
@extends('layouts.app')
@section('title', 'Siem Reap')

@section('content')
<section style="
    background-image: url('/assets/images/destinations/sieamreap.jpg');
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
">
    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.5);
    "></div>

    <div style="position: relative; text-align: center; color: white;">
        <p style="font-size: 16px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 12px; opacity: 0.85;">Cambodia &rsaquo; Temple City</p>
        <h1 style="font-size: 64px; font-weight: bold; margin: 0;">Siem Reap</h1>
        <p style="font-size: 20px; margin-top: 14px; opacity: 0.9;">Gateway to the ancient wonders of Angkor — where temples meet tropical charm.</p>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                About Siem Reap
            </h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #6b7280;">
                Siem Reap is Cambodia's most visited city and the gateway to the legendary Angkor Archaeological Park, 
                a UNESCO World Heritage Site home to the iconic Angkor Wat temple complex. Beyond the temples, 
                Siem Reap enchants visitors with its vibrant night markets, floating villages on Tonlé Sap Lake, 
                lush rice paddies, and a warm, welcoming local culture. It is a city where ancient civilisation 
                and modern hospitality come together in perfect harmony.
            </p>
        </div>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Top Attractions
            </h2>
        </div>
    </div>
</section>

<section style="padding: 0 40px 60px 40px; background: white;">

    <div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Angkor_Wat" target="_blank" style="display: block;"><img src="/assets/images/discover sr/caption.jpg" alt="Angkor Wat"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Angkor Wat</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Bayon" target="_blank" style="display: block;"><img src="/assets/images/discover sr/bayon-temple.jpg" alt="Bayon Temple"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Bayon Temple</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Ta_Prohm" target="_blank" style="display: block;"><img src="/assets/images/discover sr/Ta-Prohm.jpg" alt="Ta Prohm"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Ta Prohm</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Tonl%C3%A9_Sap" target="_blank" style="display: block;"><img src="/assets/images/discover sr/tonle_sap_7.jpg" alt="Tonlé Sap Lake"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Tonlé Sap Lake</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Siem_Reap" target="_blank" style="display: block;"><img src="/assets/images/discover sr/pub_street.jpg" alt="Pub Street"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Pub Street</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Siem_Reap" target="_blank" style="display: block;"><img src="/assets/images/discover sr/Angkor-Night-Market.jpeg" alt="Angkor Night Market"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Angkor Night Market</p>
            </a>
        </div>

    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Experiences in Siem Reap
            </h2>
        </div>
    </div>
</section>

<!-- Temple Exploration -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Angkor_Wat" target="_blank" style="display: block;">
                    <img src="/assets/images/discover sr/Banteay-Srei-Lady.jpg" alt="Temple Exploration" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Temple Exploration</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Wander through the awe-inspiring ruins of Angkor — from the grand towers of Angkor Wat at sunrise to the jungle-wrapped corridors of Ta Prohm and the smiling faces of Bayon.
            </p>
        </div>
    </div>
</section>

<!-- Village & Lake Life -->
<section class="container mb-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Tonl%C3%A9_Sap" target="_blank" style="display: block;">
                    <img src="/assets/images/discover sr/village.jpg" alt="Village & Lake Life" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Village & Lake Life</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Take a boat tour across Tonlé Sap — Southeast Asia's largest freshwater lake — and visit the floating villages where communities have lived on water for generations.
            </p>
        </div>
    </div>
</section>

<!-- Khmer Cuisine -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Khmer_cuisine" target="_blank" style="display: block;">
                    <img src="/assets/images/discover sr/food.jpg" alt="Khmer Cuisine" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Khmer Cuisine</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Savour authentic Khmer flavours at local restaurants and street stalls — from fragrant fish amok and lok lak to fresh tropical fruits and sweet palm sugar desserts.
            </p>
        </div>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Travel Information
            </h2>
        </div>
    </div>
</section>

<section style="padding: 0 40px 60px 40px; background: white;">

    <div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Getting There</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Fly into Siem Reap International Airport (SAI), with connections from Bangkok, Singapore, Kuala Lumpur, and major Asian hubs. Buses from Phnom Penh take around 6 hours.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Best Time to Visit</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">November to March is ideal — dry, cooler weather and stunning temple sunrises. Visit early morning to beat the crowds at Angkor Wat.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Getting Around</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Tuk-tuks are the classic way to tour the temples. Bicycles, motorbike rentals, and guided minibuses are also popular options for day trips.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Angkor Pass</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">An Angkor Archaeological Park pass is required to visit the temples. Choose from a 1-day ($37), 3-day ($62), or 7-day ($72) pass at the official ticket centre.</p>
        </div>

    </div>
</section>


<section style="
    background-image: url('/assets/images/discover sr/angkor_wat_sunrise_001.jpg');
    background-size: cover;
    background-position: center;
    padding: 80px 40px;
    position: relative;
    text-align: center;
">
    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.55);
    "></div>
    <div style="position: relative; color: white;">
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 16px;">Ready to Explore Siem Reap?</h2>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px;">Start planning your journey to the land of ancient temples and timeless wonder.</p>
        <a href="/plan-your-trip" style="
            display: inline-block;
            background: white;
            color: #222;
            padding: 14px 36px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s ease;
        " onmouseover="this.style.background='#f0f0f0'" onmouseout="this.style.background='white'">
            Plan Your Trip
        </a>
    </div>
</section>

@endsection