<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;
use Livewire\WithPagination;

class User extends Component
{   
    use WithPagination;
    // public $users;
    public function render()
    {
        // return <<<'blade'
        //     <div>
        //       <h1> User Inline component</h1>
        //     </div>
        // blade;


        // $this->users=Users::all();
        $users=Users::paginate(5);
        return view('livewire.user',compact('users'));
    }
}
