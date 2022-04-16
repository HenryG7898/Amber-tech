<?php

namespace App\Http\Livewire\AddSubject\Blade;

use App\Models\subject;
use Livewire\Component;

class Php extends Component
{
    public $subject_nm;


    protected $rules = [
        'subject_nm' => 'required',

    ];


    public function newsubject()
    {
        $this->validate();

        subject::create([
            'subject_nm' => $this->subject_nm,
        ]);

        session()->flash('success', 'Subject Added Successfully');


    }

    public function updated()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.add-subject.blade.php');
    }
}
