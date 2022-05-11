<?php

namespace App\Http\Livewire\Cases;

use Livewire\Component;

class Main extends Component
{
    public function render(){
        return view('livewire.cases.main')->layout('layouts.guest');
    }
}
