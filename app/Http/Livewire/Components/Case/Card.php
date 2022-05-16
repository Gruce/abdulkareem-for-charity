<?php

namespace App\Http\Livewire\Components\Case;

use App\Models\Event;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Card extends Component
{
    use LivewireAlert;

    public  $event_id, $case_id;
    public $ID, $title, $description, $image_path, $file_path, $target, $received_price, $created_at;

    public function delete($id)
    {
        $this->event_id = $id;
        $this->alert('warning', 'هل انت متأكد من انك تريد حذف الحالة', [
            'position' => 'center',
            'timer' => '7000',
            'toast' => true,
            'text' => '',
            'showConfirmButton' => true,
            'onConfirmed' => 'remove',
            'showCancelButton' => true,
            'onDismissed' => '',
            'cancelButtonText' => 'الغاء ',
            'confirmButtonText' => 'حذف',
            'width' => '400',
           ]);
           
        
    }

    public function remove(){
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'center',
            'timer' => '2000',
            'toast' => true,
            'text' => '',
            'showConfirmButton' => false,
            'onConfirmed' => '',
            'showCancelButton' => false,
            'onDismissed' => '',
            'cancelButtonText' => 'الغاء ',
            'confirmButtonText' => 'حذف',
            'width' => '400',
           ]);

        Event::findOrFail($this->event_id)->delete();
        

        $this->emitSelf('$refresh');
    }

    public function render()
    {
        return view('livewire.components.case.card');
    }
}