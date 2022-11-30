<?php

namespace App\Http\Livewire\Pages\About;

use Livewire\Component;

class CardContributors extends Component
{
    public $team;
    public function render()
    {
        return view('livewire.pages.about.card-contributors');
    }
}
