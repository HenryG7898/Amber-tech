<?php

namespace App\Http\Controllers;

use App\Models\class_schedule;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherClassController extends Controller
{
    public function index()
    {
        return view('Teacher.index');
    }

    public function updatestudent(Request $request)
    {
        $validate = $request->validate([
            'profile_img' => ['required'],
        ], [
            'profile_img.required' => 'Please choose a Image to upload'
        ]);

        $pathpfp = $request->file('profile_img')->store('public');

        $cus = new User();
        $data = $cus->find($request->id);
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

    public function editstudent($id)
    {
        $cus = new User();
        $data = $cus->find($id);
        return view('Teacher.Edit-student', ['data' => $data]);
    }

    public function edit_info($id)
    {
        $cus = new User();
        $data = $cus->find($id);
        return view('Teacher.Edit-info', ['data' => $data]);
    }

    public function schedule_class()
    {
        $class = class_schedule::with('teacher','subject_class')->get();
        return view('Teacher.Schedule',['class' => $class]);
    }

    public function student_class()
    {
        $student = User::all();
        return view('Teacher.student-list',['student'=>$student]);
    }
}
