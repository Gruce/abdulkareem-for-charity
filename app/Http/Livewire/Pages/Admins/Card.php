<?php

namespace App\Http\Livewire\Pages\Admins;


use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Card extends Component
{
    use LivewireAlert;

    protected $listeners = ['downgrade'];

    public $admin;
    public function confirm_downgrade()
    {
        
        $this->alert('warning', "هل انت متاكد من الغاء خاصية ادارة الموقع من ".$this->admin->name." ؟", [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'downgrade',
            'showCancelButton' => true,
            'onDismissed' => '',
            'width' => '500',
            'cancelButtonText' => 'الغاء',
            'confirmButtonText' => 'تأكييد',
        ]);
        
    }
    public function downgrade()
    {
        $this->admin->update(['is_admin' => 0]);
        $this->alert('success', " تم الغاء خاصية ادارة الموقع من ".$this->admin->name."", [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitTo('pages.admins.main', '$refresh');
    }
    public function render()
    {
        return view('livewire.pages.admins.card');
    }
}
