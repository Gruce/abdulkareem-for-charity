<?php

namespace App\Http\Livewire\Components\Donors;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use Livewire\Component;

class Card extends Component
{
    public $name, $type, $shares, $photo, $date, $email, $phone_number;
    use LivewireAlert;
    public  $share_id;

    protected $listeners = ['delete', '$refresh'];

    public function mount(){
        $this->shares = User::orderByDesc('id')->get();
    }

    public function delete(){
        User::findOrFail($this->share_id)->delete();
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitSelf('$refresh');
    }

    public function confirm($id){
        $this->share_id = $id;
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
        $this->users= User::withSum('shares','share')->orderByDesc('shares_sum_share')->get();
        return view('livewire.components.donors.card');
    }
}
