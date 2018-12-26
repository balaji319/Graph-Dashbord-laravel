<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Home extends Model
{
    public static function advertSpikesPastHour() {
        try {
            $minutes_in = date('i');
            $minutes_in_minus = date('i', strtotime('-1 hour'));
            $last_hr_time = date('Y-m-d H:i:s', strtotime('-1 hour'));
            $current_time = date('Y-m-d H:i:s');
            $adv_spikes = [];
            for($i=$minutes_in; $i <= 60; $i=$i+2 ){
               $sql = "SELECT count(*) as Calls FROM hangups where DATEPART(minute, hangupdate) = '".$i."' and hangupdate >= '".$last_hr_time."' and CompanyID = '". session('user_info')->CompanyID ."'";
               $info = DB::select($sql);
               $adv_spikes[] = ['min'=>$i,'calls'=>$info[0]->Calls];
            }
            for($i=0; $i < $minutes_in_minus; $i=$i+2 ){
               $sql = "SELECT count(*) as Calls FROM hangups where DATEPART(minute, hangupdate) = '".$i."' and hangupdate >= '".$last_hr_time."' and CompanyID = '". session('user_info')->CompanyID ."'";
               $info = DB::select($sql);
               $adv_spikes[] = ['min'=>$i,'calls'=>$info[0]->Calls];
            }
            return $adv_spikes;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    
    
    public static function hourlyCalls() {
        try {
            $current_time = date('Y-m-d H:i:s');
            $hrs_calls = [];
            for($i=0; $i <= 23; $i++ ){
               $sql = "SELECT count(*) as Calls FROM hangups where DATEPART(hour, hangupdate) = '".$i."' and hangupdate >= '".date('Y-m-d')."' and CompanyID = '". session('user_info')->CompanyID ."' and hangupdate < '".$current_time."'";
               $info = DB::select($sql);
               $hrs_calls[] = ['hrs'=>$i,'calls'=>$info[0]->Calls];
            }
            return $hrs_calls;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

}
