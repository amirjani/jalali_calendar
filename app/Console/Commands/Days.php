<?php

namespace App\Console\Commands;

use App\Model\Day;
use App\Model\TimeConvertor;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Days extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Days';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate days';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $year = $this->ask('year');
        $lastDay = Day::orderBy('id','desc')->get()->first();
        $lastYear = count($lastDay) > 1 ? explode('-',$lastDay->date_fa)[0] : 0;
        if (count( $lastDay) == 0 || $lastYear != $year){
            if ($year > 1300 && $year < 1500){
                $jdate = $year.'-01-01';
                $miladiDate = TimeConvertor::convertShamsiToMiladi($jdate);

//                $week = Carbon::createFromDate($miladiDate);
//                logger($week);




//                logger($)
//                if ( $day % 2 == 0){
//                    $isEven = 1 ;
//                }else{
//                    $isEven = 0 ;
//                }
//                logger($day);
                $this->output->progressStart(366);
                for ($i = 1 ; $i <= 366  ; $i++){
                    $shamsiDate = TimeConvertor::ConvertMiladiToShamsi($miladiDate);
                    $dayOfWeek = TimeConvertor::dayOfWeek($miladiDate);
                    $week = TimeConvertor::getWeek($miladiDate);
                    if (TimeConvertor::getDateYear($shamsiDate) == $year){
                        $day = new Day();
                        $day->date_en = $miladiDate;
                        $day->date_fa = $shamsiDate;
                        $day->day_of_week = $dayOfWeek;
                        if ($week % 2 == 0 ){
                            $day->even_week = 1;
                        }else{
                            $day->even_week = 0 ;
                        }
                        $day->save();
                    }
                    $miladiDate = date('Y-m-d', strtotime('+1 day', strtotime($miladiDate)));
                    $this->output->progressAdvance();
                }
                $this->output->progressFinish();
            }
        }
        $this->info('success');
    }
}
