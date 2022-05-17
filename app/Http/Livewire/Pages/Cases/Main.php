<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;

class Main extends Component
{

     public $search ;

    protected $listeners = [ 'search' , 'refresh' , 'delete'];

    public function search($search)
    {
        $this->search = $search;
    }
    public function remove($id)
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
        $this->emitSelf('$refresh');
    }
    public function delete()
    {
        dd($this->event_id);
        Event::findOrFail($this->event_id)->delete();
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);

        $this->emitSelf('$refresh');
    }
    
    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->events = Event::where('title', 'LIKE', $search)
        ->orderByDesc('id')->get();        
        return view('livewire.pages.cases.main');
    }
}
