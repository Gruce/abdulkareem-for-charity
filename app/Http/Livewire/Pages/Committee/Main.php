<?php

namespace App\Http\Livewire\Pages\Committee;

use Livewire\Component;
use App\Models\Committee;

class Main extends Component
{
    public function render()
    {
        $this->committees = Committee::get();
        return view('livewire.pages.committee.main');
    }
}
