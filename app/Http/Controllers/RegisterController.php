<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){

        $validate = $request->validate([
            'first_nm' =>['required','string'],
            'last_nm' =>['required','string'],
//            'Class' =>['required','string'],
            'gender' =>['required','string'],
            'dob' =>['required'],
            'phone_nbr' =>['required','string','numeric',],
            'email' =>['required','string','email'],
            'password' => ['required']
        ],[
            'first_nm.required' => 'The First Name field is required.',
            'last_nm.required' => 'The Last Name field is required.',
            'gender.required' => 'The Gender field is required.',
            'dob.required' => 'The Date Of Birth field is required.',
            'phone_nbr.required' => 'The Phone Number field is required.',
        ]);

        $cus = User::create([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'email' => $request->email,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone_nbr' => $request->phone_nbr,
            'password' => hash::make($request->password)
        ]);

        return 'ok';
    }
}
