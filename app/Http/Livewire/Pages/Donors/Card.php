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

    protected $listeners = ['delete', '$refresh', 'getUserType', 'accept', 'deleteShare'];

    public function delete()
    {
        User::findOrFail($this->share_id)->delete();
        $this->alert('success', 'تم حذف المتبرع', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
    }

    public function confirm($id)
    {
        $this->share_id = $id;
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

    public function add($id)
    {
        $data = [
            'user_id' => $id,
            'share' => $this->share,
        ];
        $this->alert('success', 'تمت الاضافة', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $share = new Share();
        $share->add($data);
        $this->reset();
    }

    public function accept(){
        $share = Share::findOrFail($this->share_id);
        $share->state($this->share_state);
        $this->alert('success', 'تم القبول', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
    }
    
    public function confirm_accepet($id, $state){
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
            'position' => 'top',
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
