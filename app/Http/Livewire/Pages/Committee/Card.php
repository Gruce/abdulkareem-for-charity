<?php

namespace App\Http\Livewire\Pages\Committee;

use Livewire\Component;
use App\Models\Committee;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Card extends Component
{
    protected $rules = [
        'name' => 'required',
        
    ];

    protected $listeners = ['delete', '$refresh'];
    use LivewireAlert;

    public $committee_id ,$committee;

    public function delete()
    {
         Committee::findOrFail($this->committee_id)->delete();
        $this->alert('success', 'تم الحذف', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
    }

    public function confirm($id){
        $this->committee_id = $id;
        $this->alert('warning', 'هل انت متأكد من الحذف؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }

    public function render()
    {
        return view('livewire.pages.committee.card');
    }
}
