<?php

namespace App\Http\Livewire\Pages\Committee;

use Livewire\Component;
use App\Models\Committee;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{
    use LivewireAlert;
    public $name, $department, $study_type, $stage, $phone_num,$committee_id;
    protected $rules = [
        'name' => 'required',
    ];

    // public function mount($committee_id)
    // {
    //     $this->committee_id = $committee_id;
    // if ($committee_id) {

    //     $committee = Committee::findOrFail($this->committee_id);
    //     $this->name = $committee->name;
    //     $this->department = $committee->department;
    //     $this->study_type = $committee->study_type;
    //     $this->stage = $committee->stage;
    //     $this->phone_num = $committee->phone_num;
    // }
    // }

    public function edit()
    {
        $this->validate();
        $committee = Committee::findOrFail($this->committee_id);
        $committee->edit([
            'name'=>$this->name,
            'department'=>$this->department,
            'study_type'=>$this->study_type,
            'stage'=>$this->stage,
            'phone_num'=>$this->phone_num,
        ]);
        dd($committee);
        

        $this->alert('success', 'تم التعديل', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.pages.committee.edit');
    }
}
