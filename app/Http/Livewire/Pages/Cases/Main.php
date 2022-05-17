<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;

class Main extends Component
{

    

    

    public function render()
    {
        
        $events = Event::orderByDesc('id')->get();
        // dd($events->toArray());
        return view('livewire.pages.cases.main', compact('events'));
    }
}
