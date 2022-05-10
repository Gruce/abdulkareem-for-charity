<?php

namespace App\Http\Livewire\Components\Donors;

use Livewire\Component;

class Card extends Component
{
    public $name, $type, $shares, $photo, $date, $email, $phone_number;

    public function add()
    {
        
    }

    public function render()
    {
        return view('livewire.components.donors.card');
    }
}
