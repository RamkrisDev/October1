<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{   
    public $name;
    public $detail;
    public $gender;
    public $colors=[];
    public $course;
    public function FunctionName(Type $var = null)
    {
        # code...
    }
    public function render()
    {
        return view('livewire.form');
    }
}
