<?php

namespace App\Http\Controllers;

use App\Models\report_admin;
use App\Models\report_class;
use Illuminate\Http\Request;

class ReportClassController extends Controller
{
    public function index(){
        $report = report_admin::all();
        return view('Admin.report',['report'=>$report]);
    }

    public function reportstore(Request $request){

        report_class::create([
            'student_id' => $request->Auth()->id,
            'details' => $request->detials,
        ]);
        return back()->with('success', 'Report Sent');
    }

    public function destroy($id){
        $delete = report_admin::destroy($id);
        return back()->with('success','Report Deleted');
    }
}
