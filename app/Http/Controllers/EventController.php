<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|max:255',
            'date_begin' => 'required',
            'date_end'   => 'required',
            'days'       => 'required',
        ]);

        $user_id = 1;

        $data = $request->all([
            'date_begin',
            'date_end',
            'days',
            'title',
        ]);

        $data['days'] = json_encode($data['days']);
        $data['user_id'] = $user_id;

        $eventModel = Event::where('user_id', $user_id);

        if ($eventModel->exists()) {
            $eventModel->update($data);
        } else {
            Event::create($data);
        }

        $data['days'] = json_decode($data['days'], true);

        return back();
    }
}
