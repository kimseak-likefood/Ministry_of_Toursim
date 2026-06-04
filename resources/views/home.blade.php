@extends('layouts.app')

@section('title', 'RoundTours - Tours and Travel Landing Page')

@section('content')
    <div class="pagewrap">
        <div class="head-wrapper">
            @include('partials.header')
            @include('partials.search-engine')
        </div>
    </div>

    @include('sections.recommended')
    @include('sections.special-offers')
    @include('sections.destinations')

   <div class="showcase-banner" style="
    background: url('/assets/images/section/banner-image.jpg') center center / cover no-repeat;
    height: 400px;
    width: 100%;
    margin-bottom: 15rem;
    margin-top: 8rem;
    position: relative;
">
    <div style="
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.55) 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 2rem;
    ">
        <h1 style="color: #fff; font-weight: 700; font-size: 2.8rem; text-shadow: 0 2px 10px rgba(0,0,0,0.4); margin-bottom: 0.75rem;">
            Discover the Kingdom of Wonder
        </h1>
        <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 550px; margin-bottom: 1.5rem;">
            Explore Cambodia's ancient temples, vibrant culture, and breathtaking landscapes
        </p>
    </div>
</div>



    @include('sections.experience')
    @section('content')
    @include('sections.testimonials')
    @include('sections.blog')
    @include('sections.newsletter')
@endsection
