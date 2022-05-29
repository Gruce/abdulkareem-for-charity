<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Share;


class Card extends Component
{
    use LivewireAlert;

    public  $event_id, $case_id, $received_price, $target;
    public $event, $title, $selectEvent;

    protected $listeners = ['delete', '$refresh', 'getEvent'];

    public function delete()
    {
        Event::findOrFail($this->event_id)->delete();
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
    }


    public function confirm($id)
    {
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

    public function add_price(Event $event)
    {
        if ($this->received_price > $this->current_price) {
            $this->alert('warning', 'يجب ان يكون المبلغ اقل او يساوي ما في الصندوق', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
        }

        elseif($this->received_price > $event->received()){
            $this->alert('warning', 'لا يمكن اضافة مبلغ اكثر من ما هو مطلوب', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                    ]);
        }
        else{
            $event->add_price($this->received_price);
            $this->alert('success', 'تم', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                    ]);
                    $this->emitUp('$refresh');
                    $this->emitTo('pages.cases.main', '$refresh');
        }
    }

    public function getEvent($received_price, $target, $selectEvent)
    {
        $this->received_price = $received_price;
        $this->target = $target;
        $this->selectEvent = $selectEvent;
    }


    public function render(){

        $payments = Event::sum('received_price');
        $total = Share::where('state', true)->sum('share') * 2000;
        $this->current_price = $total - $payments;

        return view('livewire.pages.cases.card');
    }
}
