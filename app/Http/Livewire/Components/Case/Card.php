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

    public function confirm($id)
    {
        $this->event_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف الحالة؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'del',
            'showCancelButton' => true,
            'onDismissed' => '',
            
        ]);
    }

    // public function del()
    // {
    //     //dd($this->event_id);
    //     Event::findOrFail($this->event_id)->delete();
    //     $this->alert('success', 'تم حذف الحالة', [
    //         'position' => 'top',
    //         'timer' => 3000,
    //         'toast' => true,
    //     ]);

    //     $this->emitSelf('$refresh');
    // }

    public function render()
    {
        return view('livewire.components.case.card');
    }
}