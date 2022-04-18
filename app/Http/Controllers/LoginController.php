<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
    return view('login');
    }

    public function onLogin(Request $request)
    {
        $valid = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($valid)) {

            $request->session()->regenerate();

            if (Auth::user()->user_type == 'student') {
                return redirect('student-dashboard')->with('success', 'Login Successfully');
            }elseif (Auth::user()->user_type == 'Teacher'){
                return redirect('dashboard')->with('success', 'Login Successfully');
            }elseif (Auth::user()->user_type == 'Admin'){
                return redirect('dashboard')->with('success', 'Login Successfully');
            }
        }

        return back()->with([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

}
