<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;
use App\Models\Share;

class Main extends Component
{
    protected $listeners = ['$refresh', 'search'];

    public $search, $received_price, $target, $selectEvent , $current_price;

    public function search($search)
    {
        $this->search = $search;
    }
    public function getEvent()
    {
        $this->emit(
            'getEvent',
            $this->received_price,
            $this->target,
            $this->selectEvent,
            $this->current_price,
        );
    }
    public function render()
    {
        

        $search = '%' . $this->search . '%';
        $this->events = [];
        if ($this->selectEvent == 1) {
            $this->events = Event::where('title', 'LIKE', $search)->whereColumn('received_price', '=', 'target')->get();
        } elseif ($this->selectEvent == 2)
            $this->events = Event::where('title', 'LIKE', $search)->whereColumn('received_price', '<', 'target')->get();
        else $this->events =  Event::where('title', 'LIKE', $search)->get();
        //$this->events =  $this->events->where('title', 'LIKE', $search)->get();
        return view('livewire.pages.cases.main');
    }
}
