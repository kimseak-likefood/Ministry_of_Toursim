@extends('layouts.app')
@section('title', 'Tourism')
@section('content')
@include('partials.header')

<section style="
    background-image: url('/assets/images/section/tourism2.jpg');
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    position: relative;
">

    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.5);
    "></div>


    <div style="position: relative; color: white;">
        <h1 style="font-size: 60px; font-weight: bold;">Cambodia Tourism</h1>
        <p style="font-size: 20px; margin-top: 10px;">Explore Cambodia's official tourism guide — plan your perfect journey today.</p>
    </div>
</section>



<section style="padding: 60px 40px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 50px; font-size: 45px;">Top Destinations</h2>

    <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:24px; max-width:1200px; margin:0 auto;">
        @foreach($destinations as $destination)
            <div class="img-card-wrap" style="border-radius:24px; overflow:hidden; position:relative; box-shadow:0 10px 40px rgba(0,0,0,0.12);">

                <div style="position:relative; width:100%; height:260px; overflow:hidden;">
                    @if($destination->image)
    <img src="{{ asset($destination->image) }}"
        alt="{{ $destination->alt_text }}"
        style="width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.4s ease;"
        onmouseover="this.style.transform='scale(1.08)'"
        onmouseout="this.style.transform='scale(1)'">
@else
    <div style="width:100%; height:100%; background: #f0ede8; display:flex; align-items:center; justify-content:center;">
        <span style="font-size: 48px;">no image</span>
    </div>
@endif

                    @can('modify', $destination)
                    <div class="admin-overlay">
                        <a href="{{ route('destinations.edit', $destination) }}" class="admin-btn">✏️</a>
                        <form method="POST" action="{{ route('destinations.destroy', $destination) }}"
                            onsubmit="return confirm('Delete this destination?')" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    @endcan
                </div>

                <a href="#" style="text-decoration:none; display:block; padding:16px 4px 16px 16px;">
                    <h3 style="color:#1f2937; font-size:16px; font-weight:600; margin:0 0 4px;">{{ $destination->name }}</h3>
                </a>

            </div>
        @endforeach
    </div>
</section>



<section style="padding: 60px 40px; background: white;">
    <h2 style="text-align: center; margin-bottom: 80px; font-size: 45px;">Things To Do</h2>


    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <a href="https://en.wikipedia.org/wiki/Culture_of_Cambodia" target="_blank" style="display: block;">
                <img src="/assets/images/destinations/culture.jpg" alt="Culture" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </a>
        </div>
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Culture</h3>
            <p style="color: #666; margin-bottom: 30px; font-size: 20px; line-height: 1.8;">Discover the heart and soul of Cambodia through its magnificent temples, royal palaces, vibrant traditions, and world-class museums. From the awe-inspiring legacy of the Khmer Empire to the colorful customs and warm hospitality of local communities, every destination offers a unique glimpse into the nation's rich heritage.</p>

        </div>
    </div>


    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <a href="https://en.wikipedia.org/wiki/Tourism_in_Cambodia" target="_blank" style="display: block;">
                <img src="/assets/images/destinations/nature.jpg" alt="Nature" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </a>
        </div>
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Nature</h3>
            <p style="color: #666666; margin-bottom: 30px; font-size: 20px; line-height: 1.8;">Experience the breathtaking natural beauty of Cambodia, where lush forests, rolling mountains, pristine rivers, and hidden waterfalls await discovery. Trek through scenic national parks, explore tranquil lakes, encounter diverse wildlife, and relax in some of the country's most stunning landscapes.</p>

        </div>
    </div>


    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <a href="https://en.wikipedia.org/wiki/Tourism_in_Cambodia" target="_blank" style="display: block;">
                <img src="/assets/images/destinations/adventure.jpg" alt="Adventure" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </a>
        </div>
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Adventure</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">Embark on unforgettable adventures across Cambodia, where ancient ruins, rugged landscapes, and thrilling outdoor experiences await. Climb hidden temple mountains, trek through dense jungles, explore remote provinces, and navigate winding trails that lead to breathtaking views. Whether you're seeking adrenaline-pumping activities, off-the-beaten-path destinations, or exciting encounters with nature and history.</p>

        </div>
    </div>

</section>


@endsection