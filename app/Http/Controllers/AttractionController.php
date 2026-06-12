<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    // 1. Show the blank creation form page
    public function create()
    {
        return view('pages.create_attraction');
    }

    // 2. Handle the form submission data and save it to the database
    public function store(Request $request)
    {
        // Validate form inputs
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'name_kh'  => ['nullable', 'string', 'max:255'],
            'subtitle' => ['required', 'string'], // No length cap for long text descriptions
            'image'    => ['required', 'image', 'max:2048'], // Must be an image file up to 2MB
        ]);

        // Handle file upload safely
        if ($request->hasFile('image')) {
            // Saves the image into storage/app/public/attractions/ and gets the clean path string
            $path = $request->file('image')->store('attractions', 'public');
            
            // Save the web-accessible asset link path into our data array
            $data['image'] = 'storage/' . $path;
        }

        // Insert everything into the database table rows
        Attraction::create($data);

        // Redirect user back to the activities directory page with a success message
        return redirect('/activities')->with('success', 'New tourist attraction published successfully!');
    }

   public function index()
    {
        // 1. Grab your static layout blocks specifically
        $geography = Attraction::where('name', 'Geography')->first();
        $history   = Attraction::where('name', 'History')->first();
        $culture   = Attraction::where('name', 'People and Culture')->first();
        $climate   = Attraction::where('name', 'Climate')->first();

        // 2. Fetch the standard items for your grid loop (excluding the intro blocks)
        $attractions = Attraction::whereNotIn('name', ['Geography', 'History', 'People and Culture', 'Climate'])->get();
        
        return view('pages.activies', compact('geography', 'history', 'culture', 'climate', 'attractions'));
    }

    

    public function edit(Attraction $attraction)
    {
        return view('pages.edit_attractions', compact('attraction'));
    }

    public function update(Request $request, Attraction $attraction)
    {
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'name_kh'  => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'image'    => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('attractions', 'public');
        }

        $attraction->update($data);
        return redirect('/activities')->with('success', 'Attraction updated.');
    }

    public function destroy(Attraction $attraction)
    {
        $attraction->delete();
        return back()->with('success', 'Attraction deleted.');
    }
}
