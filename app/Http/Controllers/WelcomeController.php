<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display blank calendar page with form
     *
     * @return object
     */
    public function index()
    {
        $user_id = 1;
        $event = Event::where('user_id', $user_id)->first();

        $data = [];

        if (!is_null($event)) {
            $data = $event->toArray();
            $data['days'] = json_decode($event['days'], true);
        }

        return view('welcome')->with(compact('data'));
    }
}
