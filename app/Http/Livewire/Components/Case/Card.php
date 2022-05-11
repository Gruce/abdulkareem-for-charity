<?php

namespace App\Http\Livewire\Components\Case;
use App\Models\Event;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Card extends Component
{
    use LivewireAlert;
    public $title, $description, $image_path, $file_path, $target, $received_price, $cases ;
    // public $edit_id = null;
    
    protected $listeners = ['delete'];

    public function delete($id)
    {   
        $cases = Event::find($id);
        $cases->delete();
        $this->alert('success', 'تم الحذف', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }


    // public function confirm(Event $event){
    //     $this->event = $event;
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

    // public function save(){
    //     $this->cases->title = $this->title;
    //     $this->cases->description = $this->description;
    //     $this->cases->target = $this->target;
    //     $this->cases->received_price = $this->received_price;
    //     $this->cases->save();
       

    //     $this->edit_id = null;

    //     $this->alert('success', 'تم التعديل', [
    //         'position' => 'top-start',
    //         'timer' => '3000',
    //         'toast' => true,
    //     ]);

    // }

    // public function edit(Event $event){
    //     $this->edit_id = $event->id;
    //     $this->title = $event->title;
    //     $this->description = $event->description;
    //     $this->target = $event->target;
    //     $this->received_price = $event->received_price;
    //     $this->image_path = $event->image_path;
    //     $this->file_path = $event->file_path;
    //     $this->event = $event;
    // }

#######################################3
    
    
    
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

    public function render(){
        //$this->cases= Event::where('id')->get();
        return view('livewire.components.case.card');
    }
}
