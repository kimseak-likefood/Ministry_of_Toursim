@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 3rem auto; padding: 2rem; background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
    
    <h2 style="margin-bottom: 1.5rem; font-weight: 700;">Edit Attraction</h2>

    <form action="{{ route('attractions.update', $attraction) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <div style="margin-bottom: 1.25rem;">
            <label style="display:block; margin-bottom: 0.5rem; font-weight: 600;">Attraction Name</label>
            <input type="text" name="name" value="{{ old('name', $attraction->name) }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;" required readonly>
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
    <img id="imagePreview" src="{{ asset($attraction->image) }}" style="width: 100px; height: 60px; object-fit: cover; border-radius: 4px; margin-bottom: 0.5rem; display: block;">
@else
    <img id="imagePreview" src="" style="width: 100px; height: 60px; object-fit: cover; border-radius: 4px; margin-bottom: 0.5rem; display: none;">
@endif
<input type="file" name="image" id="imageInput" style="width: 100%;">
        </div>

        <div style="display: flex; gap: 12px; align-items: center;">
            <button type="submit" style="background: #222; color: white; padding: 12px 30px; border: none; border-radius: 50px; font-size: 15px; cursor: pointer;">Update</button>
           <a href="/activities" style="margin-left: 16px; color: #888; font-size: 14px;">Cancel</a>
        </div>
    </form>
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
</div>

@endsection