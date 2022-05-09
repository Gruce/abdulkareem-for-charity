<?php

namespace App\Http\Livewire\Components\Donors;

use Livewire\Component;

class Card extends Component
{
    public $name, $type, $shares, $photo, $date;
    public function render()
    {
        return view('livewire.components.donors.card');
    }
}
