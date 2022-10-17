<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Helpers\Scripts as Helper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/treatment-filter', function (Request $request) {
    if($request->report_type == 'vl'){
        return Helper::vLGraph($request,$request->report_type);
    }else{
        return Helper::treamentPerformance($request,$request->report_type);
    }
})->name('treatment.filter');


Route::get('/get-widget/{id}', function($page){
    return View::make('report.'.$page);
});

Route::get('/sendSMS', function(Request $request){
    $appointment = DB::table('next_day_appointments')
        ->where(['status'=>0])
        ->whereNotNull('phone_no')->get();

    $sent = [];
    $res = "";
    $ids = [];

    foreach ($appointment as $key => $value){
        $ids[$key]['id'] = $value->id;
        $ids[$key]['Datim_Code'] = $value->datim_code;
        $ids[$key]['status'] = 1;
        $sent[$key]['PepId'] = $value->pepid;
        $sent[$key]['VisitDate'] = $value->next_appointment;
        $sent[$key]['PhoneNumber'] = $value->phone_no;
        $sent[$key]['AppointmentDate'] = $value->next_appointment;
        $sent[$key]['AppointmentOffice'] = 'P';
        $sent[$key]['AppointmentData'] = array('DrugToCollect'=>"AZT/3TC/NVP",'NextApptDate'=> $value->next_appointment);
    }

    /*dd(json_encode($sent,JSON_UNESCAPED_SLASHES));*/

    $client = new \GuzzleHttp\Client([
        'verify' => base_path('public/cacert.pem')
    ]);

    $response = $client->post('https://pbs.apin.org.ng/Integration/MessageDeliveryRequest/PushNextAppointment',[
        'headers' => ['Content-Type' => 'application/json'],
        'body' => json_encode($sent,JSON_UNESCAPED_SLASHES)
    ]);

    $res = $response->getBody();

    foreach($ids as $key => $id){
        DB::table('next_day_appointments')
            ->where('id',$id)
            ->update(['status' => 1]);
    }

    return $res;
    /*dd(json_encode($res,JSON_UNESCAPED_SLASHES));**/
})->name('appointments');
