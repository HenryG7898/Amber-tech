<?php

namespace App\Http\Controllers;

use App\Models\Parent_class;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use phpDocumentor\Reflection\Types\Parent_;

class ViewStudent extends Controller
{
    public function studentinfo($id)
    {
        $data = User::where('id',$id)->get();
//        $data = User::with('parent')->where('id',$id)->get();
        $parent = Parent_class::where('student_id', $id)->get();
        return view('Admin.ViewInfo',['data'=>$data,'parent'=>$parent]);
    }

    public function store(Request $request){

        $validate = $request->validate([
            'student_id' =>['required'],
            'first_nm' =>['required','string'],
            'last_nm' =>['required','string'],
            'relation' =>['required','string'],
            'gender' =>['required','string'],
            'DOB' =>['required'],
            'phone_nbr' =>['required'],
            'email' =>['required','string','email'],
        ],[
            'first_nm.required' => 'The First Name field is required.',
            'last_nm.required' => 'The Last Name field is required.',
            'gender.required' => 'The Gender field is required.',
            'relation.required' => 'The Parent/Guardian field is required.',
            'DOB.required' => 'The Date Of Birth field is required.',
            'phone_nbr.required' => 'The Phone Number field is required.',
        ]);
//dd($validate);
        $cus = Parent_class::create([
            'student_id' => $request->input('student_id'),
            'first_nm' => $request->input('first_nm'),
            'last_nm' => $request->input('last_nm'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'DOB' => $request->input('DOB'),
            'phone_nbr' => $request->input('phone_nbr'),
            'relation' => $request->input('relation'),
        ]);

//        dd($cus);

        return back()->with('success','Parent Added Successfully');
    }
}
