<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{   
    public $sum;
    public function addTwoNumbers($num1,$num2)
    {
      $this->sum=$num1+$num2;
    }
    public $message;
    public function display($msg)
    {
        $this->message=$msg;
    }
    public function render()
    {
        return view('livewire.action');
    }
}
