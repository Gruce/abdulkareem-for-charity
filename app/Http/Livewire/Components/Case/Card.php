<?php

namespace App\Http\Livewire\Components\Case;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Card extends Component
{
    use LivewireAlert;
    public $title, $description, $image_path, $file_path, $target, $received_price;
    
    protected $listeners = ['delete'];

    public function delete()
    {
        $this->card->delete();
        $this->alert('success', 'Done!', [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function confirm(Card $card){
        $this->card = $card;
        $this->alert('warning', 'هل انت متأكد من حذف الحالة؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }

    public function render()
    {
        return view('livewire.components.case.card');
    }
}
