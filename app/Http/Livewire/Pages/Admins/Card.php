<?php

namespace App\Http\Livewire\Pages\Admins;


use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Cknow\Money\Money;


class Card extends Component
{
    use LivewireAlert;

    protected $listeners = ['downgrade'];

    public $item , $paid_amount;
    public function confirm_downgrade()
    {
        
        $this->alert('warning', "هل انت متاكد من الغاء خاصية ادارة الموقع من ".$this->item->name." ؟", [
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
    public function add_paid_amount(){
        $this->item->admin->update(['paid_amount' => $this->paid_amount]);
        $this->alert('success', "تم اضافة المبلغ المدفوع للعضو ".$this->item->name." بنجاح");
    }
    public function downgrade()
    {
        $this->item->update(['is_admin' => 0]);
        $this->alert('success', " تم الغاء خاصية ادارة الموقع من ".$this->item->name."", [
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
