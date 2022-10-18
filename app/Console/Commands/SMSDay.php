<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Psr\Http\Message\StreamInterface;

class SMSDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:sms-day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scheduler to send SMS for patients 2 days to appointment';

    /**
     * Execute the console command.
     *
     * @return StreamInterface
     * @throws GuzzleException
     */
    public function handle(): StreamInterface
    {
        $appointment = DB::table('next_day_appointments')
            ->where(['status'=>0])
            ->whereBetween('next_appointment', [Carbon::today()->toDate(), Carbon::today()->addDays(2)->toDate()])
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

        $client = new Client([
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
    }
}
