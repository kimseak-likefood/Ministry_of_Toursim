@extends('layouts.app')

@section('title', 'Activities')
@section('content')
    <div class="pagewrap">
        <div class="head-wrapper">
            @include('partials.header')
        </div>
    </div>

<section style="
    background-image: url('/assets/images/section/banner-image.jpg');
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
        <h1 style="font-size: 60px; font-weight: bold;">Activities in Cambodia</h1>
        <p style="font-size: 20px; margin-top: 10px;">From ancient temples to jungle adventures — find your next experience in the Kingdom of Wonder.</p>
    </div>
</section>

    <!-- About Cambodia -->
    <section class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                    About Cambodia
                </h2>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #6b7280;">
                    Nestled in the heart of Southeast Asia, Cambodia is a land of timeless beauty, rich history, and warm hospitality. From the magnificent Angkor temples to pristine tropical islands, the Kingdom of Wonder offers unforgettable experiences for every traveler.
                </p>
            </div>
        </div>
    </section>

    <!-- Geography -->
    {{-- @if($geography)
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                    <img src="/assets/images/destinations/geography.jpg" alt="Rattanakiri - EcoTourism" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Geography</h3>
                <p style="color: #6b7280; line-height: 1.8;">]'.
                    
                    
                    '
                    Cambodia shares borders with Thailand, Laos, and Vietnam. The country features a diverse landscape of low-lying plains, the Mekong River delta, mountains, and the Gulf of Thailand coastline. The Tonle Sap, Southeast Asia's largest freshwater lake, is the beating heart of the nation's ecology and agriculture.
                </p>
            </div>
        </div>
    </section>
    @endif --}}
    @if($geography)
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="{{ asset($geography->image) }}" 
                        alt="{{ $geography->alt_text }}" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    @can('modify', $geography)
                    <div class="admin-overlay">
                        <a href="{{ route('attractions.edit', $geography) }}" class="admin-btn">✏️</a>
                        <form method="POST" action="{{ route('attractions.destroy', $geography) }}" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    @endcan

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">{{ $geography->name }}</h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    {{ $geography->subtitle }}
                </p>
            </div>
        </div>
    </section>
    @endif

    <!-- History -->
    @if($history)
    <section class="container mb-5">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="{{ asset($history->image) }}" 
                        alt="{{ $history->alt_text }}" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    @can('modify', $history)
                    <div class="admin-overlay">
                        <a href="{{ route('attractions.edit', $history) }}" class="admin-btn">✏️</a>
                        <form method="POST" action="{{ route('attractions.destroy', $history) }}" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    @endcan

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">{{ $history->name }}</h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    {{ $history->subtitle }}
                </p>
            </div>
        </div>
    </section>
    @endif
    {{-- <section class="container mb-5">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                    <img src="/assets/images/destinations/history.jpg" alt="Ancient stone temple ruins surrounded by trees and moss at Koh Ker archaeological site" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">History</h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    The Khmer Empire, which flourished from the 9th to 15th century, left behind the magnificent Angkor temple complex — one of the world's greatest archaeological treasures. After periods of French colonial rule and recent recovery, Cambodia today stands as a resilient nation proud of its heritage.
                </p>
            </div>
        </div>
    </section> --}}

    <!-- Culture -->
    @if($culture)
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="{{ asset($culture->image) }}" 
                        alt="{{ $culture->alt_text }}" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    @can('modify', $culture)
                    <div class="admin-overlay">
                        <a href="{{ route('attractions.edit', $culture) }}" class="admin-btn">✏️</a>
                        <form method="POST" action="{{ route('attractions.destroy', $culture) }}" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    @endcan

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">{{ $culture->name }}</h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    {{ $culture->subtitle }}
                </p>
            </div>
        </div>
    </section>
    @endif
    {{-- <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                    <img src="/assets/images/destinations/peopleandculture.jpg" alt="Phnom Penh - Minority" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">People and Culture</h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    The Khmer people form the majority of Cambodia's population, known for their gentle nature and enduring spirit. Buddhism is the official religion and deeply influences daily life, art, and architecture. Traditional Apsara dance, silk weaving, and vibrant festivals reflect a culture that has thrived for centuries.
                </p>
            </div>
        </div>
    </section> --}}

    <!-- Climate -->
    @if($climate)
    <section class="container mb-5">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="{{ asset($climate->image) }}" 
                        alt="{{ $climate->alt_text }}" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    @can('modify', $climate)
                    <div class="admin-overlay">
                        <a href="{{ route('attractions.edit', $climate) }}" class="admin-btn">✏️</a>
                        <form method="POST" action="{{ route('attractions.destroy', $climate) }}" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    @endcan

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">{{ $climate->name }}</h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    {{ $climate->subtitle }}
                </p>
            </div>
        </div>
    </section>
    @endif
    {{-- <section class="container mb-5">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                    <img src="/assets/images/destinations/climate.jpg" alt="Wooden river boats moored on calm water at Kampot Dong Te with green banks and distant limestone hills" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Climate</h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    Cambodia enjoys a tropical climate with two distinct seasons: the dry season (November to April) and the wet season (May to October). Temperatures range from 21°C to 35°C year-round, making it an ideal destination for travelers seeking sunshine, adventure, and cultural discovery at any time of year.
                </p>
            </div>
        </div>
    </section> --}}

    <!-- Featured Tourist Attractions -->
    
    <div style="max-width:1200px; margin:3rem auto; padding:0 1.5rem;">

        <div style="text-align:center; margin-bottom:2.5rem;">
            <h2 style="font-size:2rem; font-weight:700; margin:0 0 12px;">
                Featured Tourist Attractions
            </h2>
            <div style="width:60px; height:3px; background:#c0392b; margin:0 auto;"></div>
            @can('modify', App\Models\Attraction::class)
            <div style="text-align: right; margin-bottom: 2rem;">
                <a href="{{ route('attractions.create') }}" style="background: #27ae60; color: white; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; display: inline-block; box-shadow: 0 4px 12px rgba(39,174,96,0.2); transition: background 0.2s;">
                    ➕ Add New Attraction
                </a>
            </div>
            @endcan
        </div>

        <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:24px;">

            @foreach($attractions as $attraction)
                <div class="img-card-wrap" style="border-radius:24px; overflow:hidden; position:relative; box-shadow:0 10px 40px rgba(0,0,0,0.12);">
                    
                    <div style="position:relative; width:100%; height:260px; overflow:hidden;">
                        <img src="{{ asset($attraction->image) }}"
                            alt="{{ $attraction->alt_text }}"
                            style="width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.4s ease;"
                            onmouseover="this.style.transform='scale(1.08)'"
                            onmouseout="this.style.transform='scale(1)'">

                        @can('modify', $attraction)
                        <div class="admin-overlay">
                            <a href="{{ route('attractions.edit', $attraction) }}" class="admin-btn">✏️</a>
                            <form method="POST" action="{{ route('attractions.destroy', $attraction) }}"
                                onsubmit="return confirm('Delete this attraction?')" style="margin:0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-btn">🗑️</button>
                            </form>
                        </div>
                        @endcan
                    </div>

                    <a href="#" style="text-decoration:none; display:block; padding:16px 4px 16px 16px;">
                        <h3 style="color:#1f2937; font-size:16px; font-weight:600; margin:0 0 4px;">{{ $attraction->name }}</h3>
                        <p style="color:#9ca3af; font-size:14px; margin:0;">{{ $attraction->name_kh ?? $attraction->subtitle }}</p>
                    </a>

                </div>
            @endforeach

        </div>
    </div>
    @include('sections.newsletter')
@endsection