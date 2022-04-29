<?php

namespace App\Helpers;

use App\Models\VLPerformance;
use App\HTSPerformance;
use App\TreatmentPerformance;
use Illuminate\Support\Facades\DB;

class Scripts
{

    #TX  Graphs


    public static function vLGraph($data)
    {

        $facilityList = VLPerformance::select(DB::raw(

            "CAST(COALESCE(SUM(active),0)  AS UNSIGNED) as `active`,
            CAST(COALESCE(SUM(eligible),0)  AS UNSIGNED) as `eligible`,
            CAST(COALESCE(SUM(supressedVl),0)  AS UNSIGNED) as supressedVl ,
            CAST(COALESCE(SUM(eligibleWithVl),0)  AS UNSIGNED) as eligibleWithVl ,
            state
            "
        ))
            ->state($data->states)
            ->groupBy('state')
            ->withoutGlobalScopes()
            ->get();

        $state = [];
        $txCurr = [];
        $eligible = [];
        $eligibleWithVl = [];
        $viralLoadSuppressed = [];
        $txVlCoverage = [];
        $percentageViralLoadSuppressed = [];
        foreach ($facilityList as $index => $list) {
            $state[$index] =  $list->state;
            $txCurr[$index] =  $list->active;
            $eligible[$index] =  $list->eligible;
            $eligibleWithVl[$index] = $list->eligibleWithVl;
            $viralLoadSuppressed[$index] =  $list->supressedVl;
            $txVlCoverage[$index] = round((($list->eligible/$list->eligibleWithVl)*100),2);
            $percentageViralLoadSuppressed[$index] =  round((($list->supressedVl/$list->eligibleWithVl)*100),2);
        }

        $result=[
            'treatment_perfomance' => (!empty($list)) ? (array) $list->getAttributes() : [],
            'states'=>$state,
            'eligible' => $eligible,
            'eligibleWithVl' => $eligibleWithVl,
            'tx_curr'=>$txCurr,
            'viralLoadSuppressed'=>$viralLoadSuppressed,
            'tx_Vl_Coverage'=>$txVlCoverage,
            'percentage_viral_load_suppressed'=>$percentageViralLoadSuppressed
        ];

        return (!empty($result)) ?  $result : [];
    }

}
