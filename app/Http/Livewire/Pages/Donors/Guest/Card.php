<?php

namespace App\Http\Livewire\Pages\Donors\Guest;

use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    public function render()
    {
        $this->users= User::withSum('shares','share')->orderByDesc('shares_sum_share')->get();

         //dd($this->users->toArray());
        return view('livewire.pages.donors.guest.card');
    }
}
