@extends('layouts.app')

@section('title', 'ក្រសួងទេសចរណ៍ - Ministry of Tourism')

@section('content')
    <div class="pagewrap">
        <div class="head-wrapper">
            @include('partials.header')
            @include('partials.search-engine')
        </div>
    </div>

    @include('sections.recommended')
    @include('sections.special-offers')
    

    <div class="showcase-banner" style="
        background: url('/assets/images/section/banner1image.jpg') center center / cover no-repeat;
        height: 400px;
        width: 100%;
        margin-bottom: 6rem;
        margin-top: 10rem;
        position: relative;
        box-shadow: 0 20px 60px rgba(0,0,0,0.35), 0 6px 20px rgba(0,0,0,0.2);
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
            <h1 style="
                color: #fff;
                font-weight: 700;
                font-size: 2.8rem;
                text-shadow: 0 4px 20px rgba(0,0,0,0.6), 0 2px 6px rgba(0,0,0,0.4);
                margin-bottom: 0.75rem;
            ">
                Discover the Kingdom of Wonder
            </h1>

            <p style="
                color: rgba(255,255,255,0.85);
                font-size: 1.1rem;
                max-width: 550px;
                margin-bottom: 1.5rem;
                text-shadow: 0 2px 8px rgba(0,0,0,0.5);
            ">
                Explore Cambodia's ancient temples, vibrant culture, and breathtaking landscapes
            </p>
        </div>
    </div>

    <!-- Cambodia Description -->
    <section class="container text-center mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 style="
                    font-weight: 700;
                    font-size: 2.4rem;
                    color: #1f2937;
                    margin-bottom: 3rem;
                ">
                    Experience Cambodia
                </h2>

                <p style="
                    font-size: 1.1rem;
                    line-height: 1.9;
                    color: #6b7280;
                    max-width: 850px;
                    margin: 0 auto;
                ">
                    Cambodia is a land of timeless beauty, rich history, and warm hospitality.
                    Home to the magnificent Angkor temples, vibrant cultural traditions, pristine
                    beaches, and breathtaking natural landscapes, the Kingdom of Wonder offers
                    unforgettable experiences for every traveler. From exploring ancient heritage
                    sites and bustling local markets to relaxing on tropical islands and discovering
                    hidden countryside gems, Cambodia invites visitors to immerse themselves in its
                    unique charm and create memories that last a lifetime.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section style="padding: 60px 40px; background: #f9f9f9;">
        <h2 style="text-align: center; margin-bottom: 10px; font-size: 32px;">Latest From Our Blog</h2>
        <p style="text-align: center; color: #888; margin-bottom: 40px;">See what travellers are saying about Cambodia</p>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; max-width: 1100px; margin: 0 auto;">
            @foreach($posts as $post)
            <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" style="width: 100%; height: 200px; object-fit: cover;">
                @else
                    <div style="width: 100%; height: 200px; background: #f0ede8; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 48px;">📝</span>
                    </div>
                @endif
                <div style="padding: 20px;">
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 10px;">
                        <div style="width: 28px; height: 28px; border-radius: 50%; background: #c8a46e; display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: bold; overflow: hidden;">
                            @if($post->user && $post->user->avatar)
                                <img src="{{ asset('storage/' . $post->user->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                {{ strtoupper(substr($post->user->name ?? 'D', 0, 1)) }}
                            @endif
                        </div>
                        <span style="font-size: 13px; color: #888;">{{ $post->user->name ?? 'Deleted User' }} · {{ $post->created_at->format('M j, Y') }}</span>
                    </div>
                    <h3 style="font-size: 18px; margin-bottom: 8px;">{{ $post->title }}</h3>
                    <p style="color: #666; font-size: 14px; line-height: 1.7;">{{ Str::limit($post->content, 100) }}</p>
                    <div style="margin-top: 14px; display: flex; justify-content: space-between; align-items: center;">
                        <a href="{{ route('posts.viewposts', $post) }}" style="color: #222; font-size: 13px; font-weight: 600; text-decoration: underline;">Read more</a>
                        <span style="font-size: 13px; color: #888;">🤍 {{ $post->likes_count }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('blogposts') }}" style="background: #222; color: white; padding: 12px 30px; border-radius: 50px; text-decoration: none; font-size: 15px;">View All Posts</a>
        </div>
    </section>

    

    @include('sections.newsletter')
@endsection