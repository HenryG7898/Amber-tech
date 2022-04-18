<?php

namespace App\Http\Livewire\AssignStudent\Blade;

use App\Models\class_schedule;
use App\Models\student_class;
use App\Models\User;
use Livewire\Component;

class Php extends Component
{
    public $student_id;
    public $class_id;
    public $classes;
    public $student;

    protected $rules = [
        'student_id' => 'required|max:12',
        'class_id' => 'required|max:12',
    ];


    public function assignclass()
    {
        $this->validate();

        student_class::create([
            'student_id' => $this->student_id,
            'class_id'  => $this->class_id,
        ]);

        session()->flash('success', 'Student Assign To a Class');


    }

    public function mount(){
        $class = class_schedule::all();
        $student = User::all();
//        dd($class);
        $this->class = $class;
        $this->student = $student;
    }
    public function render()
    {
        return view('livewire.assign-student.blade.php');
    }
}
