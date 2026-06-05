@extends('layouts.app')
@section('title', $post->title)
@include('partials.header')

@section('content')
<section style="
    background-image: url('/assets/images/phnom penh/pp.jpg');
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
        <p style="font-size: 16px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 12px; opacity: 0.85;">Welcome to Cambodia's</p>
        <h1 style="font-size: 64px; font-weight: bold; margin: 0;">Official Blog</h1>
        <p style="font-size: 20px; margin-top: 14px; opacity: 0.9;">Interact with posts about Cambodia from users all around the globe.</p>
    </div>
</section>


<!-- veiw post section -->
<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">

    @if ($post->image)
        <img src="{{ Storage::url($post->image) }}" style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px; margin-bottom: 30px;">
    @endif

    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
        <div style="width: 36px; height: 36px; border-radius: 50%; background: #c8a46e; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
            {{ strtoupper(substr($post->user->name, 0, 1)) }}
        </div>
        <div>
            <div style="font-weight: 600; font-size: 14px;">{{ $post->user->name }}</div>
            <div style="font-size: 12px; color: #888;">{{ $post->created_at->format('F j, Y') }}</div>
        </div>
    </div>

    <h1 style="font-size: 40px; margin-bottom: 20px;">{{ $post->title }}</h1>
    <p style="font-size: 18px; line-height: 1.9; color: #444;">{{ $post->content }}</p>

    <div style="margin-top: 30px; display: flex; gap: 12px;">
        <a href="{{ route('posts.blogposts') }}" style="color: #888; font-size: 14px;">← Back to posts</a>

        @can('update', $post)
            <a href="{{ route('posts.edit', $post) }}" style="color: #222; font-size: 14px; font-weight: 600;">Edit</a>
        @endcan

        @can('delete', $post)
            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                @csrf @method('DELETE')
                <button type="submit" style="background: none; border: none; color: #222; font-size: 14px; font-weight: 600; cursor: pointer;">Delete</button>
            </form>
        @endcan
    </div>
</section>
@endsection