<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsApiController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'image' => 'required',
            'isFeatured' => 'required',
        ]);

        return Event::create([
            'title' => request('title'),
            'description' => request('description'),
            'location' => request('location'),
            'date' => request('date'),
            'image' => request('image'),
            'isFeatured' => request('isFeatured'),
        ]);
    }

    public function update(Event $event)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'image' => 'required',
            'isFeatured' => 'required',
        ]);

        $success = $event->update([
            'title' => request('title'),
            'description' => request('description'),
            'location' => request('location'),
            'date' => request('date'),
            'image' => request('image'),
            'isFeatured' => request('isFeatured'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Event $event)
    {
        $success = $event->delete();

        return [
            'success' => $success
        ];
    }
    public function getEvent($id)
    {
        $event = Event::find($id);
        return $event;
    }
    
}