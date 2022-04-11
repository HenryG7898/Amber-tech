<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function index(){
        return view('Admin.EditStudent');
    }

    public function updatestudent(Request $request){
//        $validate = $request->validate([
//            'first_nm' =>['required','string'],
//            'last_nm' =>['required','string'],
//            'profile_img' =>['required'],
//            'gender' =>['required','string'],
//            'dob' =>['required'],
//            'phone_nbr' =>['required','string','numeric',],
//            'Email' =>['required','string','email'],
//        ]);
//dd($validate);
        $pathpfp = $request->file('profile_img')->store('public');

        $cus = new User();
        $data = $cus->find($request->id);
//        dd($data);
        if ($data) {
            $data->first_nm = $request->first_nm;
            $data->last_nm = $request->last_nm;
            $data->email = $request->email;
            $data->phone_nbr = $request->phone_nbr;
            $data->profile_img = $pathpfp;
            $data->gender = $request->gender;
            $data->dob = $request->dob;
            $data->save();
        }
        return redirect('/');
    }

    public function Edit($id){
        $cus = new User();
        $data = $cus->find($id);
        return view('Admin.EditStudent',['data'=>$data]);
    }
}
