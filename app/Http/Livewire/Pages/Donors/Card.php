<?php

namespace App\Http\Livewire\Pages\Donors;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use App\Models\Share;

class Card extends Component
{
    use LivewireAlert;

    public  $item ,$type, $gender, $request, $state,$study_type, $stage, $department, $division;

    public $share_id;

    protected $rules = [
        'name' => 'required',
        'shares' => 'required',
    ];

    protected $listeners = ['delete', '$refresh' , 'getUserType'];



    public function delete()
    {
        User::findOrFail($this->share_id)->delete();
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
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

    public function add($id)
    {
        $data = [
            'user_id' => $id,
            'share' => $this->share,
        ];
        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $share = new Share();
        $share->add($data);
        $this->reset();


    }
    public function accept($id, $state)
    {
        $share = Share::findOrFail($id);
        $share->state($state);
        $this->alert('success', 'تم القبول', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        // $this->emitUp('$refrish');
    }
    public function deleteShare($id)
    {
        $share = Share::findOrFail($id);
        $share->delete();
        $this->alert('success', 'تم الرفض', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        // $this->emitUp('$refrish');
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
