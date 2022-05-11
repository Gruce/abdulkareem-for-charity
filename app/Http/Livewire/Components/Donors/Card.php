<?php

namespace App\Http\Livewire\Components\Donors;

use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    public $name, $type, $shares, $photo, $date, $email, $phone_number;

    public function add()
    {
        
    }

    public function render()
    {
        $this->users= User::withSum('shares','share')->orderByDesc('shares_sum_share')->get();
        //dd($this->users->toArray());
        return view('livewire.components.donors.card');
    }
}
