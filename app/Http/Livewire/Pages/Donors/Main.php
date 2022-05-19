<?php

namespace App\Http\Livewire\Pages\Donors;


use Livewire\Component;

class Main extends Component
{
    public $type = 0, $gender = 0, $state = 0, $study_type = 0, $stage = 0, $department = 0, $division = 0;

    public function getType()
    {
        $this->emit(
            'getUserType',
            $this->type,
            $this->gender,
            $this->state,
            $this->study_type,
            $this->stage,
            $this->department,
            $this->division
        );
    }
    public function render()
    {
        return view('livewire.pages.donors.main');
    }
}
