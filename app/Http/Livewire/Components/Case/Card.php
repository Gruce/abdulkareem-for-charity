<?php

namespace App\Http\Livewire\Components\Case;
use App\Models\Event;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Card extends Component
{
    use LivewireAlert;
    public $title, $description, $image_path, $file_path, $target, $received_price ,$case ;
    
    protected $listeners = ['delete'];

    public function delete()
    {   $case=$this->cases->id;
        $this->case->delete();
        $this->alert('success', 'Done!', [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function confirm(Event $event){
        $this->event = $event;
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


    use LivewireAlert;
    
    
    // protected $listeners = ['delete'];

    // public function delete()
    // {
    //     Event::findOrFail($this->ID)->delete();
    //     $this->alert('success', 'Done!', [
    //         'position' => 'top-start',
    //         'timer' => 3000,
    //         'toast' => true,
    //     ]);
    // }

    // public function confirm($ID ){
    //     $this->ID = $id;
    //     $this->alert('warning', 'هل انت متأكد من حذف الحالة؟', [
    //         'position' => 'center',
    //         'timer' => 3000,
    //         'toast' => true,
    //         'showConfirmButton' => true,
    //         'onConfirmed' => 'delete',
    //         'showCancelButton' => true,
    //         'onDismissed' => '',
    //     ]);
    // }

    public function render()
    {$this->cases= Event::orderByDesc('id')->get();
        
        

        return view('livewire.components.case.card');
    }
}
