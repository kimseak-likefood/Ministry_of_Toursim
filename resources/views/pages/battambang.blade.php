@include('partials.header')
@extends('layouts.app')
@section('title', 'Battambang')

@section('content')
<section style="
    background-image: url('/assets/images/destinations/battambang.jpg');
    background-size: cover;
    background-position: center top;
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
        <p style="font-size: 16px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 12px; opacity: 0.85;">Cambodia &rsaquo; Colonial River Town</p>
        <h1 style="font-size: 64px; font-weight: bold; margin: 0;">Battambang</h1>
        <p style="font-size: 20px; margin-top: 14px; opacity: 0.9;">Cambodia's most charming province — where French heritage, rice fields, and art come alive.</p>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                About Battambang
            </h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #6b7280;">
                Battambang is Cambodia's second-largest city and one of its best-preserved examples of French colonial architecture. 
                Situated along the Sangker River in the northwest, the city is the heart of Cambodia's rice basket — 
                surrounded by golden paddies, ancient hilltop temples, and rural villages where traditional Khmer life 
                continues at a gentle pace. Known for its thriving arts scene, beloved bamboo train, and legendary 
                circus school, Battambang rewards slow travellers with an authentic, unhurried charm that few Cambodian cities can match.
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
            <a href="https://en.wikipedia.org/wiki/Norry" target="_blank" style="display: block;"><img src="/assets/images/battambang/Bamboo-Train.jpg" alt="Bamboo Train"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Bamboo Train</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Phare_Ponleu_Selpak" target="_blank" style="display: block;"><img src="/assets/images/battambang/phare-battambang-circus.jpg" alt="Phare Ponleu Selpak Circus"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Phare Ponleu Selpak Circus</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Wat_Banan" target="_blank" style="display: block;"><img src="/assets/images/battambang/banan.jpg" alt="Wat Banan Temple"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Wat Banan Temple</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Battambang" target="_blank" style="display: block;"><img src="/assets/images/battambang/French-Colonial-architecture.jpg" alt="French Colonial Architecture"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">French Colonial Architecture</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Phnom_Sampov" target="_blank" style="display: block;"><img src="/assets/images/battambang/bat_cave.jpg" alt="Phnom Sampeau Bat Caves"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Phnom Sampeau Bat Caves</p>
            </a>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <a href="https://en.wikipedia.org/wiki/Sangkae_River" target="_blank" style="display: block;"><img src="/assets/images/battambang/sangker.jpg" alt="Sangker River"
                style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold; color: #000000;">Sangker River</p>
            </a>
        </div>

    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Experiences in Battambang
            </h2>
        </div>
    </div>
</section>

<!-- Rural Village & Farm Life -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Battambang_province" target="_blank" style="display: block;">
                    <img src="/assets/images/battambang/rural_life.jpg" alt="Rural Village & Farm Life" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Rural Village & Farm Life</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Cycle through golden rice paddies and riverside villages where traditional Khmer rural life unfolds 
                at its own pace — visit local fish paste factories, rice wine distilleries, and handcraft workshops 
                that have been passed down through generations.
            </p>
        </div>
    </div>
</section>

<!-- Arts & Circus -->
<section class="container mb-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Phare_Ponleu_Selpak" target="_blank" style="display: block;">
                    <img src="/assets/images/battambang/art_circus.jpg" alt="Arts & Circus" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Arts & Circus</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Battambang is Cambodia's arts capital. Watch a world-renowned performance at Phare Ponleu Selpak — 
                the celebrated circus school that has transformed the lives of thousands of Cambodian youth through 
                visual arts, music, and breathtaking acrobatics.
            </p>
        </div>
    </div>
</section>

<!-- Temple Hilltops -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Phnom_Sampov" target="_blank" style="display: block;">
                    <img src="/assets/images/battambang/Banan-stairs.jpg" alt="Temple Hilltops" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Temple Hilltops</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Climb the stone steps of Wat Banan for sweeping views over the plains, or witness the 
                breathtaking evening exodus of millions of bats streaming out of Phnom Sampeau's caves 
                at dusk — one of Cambodia's most unforgettable natural spectacles.
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
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Battambang is accessible by bus from Phnom Penh (4–5 hours) or Siem Reap (3–4 hours). A scenic boat ride from Siem Reap along Tonlé Sap Lake is also a popular option during the wet season.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Best Time to Visit</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">November to February is ideal — cool and dry with lush countryside. Harvest season (November–December) is especially beautiful when the rice fields turn golden across the province.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Getting Around</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Bicycles and tuk-tuks are the best ways to explore the city and surrounding villages. Many guesthouses rent bicycles cheaply, making the rice fields and temples easy to reach at your own pace.</p>
        </div>

        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Local Tips</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Don't miss the famous Battambang fruit — the province is known for its oranges, pomelos, and longans. Book Phare Circus tickets in advance, and visit Phnom Sampeau at 5:30 PM for the bat exodus.</p>
        </div>

    </div>
</section>


<section style="
    background-image: url('/assets/images/battambang/Bat-Cave.jpg');
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
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 16px;">Ready to Explore Battambang?</h2>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px;">Start planning your journey to Cambodia's most charming riverside city.</p>
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