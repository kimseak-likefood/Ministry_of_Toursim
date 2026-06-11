@extends('layouts.app')
@section('title', $event->name)
@section('content')
@include('partials.header')

<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">

    @if($event->image)
        <img src="{{ asset('storage/' . $event->image) }}" style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px; margin-bottom: 30px;">
    @else
        <div style="width: 100%; height: 400px; border-radius: 15px; background: #f0ede8; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
            <span style="font-size: 80px;">no image</span>
        </div>
    @endif

    <p style="color: #9ca3af; font-size: 14px; margin-bottom: 8px;">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
    <h1 style="font-size: 40px; margin-bottom: 20px;">{{ $event->name }}</h1>

    @if($event->description)
        <p style="font-size: 18px; line-height: 1.9; color: #444;">{{ $event->description }}</p>
    @endif

    <div style="margin-top: 30px; display: flex; gap: 12px; align-items: center;">
        <a href="/holidays&events" style="color: #888; font-size: 14px;">← Back to Events</a>
        @auth
            @if(auth()->user()->is_admin)
                <a href="{{ route('posts.viewposts', $event) }}" style="color: #222; font-size: 14px; font-weight: 600;">Edit</a>
                <form method="POST" action="{{ route('events.destroy', $event) }}" style="display:contents;">
                    @csrf @method('DELETE')
                    <button type="submit"  style="background: none; border: none; color: #888; font-size: 14px; cursor: pointer;">Delete</button>
                </form>
            @endif
        @endauth
    </div>
</section>
@endsection