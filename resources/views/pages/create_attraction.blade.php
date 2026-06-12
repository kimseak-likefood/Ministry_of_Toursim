@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 3rem auto; padding: 2rem; background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
    
    <h2 style="margin-bottom: 1.5rem; font-weight: 700; color: #1f2937;">Add New Attraction</h2>

    <form action="{{ route('attractions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="margin-bottom: 1.25rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Attraction Name</label>
            <input type="text" name="name" value="{{ old('name') }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;" placeholder="e.g. Siem Reap Temple" required>
        </div>

        <div style="margin-bottom: 1.25rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Name (Khmer) - Optional</label>
            <input type="text" name="name_kh" value="{{ old('name_kh') }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;" placeholder="e.g. សៀមរាប">
        </div>

        <div style="margin-bottom: 1.25rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Subtitle or Description</label>
            <textarea name="subtitle" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px; height: 100px;" placeholder="Describe this attraction..." required>{{ old('subtitle') }}</textarea>
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Upload Image</label>
            <input type="file" name="image" style="width: 100%;" required>
        </div>

        <div style="display: flex; gap: 12px;">
            <button type="submit" style="background: #27ae60; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; cursor: pointer;">
                Publish Attraction
            </button>
            <a href="/" style="background: #f3f4f6; color: #4b5563; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; display: inline-block;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection