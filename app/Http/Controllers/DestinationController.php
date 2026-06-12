<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('pages.tourism', compact('destinations'));
    }

    public function edit(Destination $destination)
    {
        return view('pages.edit_destinations', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'image'    => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('destinations', 'public');
        }

        $destination->update($data);
        return redirect('/tourism')->with('success', 'Destination updated.');
    }

    public function destroy(Destination $destination)
    {
        $destination->update(['image' => null]);
        return redirect('/tourism')->with('success', 'Image removed.');
    }
}