<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'first_nm' =>['required','string'],
            'last_nm' =>['required','string'],
            'gender' =>['required','string'],
            'dob' =>['required','date'],
            'phone_nbr' =>['required','string','numeric',],
            'email' =>['required','string','unique:users','email'],
            'password' => ['required']
        ], $message = [
            'first_nm.required' => 'The First Name field is required.',
            'last_nm.required' => 'The Last Name field is required.',
            'gender.required' => 'The Gender field is required.',
            'dob.required' => 'The Date Of Birth field is required.',
            'phone_nbr.required' => 'The Phone Number field is required.',
        ]);

        $user = User::create([
            'first_nm' => $fields['first_nm'],
            'last_nm' => $fields['last_nm'],
            'email' => $fields['email'],
            'gender' => $fields['gender'],
            'dob' => $fields['dob'],
            'phone_nbr' => $fields['phone_nbr'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
