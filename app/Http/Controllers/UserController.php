<?php

namespace App\Http\Controllers;

use App\Model\Day;
use App\Model\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function setDailySchedule(Request $request){
        $this->validate($request , [
           'day_of_week' => 'required',
           'time' => 'required',
           'describe' => 'required',
        ]);

        $program = new Program();
        $program->user_id = Auth::user()->id;
        $program->day_of_week = Input::get('day_of_week');
        $program->describe = Input::get('describe');

        $status = 'success';
        if ($program->save()){
            $status = 'failed';
        }

        return [
            'status' => $status
        ];
    }

    /**
     * @param $scheduleId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteSchedule($scheduleId){
        $program = Program::find($scheduleId);
        $program->delete();

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setDateSchedule(Request $request){
        $this->validate($request , [
            'date' => 'required',
            'time' => 'required',
            'describe' => 'required',
        ]);

        $day = Day::where('date_en',Input::get('date'))->first();

        if ($day){
            $program = new Program();
            $program->user_id = Auth::user()->id;
            $program->day_id = $day->id;
            $program->save();
        }

        return redirect()->back();
    }

    /**
     * @return array
     */
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
