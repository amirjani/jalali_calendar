<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Facades\jDate;
use Morilog\Jalali\jDateTime;

class TimeConvertor extends Model
{
    /**
     * @param $date
     * @return miladi date
     */
    public static function convertShamsiToMiladi($date){
        $carbon = \Morilog\Jalali\Facades\jDateTime::createDatetimeFromFormat('Y-m-d', $date);
        $carbon = json_decode(json_encode($carbon),true);
        return explode(' ',$carbon['date'])[0];
    }

    /**
     * @param $date
     * @return shamsi date
     */
    public static function ConvertMiladiToShamsi($date){
        return jDateTime::strftime('Y-m-d', strtotime($date));
    }

    /**
     * @param $date
     * @return year of date
     */
    public static function getDateYear($date){
        return explode('-',$date)[0];
    }

    /**
     * @param $date
     * @return int day of week
     */
    public static function dayOfWeek($date){
        return date('w', strtotime($date));
    }

    /**
     * @param $dateStart
     * @param $dateEnd
     * @return \DateInterval|false
     */
    public static function diffDayDateToDate($dateStart , $dateEnd){
        $dateStart = date_create($dateStart);
        $dateEnd = date_create($dateEnd);
        $interval = date_diff($dateStart , $dateEnd)->days;
        return $interval;
    }

    /**
     * @param $date
     * @return string
     */
    public static function dateSeparator($date)
    {
        $year = substr($date,0,4);
        $month = substr($date,4,2);
        $day = substr($date,6,2);
        $date = $year.'-'.$month.'-'.$day;
        return $date;
    }

    public static function getWeek($date)
    {
        $week = Carbon::parse($date);
        return $week->weekOfYear;
    }


}
