<?php

namespace App\Http\Livewire\Pages\Admins;

use App\Models\User;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $this->admins = User::where('is_admin', true)->get();
        return view('livewire.pages.admins.main');
    }
}
