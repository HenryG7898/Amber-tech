<?php

namespace App\Http\Controllers;

use App\Models\report_admin;
use Illuminate\Http\Request;

class ReportAdminController extends Controller
{
    public function index(){
        return view('report_issue');
    }

    public function reportstore(Request $request){
        $validate = $request->validate([
            'first_nm' =>['required','string'],
            'last_nm' =>['required','string'],
            'phone_nbr' =>['required','string'],
            'detail' =>['required','string'],
            'email' =>['required','string','email'],
        ],[
            'first_nm.required' => 'The First Name field is required.',
            'last_nm.required' => 'The Last Name field is required.',
            'phone_nbr.required' => 'The Phone Number field is required.',
            'detail.required' => 'The Reason Why field is required.',
        ]);

        report_admin::create([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'phone_nbr' => $request->phone_nbr,
            'email' => $request->email,
            'detail' => $request->detail,
        ]);
        return back()->with('success', 'Report Sent');
    }

}
