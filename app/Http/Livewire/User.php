<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
              <h1> User Inline component</h1>
            </div>
        blade;
    }
}
