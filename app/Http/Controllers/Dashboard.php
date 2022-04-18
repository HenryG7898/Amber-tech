<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $student = User::all();
//        dd($student);
        return view('Admin.index', ['student' => $student]);
    }

    public function show()
    {
        $card = User::all();
        return view('Admin.profile-card', ['card' => $card]);
    }

    public function overview()
    {
        $teacher = User::with('schedule', 'classroom')->get();
//        dd($teacher);
        return view('Admin.Review', ['teacher' => $teacher]);
    }
}
