<?php

namespace App\Http\Livewire;

use App\Models\student_class;
use Livewire\Component;

class ClassShedule extends Component
{
    public function render()
    {
        $class = student_class::with('room','student','subject')->get();
        return view('livewire.class-shedule',['class'=>$class]);
    }
}
