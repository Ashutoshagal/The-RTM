<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Getallvalues;

class ReportController extends Controller
{
    public function Individual_report(Request $request)
    {

        $urlid = $request->input('key');
        //echo $name;
        $individualreport = new Getallvalues();
        $urlreport = $individualreport->getallvalues($urlid);
       // return view('report')->with('allvalues',$urlreport);
        // echo $urlreport->total_images;
    }
    public function test($domain){
        $det_data = Getallvalues::getallvalues($domain);
        return view('admin.rtm_app.sec')->with("data",$det_data);
    }

    public function info(){
        return view('admin.rtm_app.info_panel');
    }

}
