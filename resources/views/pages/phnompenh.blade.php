@include('partials.header')
@extends('layouts.app')
@section('title', 'PhnomPenh')

@section('content')
<section style="
    background-image: url('/assets/images/destinations/phnompenh.jpg');
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
        <p style="font-size: 16px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 12px; opacity: 0.85;">Cambodia &rsaquo; Capital City</p>
        <h1 style="font-size: 64px; font-weight: bold; margin: 0;">Phnom Penh</h1>
        <p style="font-size: 20px; margin-top: 14px; opacity: 0.9;">The vibrant heart of Cambodia — where history, culture, and modern life meet.</p>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                About Phnom Penh
            </h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #6b7280;">
                Phnom Penh, the capital and largest city of Cambodia, sits at the confluence of the Mekong, Tonlé Sap, and Bassac rivers. 
                A city of resilience and beauty, it blends French colonial architecture with traditional Khmer design, 
                bustling riverside markets, world-class museums, and a thriving food and arts scene. 
                Whether you're exploring its rich history or soaking in its energy, Phnom Penh always leaves a lasting impression.
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
            <a href="https://en.wikipedia.org/wiki/Royal_Palace,_Phnom_Penh" target="_blank" style="display: block;"><img src="/assets/images/phnom penh/Cambodia-Royal-Palace-Phnom-Penh.jpg" alt="Royal Palace"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Royal Palace</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/National_Museum_of_Cambodia" target="_blank" style="display: block;"><img src="/assets/images/phnom penh/cambodian-national-museum.jpg" alt="National Museum"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">National Museum</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Sisowath_Quay" target="_blank" style="display: block;"><img src="/assets/images/phnom penh/Riverside-1.jpg" alt="Riverside Promenade"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Riverside Promenade</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Wat_Phnom" target="_blank" style="display: block;"><img src="/assets/images/phnom penh/wp.jpg" alt="Wat Phnom"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Wat Phnom</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Central_Market_(Phnom_Penh)" target="_blank" style="display: block;"><img src="/assets/images/phnom penh/psar_tmey.png" alt="Central Market"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Central Market</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Tuol_Sleng_genocide_museum" target="_blank" style="display: block;"><img src="/assets/images/phnom penh/toul_sleng.jpg" alt="Tuol Sleng Museum"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Tuol Sleng Museum</p>
            </a>
        </div>

    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Experiences in Phnom Penh
            </h2>
        </div>
    </div>
</section>

<!-- History -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/History_of_Phnom_Penh" target="_blank" style="display: block;">
                    <img src="/assets/images/phnom penh/Royal-Palace-Art.jpg" alt="History" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">History</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Walk through centuries of Khmer history — from the golden era of the Royal Palace to the sobering legacy preserved at Tuol Sleng and the Killing Fields Memorial.
            </p>
        </div>
    </div>
</section>

<!-- Food & Cuisine -->
<section class="container mb-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Khmer_cuisine" target="_blank" style="display: block;">
                    <img src="/assets/images/phnom penh/Traditional-Cambodian-Dishes-To-Eat-Amok.jpg" alt="Food & Cuisine" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Food & Cuisine</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Indulge in Cambodia's culinary delights — from street-side amok and bai sach chrouk at the local markets to fine riverside dining and French-inspired cafes.
            </p>
        </div>
    </div>
</section>

<!-- Nightlife & Arts -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Phnom_Penh" target="_blank" style="display: block;">
                    <img src="/assets/images/phnom penh/Panorama-Phnom-Penh.png" alt="Nightlife & Arts" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Nightlife & Arts</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Experience the city after dark along the Riverside, or explore a growing arts scene of galleries, classical Khmer dance performances, and live music venues.
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
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Fly into Phnom Penh International Airport (PNH), with direct connections from Bangkok, Singapore, Kuala Lumpur, and Ho Chi Minh City.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Best Time to Visit</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">November to February offers the most comfortable weather — cool, dry, and perfect for sightseeing. Avoid peak monsoon season (June–October).</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Getting Around</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Tuk-tuks, motodops, and ride-hailing apps like PassApp and Grab are the most popular ways to get around the city affordably.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Currency</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">The Cambodian Riel (KHR) is the local currency, but US Dollars are widely accepted across hotels, restaurants, and shops.</p>
        </div>

    </div>
</section>


<section style="
    background-image: url('/assets/images/phnom penh/mekong-river-sunset.jpg');
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
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 16px;">Ready to Explore Phnom Penh?</h2>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px;">Start planning your journey to Cambodia's vibrant capital city today.</p>
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