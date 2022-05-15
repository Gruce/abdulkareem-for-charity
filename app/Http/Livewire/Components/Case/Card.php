<?php

namespace App\Http\Livewire\Components\Case;

use Livewire\Component;
use App\Models\Event;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Card extends Component
{
    use LivewireAlert;

    public  $event_id, $search, $case_id;

    protected $listeners = ['delete', '$refresh','search'];

    function search($string)
    {
        $this->search = $string;
    }

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
    
    public function render(){
        $search = '%' . $this->search . '%';
        $this->events = Event::where('title', 'LIKE', $search)->orderByDesc('id')->get();
        //dd($this->events->toArray());
        return view('livewire.components.case.card');
    }
}
