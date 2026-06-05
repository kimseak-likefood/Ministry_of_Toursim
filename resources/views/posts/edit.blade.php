@extends('layouts.app')
@include('partials.header')
@section('title', 'Edit Post')

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



<!-- edit post section -->
<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 32px; margin-bottom: 30px;">Edit Post</h2>

    <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
            @error('title') <p style="color: red; margin-top: 6px;">{{ $message }}</p> @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Content</label>
            <textarea name="content" rows="8" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">{{ old('content', $post->content) }}</textarea>
            @error('content') <p style="color: red; margin-top: 6px;">{{ $message }}</p> @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Image (optional)</label>
            @if ($post->image)
                <img src="{{ Storage::url($post->image) }}" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: block;">
            @endif
            <input type="file" name="image" accept="image/*">
        </div>

        <button type="submit" style="background: #222; color: white; padding: 12px 30px; border: none; border-radius: 50px; font-size: 15px; cursor: pointer;">Update Post</button>
    </form>
</section>
@endsection