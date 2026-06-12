@extends('layouts.app')
@section('title', 'Blog Posts')
@section('content')
@include('partials.header')
<section style="
    background-image: url('/assets/images/section/blog3.jpg');
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

<!-- blog section -->
<section style="padding: 60px 40px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Latest Posts</h2>

    @auth
        <div style="text-align: center; margin-bottom: 40px;">
            <a href="{{ route('posts.create') }}" style="background: #222; color: white; padding: 12px 30px; border-radius: 50px; text-decoration: none; font-size: 15px;">+ New Post</a>
        </div>
        @else
            <div style="text-align: center; margin-bottom: 30px; padding: 16px;">
                <p style="margin: 0; font-size: 15px; color: #666;">Want to share your experience? <a href="{{ route('register') }}" style="color: #222; font-weight: 600;">Register</a> or <a href="{{ route('login') }}" style="color: #222; font-weight: 600;">Log in</a> to post.</p>
            </div>
    @endauth

   @forelse ($posts as $post)
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        
    @if ($post->image)
             <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                style="width: 300px; height: 200px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
    @else
            <div style="width: 300px; height: 200px; border-radius: 15px; flex-shrink: 0; background: #f0ede8; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
            <span style="font-size: 48px;">No image</span>
            </div>
    @endif

        <div>
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                <div style="width: 36px; height: 36px; border-radius: 50%; background: #c8a46e; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 14px; overflow: hidden;">
                    @if($post->user && $post->user->avatar)
                        <img src="{{ asset('storage/' . $post->user->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                    {{ strtoupper(substr($post->user->name ?? 'D', 0, 1)) }}
                     @endif
                </div>
                <div>
                    <div style="font-weight: 600; font-size: 14px;">{{ $post->user->name ?? 'Deleted User' }}</div>
                    <div style="font-size: 12px; color: #888;">{{ $post->created_at->format('F j, Y') }}</div>
                </div>
            </div>

            <h3 style="font-size: 34px; margin-bottom: 15px;">{{ $post->title }}</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">{{ Str::limit($post->content, 200) }}</p>

            <div style="margin-top: 16px; display: flex; gap: 12px; align-items: center;">
                <a href="{{ route('posts.viewposts', $post) }}" style="color: #222; font-size: 14px; font-weight: 600; text-decoration: underline;">Read more</a>
                @auth
    <form method="POST" action="{{ route('posts.like', $post) }}" style="display:contents;">
        @csrf
        @php $liked = $post->isLikedBy(auth()->user()); @endphp
        <button type="submit" style="background: none; border: none; cursor: pointer; font-size: 14px; color: {{ $liked ? '#e74c3c' : '#888' }}">
            {{ $liked ? '❤️' : '🤍' }} {{ $post->likes_count }}
        </button>
    </form>
@else
    <a href="{{ route('login') }}" style="font-size: 14px; color: #888; text-decoration: none;">🤍 {{ $post->likes_count }}</a>
@endauth
                
                @can('update', $post)
                    <a href="{{ route('posts.edit', $post) }}" style="color: #222; font-size: 14px; font-weight: 600;">Edit</a>
                @endcan

                @can('delete', $post)
                    <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:contents;">
                        @csrf @method('DELETE')
                       <button type="submit" style="background: none; border: none; color: #222; font-size: 14px; font-weight: 600; cursor: pointer;">Delete</button>
                    </form>
                @endcan
            </div>
        </div>
    </div>

@empty
    <div style="text-align: center; padding: 60px 20px; color: #888;">
        <p style="font-size: 20px;">No posts yet.</p>
        @auth
            <a href="{{ route('posts.create') }}" style="color: #222; font-weight: 600;">Be the first to write one!</a>
        @endauth
    </div>
@endforelse

    <div style="margin-top: 30px;">{{ $posts->links() }}</div>
</section>
 
 
<section style="padding: 60px 40px; background: white;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Posting Guidelines</h2>
 
    <div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Content</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Write about real experiences in Cambodia while keeping posts respectful of Khmer culture and traditions.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Images</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">No innappropriate images are allowed on this platform.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Language</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">No hate speech, discrimination, or harrassment. Be respectful and constructive.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">General</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">No promotional contents and lastly, have fun!</p>
        </div>
 
    </div>
</section>
 
 
<section style="
    background-image: url('/assets/images/phnom penh/Cambodia-Royal-Palace-Phnom-Penh.jpg');
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
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 16px;">Post and Interact with other users about Cambodia</h2>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px;">Something troubling you? Give us some feedbacks.</p>
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
            Feedbacks
        </a>
    </div>
</section>
@endsection