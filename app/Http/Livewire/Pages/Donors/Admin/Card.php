<?php

namespace App\Http\Livewire\Pages\Donors\Admin;

use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    public function render()
    {
        $this->users= User::where('is_admin' , 1)->withSum('shares','share')->orderByDesc('shares_sum_share')->get();
         //dd($this->users->toArray());
        return view('livewire.pages.donors.admin.card');
    }
}
