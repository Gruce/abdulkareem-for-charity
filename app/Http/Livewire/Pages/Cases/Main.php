<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;
class Main extends Component
{
    public function render()
    {
        $this->cases= Event::orderByDesc('id')->get();
        // dd($this->cases->toArray());
        return view('livewire.pages.cases.main');
    }
}
