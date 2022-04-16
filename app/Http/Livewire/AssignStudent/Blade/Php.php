<?php

namespace App\Http\Livewire\AssignStudent\Blade;

use Livewire\Component;

class Php extends Component
{
    public $student_id;
    public $class_id;
    public $class;
    public $student;

    protected $rules = [
        'student_id' => 'required|max:12',
        'class_id' => 'required|max:12',
    ];


    public function assignclass()
    {
        $this->validate();

        Student_class::create([
            'student_id' => $this->student_id,
            'class_id'  => $this->class_id,
        ]);

        session()->flash('success', 'Student Assign To a Class');


    }

    public function mount(){
        $class = Class_schedule::with('subject')->get();
        $student = User::all();
        $this->class = $class;
        $this->student = $student;
    }
    public function render()
    {
        return view('livewire.assign-student.blade.php');
    }
}
