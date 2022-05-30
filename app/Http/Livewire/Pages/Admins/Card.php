<?php

namespace App\Http\Livewire\Pages\Admins;

use Livewire\Component;

class Card extends Component
{
    public $admin;
    public function render()
    {
        return view('livewire.pages.admins.card');
    }
}
