<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;

class Main extends Component
{

    public $search;

    protected $listeners = ['delete', '$refresh', 'search'];

    function search($string)
    {
        $this->search = $string;
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->events = Event::where('title', 'LIKE', $search)->orderByDesc('id')->get();
        //dd($this->events->toArray());
        return view('livewire.pages.cases.main');
    }
}
