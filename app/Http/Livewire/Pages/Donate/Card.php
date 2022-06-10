<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;

class Card extends Component
{
    public $item;
    public function render()
    {
        return view('livewire.pages.donate.card');
    }
}
