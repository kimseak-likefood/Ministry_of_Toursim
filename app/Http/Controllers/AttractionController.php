<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
   public function index()
    {
        $attractions = Attraction::all();
        return view('pages.activies', compact('attractions'));
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
            'subtitle' => ['nullable', 'string', 'max:255'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'image'    => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('attractions', 'public');
        }

        $attraction->update($data);
        return redirect('/')->with('success', 'Attraction updated.');
    }

    public function destroy(Attraction $attraction)
    {
        $attraction->delete();
        return redirect('/')->with('success', 'Attraction deleted.');
    }
}
