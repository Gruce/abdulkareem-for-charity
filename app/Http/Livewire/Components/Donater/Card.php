<?php

namespace App\Http\Livewire\Components\Donater;

use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    public function render()
    {
        $this->users= User::withSum('shares','share')->orderByDesc('shares_sum_share')->get();
        dd($this->users->toArray());
        return view('livewire.components.donater.card');
    }
}
