<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;

class Main extends Component
{
    protected $listeners = ['$refresh' ,'search'];

    public $search;

    public function search($search){
        $this->search = $search;
        
    }

    public function render(){
        $search = '%' . $this->search . '%';
        $this->events = Event::where('title', 'LIKE', $search)->get(); 
        
        return view('livewire.pages.cases.main');
    }
}
