<?php

namespace App\Http\Controllers;
use App\Model\Day;
use Calendar;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = [];

        //$data = Event::all();
        $day = Day::get();

        foreach ($day as $item) {

            $events[] = Calendar::event(

                "hi",

                true,

                new \DateTime($item->date_en),

                new \DateTime($item->date_en.' +1 day')

            );
        }


        $calendar = Calendar::addEvents($events);
        return view('calander',compact('calendar'));

        return view('mycalender', compact('calendar'));
        return view('site.date');
    }
}
