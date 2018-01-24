<?php

namespace App\Http\Controllers;
use App\Model\Day;
use Calendar;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function calander()
    {
        $events = [];

        $dayOfDate = Day::join('programs','programs.day_id','=','days.id')
            ->select('days.date_en','programs.describe')
            ->where('programs.user_id',Auth::id())
            ->get();


        $dayOfWeek =  Day::join('programs','programs.day_of_week','=','days.day_of_week')
            ->select('days.date_en','programs.describe')
            ->where('programs.user_id',Auth::id())
            ->get();



        foreach ($dayOfDate as $item) {

            $events[] = Calendar::event(

                $item->describe,

                true,

                new \DateTime($item->date_en),

                new \DateTime($item->date_en.' +1 day')

            );
        }



        foreach ($dayOfWeek as $item) {

            $events[] = Calendar::event(

                $item->describe,

                true,

                new \DateTime($item->date_en),

                new \DateTime($item->date_en.' +1 day')

            );
        }


        $calendar = Calendar::addEvents($events);
        return view('site.display',compact('calendar'));
    }


    public function dailyView(){
        return view('site.daily');
    }

    public function dateView(){
        return view('site.date');
    }
}
