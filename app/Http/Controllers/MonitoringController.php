<?php

namespace App\Http\Controllers;
use App\Helpers\Scripts as Helper;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $data = [
            'dashboardGraphs' => Helper::dashboardGraphs(),
            'tomorrow_appointments' => Helper::dashbordScript("tomorrow_appointments"),
            'today_appointments' => Helper::dashbordScript("today_appointments"),
            'missed_appointment' => Helper::dashbordScript("missed_appointment")
        ];

        return view('monitoring',compact('data'));
    }
}
