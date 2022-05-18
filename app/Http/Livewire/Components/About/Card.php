<?php

namespace App\Http\Livewire\Components\About;

use Livewire\Component;

class Card extends Component
{
    public $team;
    public function render()
    {
        return view('livewire.components.about.card');
    }
}
