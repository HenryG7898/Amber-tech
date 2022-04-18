<?php

namespace App\Http\Controllers;

use App\Models\student_class;
use Illuminate\Http\Request;

class ClassScheduleController extends Controller
{
    public function index(){
        $class = student_class::with('room','student','subject')->get();
//        dd($class);
        return view('Student.Class-schedule',['class'=>$class]);
    }
}
