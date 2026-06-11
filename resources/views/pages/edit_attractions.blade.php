@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 3rem auto; padding: 2rem; background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
    
    <h2 style="margin-bottom: 1.5rem; font-weight: 700;">Edit Attraction</h2>

    <form action="{{ route('attractions.update', $attraction) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <div style="margin-bottom: 1.25rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Attraction Name</label>
            <input type="text" name="name" value="{{ old('name', $attraction->name) }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;" required>
        </div>

        <div style="margin-bottom: 1.25rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Name (Khmer) - Optional</label>
            <input type="text" name="name_kh" value="{{ old('name_kh', $attraction->name_kh) }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 1.25rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Subtitle</label>
            <input type="text" name="subtitle" value="{{ old('subtitle', $attraction->subtitle) }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Change Image</label>
            @if($attraction->image)
                <img src="{{ asset($attraction->image) }}" style="width: 100px; height: 60px; object-fit: cover; border-radius: 4px; margin-bottom: 0.5rem; display: block;">
            @endif
            <input type="file" name="image" style="width: 100%;">
        </div>

        <div style="display: flex; gap: 12px;">
            <button type="submit" style="background: #c0392b; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; cursor: pointer;">
                Save Changes
            </button>
            <a href="/activities" style="background: #f3f4f6; color: #4b5563; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; display: inline-block;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection