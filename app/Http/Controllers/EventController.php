<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     *
     */
    public function store(Request $request, $userID)
    {
        $validated = $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'status' => 'required|in:accept,reject',
        ]);

        $event = Event::create([
            'user_id' => $userID,
            'date' => $validated['date'],
            'time' => $validated['time'],
            'status' => $validated['status'],
        ]);

        return response()->json([
            'message' => 'Event created successfully',
            'event' => $event,
        ], 201);
    }

    /**
     *
     */
    public function getEventsByUser($userID)
    {
        $events = Event::where('user_id', $userID)->get();

        return response()->json([
            'events' => $events,
        ]);
    }
}
