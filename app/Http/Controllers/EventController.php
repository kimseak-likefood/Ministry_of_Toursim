<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featured = Event::orderBy('date')->get();
        $events = Event::orderBy('date')->get();
        return view('pages.holidays&events', compact('featured', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        if (!auth()->user()->is_admin) abort(403);
        return view('posts.create_events');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        if (!auth()->user()->is_admin) abort(403);
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'date'        => 'required|string',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
            'featured'    => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        Event::create($validated);
        return redirect('/holidays&events')->with('success', 'Event created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('posts.viewevents', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        if (!auth()->user()->is_admin) abort(403);       
        return view('posts.edit_events', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        if (!auth()->user()->is_admin) abort(403);        
         $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'date'        => 'required|string',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
            'featured'    => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($event->image) Storage::disk('public')->delete($event->image);
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($validated);
        return redirect('/holidays&events')->with('success', 'Event updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if (!auth()->user()->is_admin) abort(403);
        if ($event->image) Storage::disk('public')->delete($event->image);
        $event->delete();
        return redirect('/holidays&events')->with('success', 'Event deleted!');
    }
}
