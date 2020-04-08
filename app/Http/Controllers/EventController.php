<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        /*
        $date_begin = new \DateTime($date_begin);
        $date_end = date("Y-m-d", strtotime("$date_end +1 day"));
        $date_end = new \DateTime($date_end);

        $interval = \DateInterval::createFromDateString('1 day');
        $period = new \DatePeriod($date_begin, $interval, $date_end);
        $sched = [];
         */

        return view('welcome')->with(compact('data'));
    }
}
