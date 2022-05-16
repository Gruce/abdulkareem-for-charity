<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\Event;
class Main extends Component
{
    public function mount()
    {
        $this->events = Event::get();
    }
    public function render(){
        return view('livewire.pages.home.main');
    }
}
