<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;
use App\Models\Share;

class Main extends Component
{
    public $share, $note;

    public function save()
    {
        $donate = new Share;
        $donate->add($this->share, $this->note);
    }

    public function render()
    {
        return view('livewire.pages.donate.main');
    }
}
