<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyRecord;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;


class WebappController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function webapp()
    {

        $todaydata = new Carbon('today');
        $today = $todaydata->format('Y-m-d');
        $thismonth = $todaydata->format('m');
        $thisyear = $todaydata->format('Y');



        $records = new StudyRecord;
        $today_records = $records->whereDate('day', '=', $today);
        $thismonth_records = $records->whereYear('day', $thisyear)->whereMonth('day', $thismonth);
        $thisyear_records = $records->whereYear('day', $thisyear);

        $today_study_time = $today_records->sum('time');
        $thismonth_study_time = $thismonth_records->sum('time');
        $thisyear_study_time = $thisyear_records->sum('time');

        $startOfMonth = Carbon::now()->startOfMonth()->toDateString();
        $endOfMonth = Carbon::now()->endOfMonth()->toDateString();

        $daysInThisMonth = Carbon::now()->daysInMonth;


        //今月をY-m-d型で配列に入れる
        $period = CarbonPeriod::create($startOfMonth, $endOfMonth)->toArray();
        foreach ($period as $key => $date) {
            $dates[] = $date->format('Y-m-d');
        }

        //その日の学習時間を配列に入れる
        foreach ($dates as $date) {
            $study_time = StudyRecord::select('time')->where('day', $date)->value('time');
            if (isset($study_time)) {
                $each_day_study_times[] = $study_time;
            } else {
                $each_day_study_times[] = 0;
            }
        }

        //contentごとの総勉強時間を取得

        $study_time_contents = StudyRecord::select('content_status')
            ->selectRaw('SUM(time) AS total_time')
            ->groupBy('content_status')
            ->get();

        //languageごとの総勉強時間を取得

        $study_time_languages = StudyRecord::select('language_status')
            ->selectRaw('SUM(time) AS total_time')
            ->groupBy('language_status')
            ->get();



        //view('blade.phpの前についてる名前', 使いたい配列)
        return view('webapp_home', compact('today_study_time', 'thismonth_study_time', 'thisyear_study_time', 'daysInThisMonth', 'dates', 'each_day_study_times', 'study_time_contents', 'study_time_languages'));
    }
}
