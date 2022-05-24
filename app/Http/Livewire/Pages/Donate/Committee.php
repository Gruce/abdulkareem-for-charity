<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;
//use App\Models\Committee;

class Committee extends Component
{
    public $committee;
    public function render()
    {
        return view('livewire.pages.donate.committee');
    }
}
