<?php

namespace App\Http\Controllers;

use App\Console\Commands\Days;
use App\Exceptions\Handler;
use App\Libraries\Helpers;
use App\Model\Day;
use App\Model\Program;
use App\Model\TimeConvertor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Mockery\Exception;
use Morilog\Jalali\jDate;
use Morilog\Jalali\jDateTime;
use function PHPSTORM_META\type;

class UserController extends Controller
{
    public function setDailySchedule(Request $request){
        $program = new Program();
        $program->user_id = auth()->user()->id;
        $program->day_of_week = $request->day_of_week;
        $program->time = $request->time;
        $program->describe = $request->title;
        $program->week_kind = $request->week_kind ;
        $program->save();
        return redirect()->back();
    }

    public function setDateSchedule(Request $request){

        $date =Helpers::convertNumberToEN($request->date) ;
        $data = str_split($date , 8);
        $date = \Morilog\Jalali\jDateTime::toGregorian(Helpers::PersianToEnglish(Helpers::getPersianYear($request->date))+1348 , Helpers::PersianToEnglish(Helpers::getPersianMonth($request->date)) , $data[1]);

        $dateString = $date[0] . '-' . $date[1] . '-' .$date[2] ;
        $day = Day::where('date_en',$dateString)->first();

        if ($day){
            $program = new Program();
            $program->user_id = auth()->user()->id;
            $program->day_id = $day->id;
            $program->time = $request->time;
            $program->describe = $request->describe;
            $program->save();
        }
        return redirect()->back();
    }

    public function getSchedule(){
        $scheduleDate = Day::join('programs','programs.day_id','=','days.id')
            ->where('user_id',Auth::id())
            ->select('days.date_en','programs.time','programs.describe')
            ->get();

        $scheduleDay = Day::join('program','programs.day_of_week','=','days.day_of_week')
            ->where('user_id',Auth::id())
            ->select('days.date_en','programs.time','programs.describe')
            ->get();

        $schedule = [];
        foreach ($scheduleDate as $item) {
            $schedule[] = $item;
        }

        foreach ($scheduleDay as $item){
            $schedule[] = $item;
        }

        return [
            'schedule' => $schedule
        ];
    }
}
