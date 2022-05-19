<?php

namespace App\Http\Livewire\Pages\Donors;


use Livewire\Component;

class Main extends Component
{
    public $type = 0 , $gender = 0, $state = 0;

    public function getType()
    {
        $this->emit('getUserType', $this->type, $this->gender, $this->state);
    }
    public function render(){
        return view('livewire.pages.donors.main');
    }
}
