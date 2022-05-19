<?php

namespace App\Http\Livewire\Pages\Donors;


use Livewire\Component;

class Main extends Component
{
    public $type = 0 , $gender = 0 ,$state , $stage = 0 ,$department , $study_type , $division;

    public function getType()
    {
        $this->emit('getUserType', $this->type, $this->gender, $this->state , $this->stage ,
         $this->department , $this->study_type , $this->division );
    }
    public function render(){
        return view('livewire.pages.donors.main');
    }
}
