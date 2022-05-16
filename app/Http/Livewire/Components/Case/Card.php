<?php

namespace App\Http\Livewire\Components\Case;

use App\Models\Event;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Card extends Component
{
    use LivewireAlert;
    protected $listeners = ['delete', '$refresh', 'search'];

    public  $event_id, $case_id;
    public $ID, $title, $description, $image_path, $file_path, $target, $received_price, $created_at;

    public function remove($id)
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
        Event::findOrFail($this->event_id)->delete();
        
    }

    public function delete()
    {
    
        
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        
         $this->emitSelf('$refresh');
        // $this->emitTo('pages.cases.main', '$delete');
        // $this->emitTo('components.case.card', '$delete');
    }

    public function add_price(Event $event) {
        $event->add_price($this->received_price);
        $this->alert('success', 'تم ', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function render(){
        $search = '%' . $this->search . '%';
        $this->events = Event::where('title', 'LIKE', $search)->orderByDesc('id')->get();
        //dd($this->events->toArray());
        return view('livewire.components.case.card');
    }
}
