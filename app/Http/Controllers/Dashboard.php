<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $student = User::all();
        return view('Admin.index',['student' => $student]);
    }
}
