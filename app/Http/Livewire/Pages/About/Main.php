<?php

namespace App\Http\Livewire\Pages\About;

use App\Models\Developer;
use Livewire\Component;

class Main extends Component
{
    public function render(){
        $this->developers = Developer::get();
        return view('livewire.pages.about.main');
    }
}
