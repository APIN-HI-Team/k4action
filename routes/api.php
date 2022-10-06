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
