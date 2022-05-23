<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\{ 
    Event,
};

class Main extends Component
{
    protected $listeners = [ '$refresh' ];

    public function render(){
        $this->events = Event::orderByDesc('id')->take(4)->get();
        return view('livewire.pages.home.main');
    }
}