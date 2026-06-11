@extends('layouts.app')
@section('title', 'Edit Event')
@section('content')
@include('partials.header')

<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 32px; margin-bottom: 30px;">Edit Event</h2>

    <form method="POST" action="{{ route('events.update', $event) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Event Name</label>
            <input type="text" name="name" value="{{ old('name', $event->name) }}" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Date</label>
            <input type="date" name="date" value="{{ old('date', isset($event) ? $event->date : '') }}" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description</label>
            <textarea name="description" rows="4" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">{{ old('description', $event->description) }}</textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Image</label>
            @if($event->image)
                <img id="imagePreview" src="{{ asset('storage/' . $event->image) }}?v={{ time() }}" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: block;">
            @else
                <img id="imagePreview" src="" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: none;">
            @endif
            <input type="file" name="image" accept="image/*" id="imageInput">
        </div>

        <button type="submit" style="background: #222; color: white; padding: 12px 30px; border: none; border-radius: 50px; font-size: 15px; cursor: pointer;">Update Event</button>
        <a href="/holidays&events" style="margin-left: 16px; color: #888; font-size: 14px;">← Back to Events</a>
    </form>
</section>

<script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = e => {
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection