<?php

namespace App\Http\Livewire\Pages\Committee;

use App\Models\Committee;
use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

class Card extends Component
{
    protected $rules = [
        'name' => 'required',
    ];

    protected $listeners = ['delete', '$refresh'];
    use LivewireAlert;

    public $committee_id, $committee, $edit_id = null;


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

    public function confirm($id)
    {
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

    public function edit(Committee $committee)
    {
        $this->edit_id = $committee->id;
        $this->name = $committee->name;
        $this->department = $committee->department;
        $this->stage = $committee->stage;
        $this->study_type = $committee->study_type;
        $this->phone_num = $committee->phone_num;
    }

    public function save()
    {
        $this->committee->name = $this->name;
        $this->committee->department = $this->department;
        $this->committee->stage = $this->stage;
        $this->committee->study_type = $this->study_type;
        $this->committee->phone_num = $this->phone_num;
        $this->committee->save();
        $this->edit_id = null;

        $this->alert('success', 'تم التعديل', [
            'position' => 'center',
            'timer' => '3000',
            'toast' => true,
        ]);
    }


    public function render()
    {
        return view('livewire.pages.committee.card');
    }
}
