<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $student = User::where('user_type', 'Student')->paginate(7);
        $teacher = User::where('user_type', 'Teacher')->paginate(7);
        $admin = User::where('user_type', 'Admin')->paginate(7);
//        $student = User::all();
//        dd($student);
        return view('Admin.index', ['student' => $student,'teacher'=>$teacher,'admin'=>$admin]);
    }

    public function show()
    {
        $card = User::where('user_type', 'Student')->paginate(9);
        return view('Admin.profile-card', ['card' => $card]);
    }

    public function overview()
    {
        $teacher = User::where('user_type', 'Teacher')->paginate(5);
//        dd($teacher);
        return view('Admin.Review', ['teacher' => $teacher]);
    }

    public function destroy($id){
        $delete = User::destroy($id);
//        $delete = User::truncate();
//        dd($delete);


        return back()->with('success','Data Deleted');
    }
}
