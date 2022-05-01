<?php

namespace App\Http\Livewire\Guest\Home;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.guest.home.main')->layout('layouts.guest');
    }
}
