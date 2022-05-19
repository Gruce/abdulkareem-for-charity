<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;
use App\Models\Share;
class Main extends Component
{
    protected $listeners = ['$refresh' ,'search'];

    public $search;

    public function mount()
    {
        $payments = Event::sum('received_price');
        $this->total = Share::where('state', true)->sum('share') * 2000;
        $this->current_price = $this->total - $payments;
    }

    public function search($search){
        $this->search = $search;

    }

    public function render(){
        $search = '%' . $this->search . '%';
        $this->events = Event::where('title', 'LIKE', $search)->get();

        return view('livewire.pages.cases.main');
    }
}
