<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title;
        public $name;
        public $infos=[];

        public function mount()
        {
        $this->infos[]="Application is mounting";
        }

        public function hydrate()
        {
            $this->infos[]="Application is hydrate";
        }
        public function updating($name,$value)
        {
            $this->infos[]="Application is updating";
        }
        public function updated($name,$value)
        {
            $this->infos[]="Application is updated";
        }
        public function updatingName()
        {
            $this->infos[]="Application is name property updating";
        }
        public function updatedName()
        {
            $this->infos[]="Application is name property updated";
        }
    public function render()
    {
        return view('livewire.product');
    }
}
