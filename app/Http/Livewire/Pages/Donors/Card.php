<?php

namespace App\Http\Livewire\Pages\Donors;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use App\Models\Share;

class Card extends Component
{
    use LivewireAlert;

    public  $item, $type, $gender, $request, $state, $study_type, $stage, $department, $division;

    public $share_id, $share_state;

    protected $rules = [
        'name' => 'required',
        'shares' => 'required',
    ];

    protected $listeners = ['delete', '$refresh', 'getUserType', 'accept', 'deleteShare', 'upgrade'];

    public function delete()
    {
        User::findOrFail($this->item->id)->delete();
        $this->alert('success', 'تم حذف المتبرع', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
    }

    public function confirm()
    {

        $this->alert('warning', 'هل انت متاكد من حذف المتبرع؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }

   

    public function accept()
    {
        $share = Share::findOrFail($this->share_id);
        $share->accept_share($this->share_state);
        $share->admin_id = auth()->user()->id;
        $this->alert('success', 'تم القبول', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('components.navbar', '$refresh');
    }

    public function confirm_accepet($id, $state)
    {
        $this->share_id = $id;
        $this->share_state = $state;
        
        $this->alert('warning', 'هل انت متأكد من قبول الطلب؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'accept',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }
    public function deleteShare()
    {
        $share = Share::findOrFail($this->share_id);
        $share->delete();
        $this->alert('success', 'تم الرفض', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
    }


    public function confirm_delete($id)
    {
        $this->share_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف الطلب؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'deleteShare',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }

    public function confirm_upgrade()
    {
        if ($this->item->is_admin) {
            $this->alert('warning', 'هذا المتبرع بالفعل مشرف', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
            return;
        }
        $this->alert('warning', "هل انت متأكد من ترقية " . $this->item->name . "", [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'upgrade',
            'showCancelButton' => true,
            'onDismissed' => '',
            'width' => '500',
            'cancelButtonText' => 'الغاء',
            'confirmButtonText' => 'تأكييد',
        ]);
    }
    public function upgrade()
    {

        $user = User::findOrFail($this->item->id);
        $user->is_admin = 1;
        $user->save();
        $this->alert('success', 'تم الترقية', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);

        $this->emitUp('$refresh');
    }



    public function getUserType($type, $gender, $state, $study_type, $stage, $department, $division)
    {
        $this->type = $type;
        $this->gender = $gender;
        $this->state = $state;
        $this->study_type = $study_type;
        $this->stage = $stage;
        $this->department = $department;
        $this->division = $division;
    }

    public function render()
    {
        return view('livewire.pages.donors.card');
    }
}
