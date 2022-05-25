<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Committee extends Component
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
        $this->alert('success', 'تم حذف ', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
    }

    public function confirm($id){
        $this->committee_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف؟', [
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
        return view('livewire.pages.donate.committee');
    }
}
