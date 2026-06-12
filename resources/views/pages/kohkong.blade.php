@include('partials.header')
@extends('layouts.app')
@section('title', 'Kampot')

@section('content')
   <section style="
    background-image: url('/assets/images/destinations/kampot.jpg');
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
        <p style="font-size: 16px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 12px; opacity: 0.85;">Cambodia &rsaquo; Riverside Escape</p>
        <h1 style="font-size: 64px; font-weight: bold; margin: 0;">Kampot</h1>
        <p style="font-size: 20px; margin-top: 14px; opacity: 0.9;">Cambodia's most relaxed riverside town — where pepper farms, cave temples, and sunset views await.</p>
    </div>
</section>
 
 
<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                About Kampot
            </h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #6b7280;">
                Kampot is a sleepy riverside town in southern Cambodia, cradled between the Kampot River and the 
                dramatic peaks of Bokor Mountain. Famous worldwide for its prized Kampot pepper — considered among 
                the finest in the world — the town captivates visitors with its well-preserved French colonial 
                streetscapes, lantern-lit waterfront, and effortlessly laid-back pace of life. 
                From cave pagodas and pepper farm tours to kayaking at sunset and fresh seafood by the river, 
                Kampot offers a perfect blend of culture, nature, and slow travel charm.
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
            <a href="https://en.wikipedia.org/wiki/Bokor_Hill_Station" target="_blank" style="display: block;"><img src="/assets/images/kampot/Bokor.jpg" alt="Bokor Mountain"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: black;">Bokor Mountain</p>
            </a>
        </div>
 
        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Kampot_pepper" target="_blank" style="display: block;"><img src="/assets/images/kampot/pepper.jpg" alt="Kampot Pepper Farm"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: black;">Kampot Pepper Farm</p>
            </a>
        </div>
 
        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Kampot_province" target="_blank" style="display: block;"><img src="/assets/images/kampot/Chhngok-Cave-Temple-.jpg" alt="Phnom Chhngok Cave Temple"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: black;">Phnom Chhngok Cave Temple</p>
            </a>
        </div>
 
        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Kampot_River" target="_blank" style="display: block;"><img src="/assets/images/kampot/kp_river.jpg" alt="Kampot River"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: black;">Kampot River</p>
            </a>
        </div>
 
        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Kampot_(city)" target="_blank" style="display: block;"><img src="/assets/images/kampot/French-Colonial-architecture-Kampot-Old-Quarter.jpg" alt="Colonial Old Town"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: black;">Colonial Old Town</p>
            </a>
        </div>
 
        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Kep_province" target="_blank" style="display: block;"><img src="/assets/images/kampot/kep-beach.jpg" alt="Kep Beach (Nearby)"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: black;">Kep Beach (Nearby)</p>
            </a>
        </div>
 
    </div>
</section>
 
 
<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Experiences in Kampot
            </h2>
        </div>
    </div>
</section>

<!-- River & Kayaking -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Kampot_River" target="_blank" style="display: block;">
                    <img src="/assets/images/kampot/Kayaking-Kampot.jpg" alt="River & Kayaking" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">River & Kayaking</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Drift along the Kampot River at golden hour by kayak or boat, watching the sun melt behind 
                Bokor Mountain. Evening boat cruises pass firefly-lit mangroves and riverside restaurants, 
                making sunset on the water one of Kampot's most memorable experiences.
            </p>
        </div>
    </div>
</section>

<!-- Pepper Farm Tours -->
<section class="container mb-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Kampot_pepper" target="_blank" style="display: block;">
                    <img src="/assets/images/kampot/Farm-4.png" alt="Pepper Farm Tours" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Pepper Farm Tours</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Explore the world-famous Kampot pepper plantations where black, red, and white peppercorns 
                grow on vine-covered trellises. Guided farm tours offer a fascinating insight into the 
                cultivation and harvest of one of Cambodia's most celebrated culinary exports.
            </p>
        </div>
    </div>
</section>

<!-- Bokor Hill Station -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Bokor_Hill_Station" target="_blank" style="display: block;">
                    <img src="/assets/images/kampot/Bokor-Hill-Station.png" alt="Bokor Hill Station" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Bokor Hill Station</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Ascend the misty Bokor Mountain to discover the haunting ruins of a French colonial hill station, 
                an old church perched at the cliff's edge, and sweeping panoramic views over the Gulf of Thailand 
                on clear days — a truly atmospheric and unforgettable excursion.
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
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Kampot is approximately 3–4 hours by bus from Phnom Penh and about 1 hour from Sihanoukville. Regular bus and minivan services run daily from both cities directly into Kampot town.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Best Time to Visit</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">November to April is the dry season — warm, sunny days ideal for river trips, farm tours, and Bokor visits. The wet season (May–October) is lush and green, with fewer tourists and cooler evenings.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Getting Around</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Bicycles and motorbike rentals are the most popular ways to explore Kampot at leisure. Tuk-tuks are widely available for longer trips to Bokor Mountain, cave temples, and pepper farms.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Local Tips</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Try fresh crab with Kampot pepper at a riverside restaurant — it's the signature dish of the region. Don't leave without buying a bag of authentic Kampot pepper directly from a certified farm.</p>
        </div>
 
    </div>
</section>
 
 
<section style="
    background-image: url('/assets/images/kampot/kampot_sunset.jpg');
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
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 16px;">Ready to Explore Kampot?</h2>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px;">Start planning your journey to Cambodia's most relaxed and charming riverside escape.</p>
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