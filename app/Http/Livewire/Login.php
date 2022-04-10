<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function onLogin(){

        $vaild = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            if (Auth::user()->user_type == 'admin') {
                session()->flash('message', 'Logged in successfully');
                return redirect('dashboard');
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
}
