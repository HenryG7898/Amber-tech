<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return User::where('user_type', 'Teacher')->get();
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_nm' =>['required','string'],
            'last_nm' =>['required','string'],
            'gender' =>['required','string'],
            'user_type' =>['required','string'],
            'dob' =>['required','date'],
            'phone_nbr' =>['required','string','numeric',],
            'email' =>['required','string','unique:users','email'],
            'password' => ['required']
        ], $message = [
            'first_nm.required' => 'The First Name field is required.',
            'last_nm.required' => 'The Last Name field is required.',
            'gender.required' => 'The Gender field is required.',
            'user_type.required' => 'Please choose a User Type: Admin, Teacher or Student',
            'dob.required' => 'The Date Of Birth field is required.',
            'phone_nbr.required' => 'The Phone Number field is required.',
        ]);
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = User::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    }

    /**
     * Search for a name
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return User::where('first_nm', 'like', '%'.$name.'%')->get();
    }
}
