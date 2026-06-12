@extends('layouts.app')

@section('title', 'Public Holidays 2026')

@section('content')
@include('partials.header')

<!-- Hero Banner -->
<section style="
    background-image: url('/assets/images/section/event3.jpg');
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
        <h1 style="font-size: 60px; font-weight: bold;">Events</h1>
        <p style="font-size: 20px; margin-top: 10px;">Explore Cambodia's official tourism guide — plan your perfect journey today.</p>
    </div>
</section> 

<!-- Featured Holidays -->
<section style="padding: 60px 40px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Major Celebrations</h2>

    @auth
    @if(auth()->user()->is_admin)
        <div style="text-align: center; margin-bottom: 45px;">
            <a href="{{ route('posts.create_events') }}" style="background: #222; color: white; padding: 10px 24px; border-radius: 50px; text-decoration: none; font-size: 14px;">+ Add Event</a>
        </div>
    @endif
@endauth

<div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">
    @foreach($featured as $event)
    <a href="{{ route('posts.viewevents', $event) }}" style="text-decoration: none; color: inherit;">
    <div style="text-align: center; overflow: hidden; border-radius: 15px;">
        @if($event->image)
            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        @else
    <div style="width: 350px; height: 250px; border-radius: 15px; background: #f0ede8; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
        <span style="font-size: 48px;">no image</span>
    </div>
@endif
        <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">{{ $event->name }}</p>
        <p style="color: #9ca3af; font-size: 14px; margin: 0;">{{ $event->date->format('d M Y') }}</p>
        @auth
            @if(auth()->user()->is_admin)
                <div style="margin-top: 8px; display: flex; gap: 8px; justify-content: center;">
                    <a href="{{ route('posts.edit_events', $event) }}" style="font-size: 13px; color: #222;">Edit</a>
                    <form method="POST" action="{{ route('events.destroy', $event) }}" style="display:contents;">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this event?')" style="background: none; border: none; font-size: 13px; color: #888; cursor: pointer;">Delete</button>
                    </form>
                </div>
            @endif
        @endauth
    </div>
</a>
    @endforeach
</div>
</section>

<!-- Holiday Stories -->
<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                Holiday Traditions
            </h2>
        </div>
    </div>
</section>

<!-- Khmer New Year -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Cambodian_New_Year" target="_blank" style="display: block;">
                    <img src="/assets/images/celebration/kny_1.jpg" alt="Khmer New Year" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Khmer New Year</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                The most anticipated celebration in Cambodia, marking the end of the harvest season. Families gather to play traditional games, visit pagodas, and welcome the new year with blessings and joy.
            </p>
        </div>
    </div>
</section>

<!-- Pchum Ben -->
<section class="container mb-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Pchum_Ben" target="_blank" style="display: block;">
                    <img src="/assets/images/celebration/pchum.jpeg" alt="Pchum Ben" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Pchum Ben</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                A 15-day religious festival where Cambodians honor their ancestors. Families visit pagodas to offer food to monks and spirits, believing that the deceased return to receive blessings during this sacred time.
            </p>
        </div>
    </div>
</section>

<!-- Water Festival -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                <a href="https://en.wikipedia.org/wiki/Bon_Om_Touk" target="_blank" style="display: block;">
                    <img src="/assets/images/celebration/om_tuk.jpg" alt="Water Festival" style="width:100%; height:320px; object-fit:cover; display:block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;">Water Festival</h3>
            <p style="color: #6b7280; line-height: 1.8;">
                Thousands gather along the Tonle Sap river to watch spectacular boat races, illuminated floats, and fireworks. This ancient festival celebrates the reversal of the river's flow and marks the end of the rainy season.
            </p>
        </div>
    </div>
</section>

<!-- Full Holiday List -->
<section style="padding: 60px 0; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Complete Holiday Calendar</h2>
    <div style="max-width: 800px; margin: 0 auto; padding: 0 40px;">
        <table style="width:100%; border-collapse:collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
            <table style="width:100%; border-collapse:collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
            <tbody>
@foreach($events as $event)
<tr style="border-bottom:1px solid #e5e7eb;">
    <td style="padding:14px 20px; color:#6b7280; font-size:14px; white-space:nowrap; width:140px; font-weight:500;">{{ $event->date->format('d M Y') }}</td>
    <td style="padding:14px 20px; color:#111827; font-size:14px;">{{ $event->name }}</td>
    @auth
        @if(auth()->user()->is_admin)
        <td style="padding:14px 20px; white-space:nowrap;">
            <a href="{{ route('posts.edit_events', $event) }}" style="font-size: 13px; color: #222; margin-right: 8px;">Edit</a>
            <form method="POST" action="{{ route('events.destroy', $event) }}" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" style="background: none; border: none; font-size: 13px; color: #888; cursor: pointer;">Delete</button>
            </form>
        </td>
        @endif
    @endauth
</tr>
@endforeach

            </tbody>
        </table>

    </div>
</section>

@endsection