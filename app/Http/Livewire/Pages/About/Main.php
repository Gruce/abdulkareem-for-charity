<?php

namespace App\Http\Livewire\Pages\About;

use App\Models\Developer;
use Livewire\Component;

class Main extends Component{

    public function render(){
        $this->developers = Developer::where('type', 1)->get();
        $this->managers = Developer::where('type', 2)->get();
        
        return view('livewire.pages.about.main');
    }
}
