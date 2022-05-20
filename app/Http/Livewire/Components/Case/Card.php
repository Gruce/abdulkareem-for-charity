<?php

namespace App\Http\Livewire\Components\Case;

use App\Models\Event;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Card extends Component
{
    use LivewireAlert;

    public  $event_id, $case_id, $received_price ,$target;
    public $event  ,$title ,$selectEvent;

    protected $listeners = ['delete', '$refresh' , 'getEvent'];

    public function delete(){
        Event::findOrFail($this->event_id)->delete();
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);

        $this->emitSelf('$refresh');
    }


    public function confirm($id){
        $this->event_id = $id;
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

    public function add_price(Event $event) {
        $event->add_price($this->received_price);
        $this->alert('success', 'تم ', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    
    public function getEvent($received_price ,$target , $selectEvent){
        $this->received_price = $received_price;
        $this->target = $target;
        $this->selectEvent = $selectEvent;
        
    }
    
    public function render(){
        return view('livewire.components.case.card');
    }
}
