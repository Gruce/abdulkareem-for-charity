<?php

namespace App\Http\Livewire\Components\Case;

use Livewire\Component;

class Card extends Component
{
    public $title, $description, $image_path, $file_path, $target, $received_price;
    
    public function render()
    {
        return view('livewire.components.case.card');
    }
}
