<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Main extends Component
{
    // use LivewireAlert;
    // public $ID;
    
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
    {
        $this->cases= Event::orderByDesc('id')->get();
        // dd($this->cases->toArray());
        return view('livewire.pages.cases.main');
    }
}
