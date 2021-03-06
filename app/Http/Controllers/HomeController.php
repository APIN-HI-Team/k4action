<?php

namespace App\Http\Controllers;

use App\Models\TreatmentCurrent;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function count()
    {
        $students = TreatmentCurrent::select("sex as sex", \DB::raw("COUNT('pepid') as count"))
            ->where('CurrentARTStatus_Pharmacy','=','Active')
            ->where('Outcomes',NULL)
            ->groupBy('sex')
            ->get();

        $studentsNew = TreatmentCurrent::select("sex as sex", \DB::raw("COUNT('pepid') as count"))
            ->where('CurrentARTStatus_Pharmacy','=','Active')
            ->where('Outcomes',NULL)
            ->where('TI','!=','Yes')
            ->wherebetween('ARTStartDate',['2021-10-01','2022-09-30'])
            ->groupBy('sex')
            ->get();

        $txcurrAge = DB::table('linelist_full_apin')
               ->select(DB::raw("
               (CASE WHEN current_age <= 9 THEN '≤9'
               WHEN current_age BETWEEN 10 AND 19 THEN '10 -19'
               WHEN current_age BETWEEN 20 AND 24 THEN '20 - 24'
               WHEN current_age >= 25 THEN '25 +'
               END) as age_range,COUNT(pepid) AS count"))
            ->where('CurrentArtStatus_Pharmacy','=','Active')
            ->where('Outcomes',NULL)
            ->groupBy('age_range')
        ->get();

        $txnewAge = DB::table('linelist_full_apin')
            ->select(DB::raw("
               (CASE WHEN current_age <= 9 THEN '≤9'
               WHEN current_age BETWEEN 10 AND 19 THEN '10 -19'
               WHEN current_age BETWEEN 20 AND 24 THEN '20 - 24'
               WHEN current_age >= 25 THEN '25 +'
               END) as age_range,COUNT(pepid) AS count"))
            ->where('CurrentArtStatus_Pharmacy','=','Active')
            ->where('TI','!=','Yes')
            ->where('Outcomes',NULL)
            ->wherebetween('ARTStartDate',['2021-10-01','2022-09-30'])
            ->groupBy('age_range')
            ->get();


        return view('home', compact('students','txcurrAge','studentsNew','txnewAge'));
        //dd($data);
        //dd(json_encode($data));
    }
}
