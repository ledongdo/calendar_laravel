<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $event = Event::all();
        $calendars = [];
        foreach ($event as $Key => $value) {
            $calendars[] = [
                'id' => $value->id,
                'title' => $value->title,
                'start' => $value->start_date,
                'end' => $value->end_date,
            ];
        }
        return view('calendar.index', compact('calendars'));
    }

    public function welcome() {
        $a = 'a';
        return view('welcome', compact('a'));
    }
}
