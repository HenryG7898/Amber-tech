<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Hash;

class CreateTeacher extends Component
{
    public $first_nm;
    public $last_nm;
    public $gender;
    public $dob;
    public $phone_nbr;
    public $email;
    public $password = '';
    public $user_type;

    protected $rules = [
        'first_nm' => 'required|max:12',
        'last_nm' => 'required|max:12',
        'gender' => 'required|max:12',
        'dob' => 'required',
        'phone_nbr' => 'required',
        'email' => 'required|email|unique:users',
//        'user_type' => 'required',
        'password' => 'required '
    ];

    protected $messages = [
        'first_nm.required' => 'The First Name field is required.',
        'last_nm.required' => 'The Last Name field is required.',
        'gender.required' => 'The Gender field is required.',
        'dob.required' => 'The Date Of Birth field is required.',
        'phone_nbr.required' => 'The Phone Number field is required.',
    ];

    public function resetForm(){
        $this->first_nm='';
        $this->last_nm='';
        $this->dob='';
        $this->phone_nbr='';
        $this->gender='';
        $this->email='';
        $this->password='';
    }

    public function newteacher()
    {
        $this->validate();

        User::create([
            'first_nm' => $this->first_nm,
            'last_nm'  => $this->last_nm,
            'dob'  => $this->dob,
            'phone_nbr'  => $this->phone_nbr,
            'gender'  => $this->gender,
            'email' => $this->email,
            'user_type' => 'Teacher',
            'password' => hash::make($this->password),
        ]);

        session()->flash('success', 'Teacher account was registered!');

        $this->resetForm();

    }

    public function updated()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.create-teacher');
    }
}
