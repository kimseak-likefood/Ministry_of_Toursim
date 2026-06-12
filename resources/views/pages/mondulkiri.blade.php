@include('partials.header')
@extends('layouts.app')
@section('title', 'Mondulkiri')

@section('content')
<section style="
    background-image: url('/assets/images/destinations/mondulkiri.jpg');
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
        <p style="font-size: 16px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 12px; opacity: 0.85;">Cambodia &rsaquo; Highland Province</p>
        <h1 style="font-size: 64px; font-weight: bold; margin: 0;">Mondulkiri</h1>
        <p style="font-size: 20px; margin-top: 14px; opacity: 0.9;">Cambodia's wild highland escape — where rolling hills, waterfalls, and elephants await.</p>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                About Mondulkiri
            </h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #6b7280;">
                Mondulkiri is Cambodia's largest and most sparsely populated province, nestled in the northeastern highlands 
                bordering Vietnam. A world apart from the lowland plains, it captivates visitors with its cool misty mornings, 
                pine-covered hills, dramatic waterfalls, and dense tropical forests. Home to the indigenous Bunong people 
                and free-roaming elephants, Mondulkiri offers an authentic eco-tourism experience unlike anywhere else in Cambodia — 
                a destination for those who seek nature, adventure, and cultural connection.
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
            <a href="https://en.wikipedia.org/wiki/Bou_Sra_Waterfall" target="_blank" style="display: block;"><img src="/assets/images/mondulkiri/Bou-Sra-Waterfall.jpg" alt="Bou Sra Waterfall"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Bou Sra Waterfall</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Mondulkiri_province" target="_blank" style="display: block;"><img src="/assets/images/mondulkiri/Three-Elephant.jpg" alt="Elephant Valley Project"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Elephant Valley Project</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Senmonorom" target="_blank" style="display: block;"><img src="/assets/images/mondulkiri/Sen-Monorom-2.jpg" alt="Sen Monorom Town"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Sen Monorom Town</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Bunong_people" target="_blank" style="display: block;"><img src="/assets/images/mondulkiri/Bunong.jpg" alt="Bunong Indigenous Village"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Bunong Indigenous Village</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Mondulkiri_province" target="_blank" style="display: block;"><img src="/assets/images/mondulkiri/Viland.jpg" alt="Rolling Pine Hills"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Rolling Pine Hills</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Mondulkiri_province" target="_blank" style="display: block;"><img src="/assets/images/mondulkiri/dak_dam.jpg" alt="Dak Dam Waterfall"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Dak Dam Waterfall</p>
            </a>
        </div>

    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Experiences in Mondulkiri
            </h2>
        </div>
    </div>
</section>

<!-- Elephant Sanctuary -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Mondulkiri_province" target="_blank" style="display: block;">
                    <img src="/assets/images/mondulkiri/Mondulkiri-Elephant-2.png" alt="Elephant Sanctuary" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Elephant Sanctuary</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Walk alongside rescued elephants in their natural forest habitat at the Elephant Valley Project — 
                an ethical sanctuary where you observe these gentle giants roaming free, bathing in rivers, 
                and living as nature intended.
            </p>
        </div>
    </div>
</section>

<!-- Jungle Trekking -->
<section class="container mb-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Mondulkiri_province" target="_blank" style="display: block;">
                    <img src="/assets/images/mondulkiri/trekking.jpg" alt="Jungle Trekking" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Jungle Trekking</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Trek through dense jungle trails to hidden waterfalls and remote hilltop viewpoints. 
                Guided hikes led by Bunong locals take you deep into forests teeming with wildlife, 
                rare birds, and ancient trees far off the beaten path.
            </p>
        </div>
    </div>
</section>

<!-- Indigenous Culture -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Bunong_people" target="_blank" style="display: block;">
                    <img src="/assets/images/mondulkiri/culture.jpg" alt="Indigenous Culture" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Indigenous Culture</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Discover the traditions of the Bunong people — Cambodia's indigenous highland community. 
                Visit their villages, learn about their animist spiritual practices, traditional weaving, 
                and centuries-old connection to the forest and land.
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
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Travel by bus or private taxi from Phnom Penh to Sen Monorom — the provincial capital. The journey takes approximately 6–7 hours by road through scenic countryside.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Best Time to Visit</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">November to April offers the best conditions — dry roads, clear skies, and lush green hills. The wet season (May–October) makes dirt roads difficult but fills the waterfalls.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Getting Around</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Motorbike rentals are the most popular way to explore Mondulkiri's winding highland roads. Local guides with 4WD vehicles are recommended for deeper jungle routes.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Eco Tips</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Choose ethical elephant experiences that do not use riding or chains. Support Bunong-run tours and guesthouses to ensure your visit benefits the local indigenous community directly.</p>
        </div>

    </div>
</section>


<section style="
    background-image: url('/assets/images/mondulkiri/cold-weather.jpg');
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
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 16px;">Ready to Explore Mondulkiri?</h2>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px;">Start planning your journey into Cambodia's untamed highland wilderness.</p>
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