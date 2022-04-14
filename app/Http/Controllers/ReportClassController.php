<?php

namespace App\Http\Controllers;

use App\Models\report_class;
use Illuminate\Http\Request;

class ReportClassController extends Controller
{
    public function index(){
        return view();
    }

    public function reportstore(Request $request){

        report_class::create([
            'student_id' => $request->Auth()->id,
            'details' => $request->detials,
        ]);
        return back()->with('success', 'Report Sent');
    }
}
