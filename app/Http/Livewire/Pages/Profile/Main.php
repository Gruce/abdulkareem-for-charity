<?php

namespace App\Http\Livewire\Pages\Profile;
use Livewire\Component;
use App\Modles\User;
use App\Modles\Student as StudentModel;
class Main extends Component
{
    protected $listeners = [ '$refresh'];

    public function mount(){
        $this->user = auth()->user()->load('student');
    }

    public function render(){
        return view('livewire.pages.profile.main');
    }
}
