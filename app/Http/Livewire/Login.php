<?php

namespace App\Http\Livewire;

//use Auth;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function onLogin(){

         $vail = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if(Auth::attempt(
               $vail
        )) {
//            return "ok";
            if (Auth::user()->user_type != 'student') {
                session()->flash('message', 'Logged in successfully');
                return 'ok';
            } elseif (Auth::user()->user_type == 'teacher') {
                session()->flash('message', 'Logged in successfully');
                return redirect('teacher/dashboard');
            } elseif (Auth::user()->user_type == 'student') {
                session()->flash('message', 'Logged in successfully');
                return redirect('student-dashboard');
            } else {
                session()->flash('error', 'Login failed');
            }
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
