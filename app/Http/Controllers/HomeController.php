<?php

namespace App\Http\Controllers;
use App\Model\Day;
use Calendar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            ->select('days.date_en','programs.describe' , 'programs.time')
            ->where('programs.user_id',Auth::id())
            ->get();

        $dayOfWeek = DB::table('programs')
            ->join('days', 'programs.day_of_week', '=', 'days.day_of_week')
//            ->join('days', 'programs.week_kind', '=', 'days.even_week')
            ->select('days.date_en','programs.describe' , 'programs.time' , 'programs.week_kind')
            ->get();

//        $dayOfWeek =  Day::join('programs','programs.day_of_week','=','days.day_of_week')
////            ->join('programs' , 'programs.week_kind' , '=' , 'days.even_week')
//            ->select('days.date_en','programs.describe')
//            ->where('programs.user_id',Auth::id())
//            ->get();



        foreach ($dayOfDate as $item) {

            $events[] = Calendar::event(

                $item->describe . ' - ' . $item->time,



                true,

                new \DateTime($item->date_en),

                new \DateTime($item->date_en.' +1 day') ,

                null,
                                // Add color and link on event
                     [
                        'color' => 'red',
                     ]

            );
        }



        foreach ($dayOfWeek as $item) {

//            if ($item->week_kind == 2)
            $events[] = Calendar::event(

                $item->describe . ' - ' . $item->time,

                true,

                new \DateTime($item->date_en),

                new \DateTime($item->date_en.' +1 day')   ,


                null,
                                // Add color and link on event
                                [
                                    'color' => 'red',
                //                    'height' => '200px'
                                ]
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
