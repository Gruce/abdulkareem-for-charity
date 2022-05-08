<?php

namespace App\Http\Livewire\Pages\Donors;

use App\Models\User;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $this->users= User::withSum('shares','share')->orderByDesc('shares_sum_share')->get();
        //dd($this->users->toArray());
        return view('livewire.pages.donors.main');
    }
}
