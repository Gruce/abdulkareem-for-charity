<?php

namespace App\Http\Livewire\Pages\Donate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Committee;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCommittee extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $name, $department, $study_type, $stage, $phone_number, $photo;

    protected $rules = [
        'name' => 'required',
        'department' => 'required',
        'study_type' => 'required',
        'stage' => 'required',
        'phone_number' => 'required'
    ];

    public function add(){
        $this->validate();

        $data = [
            'name' => $this->name,
            'department' => $this->department,
            'study_type' => $this->study_type,
            'stage' => $this->stage,
            'phone_number' => $this->phone_number,
            'photo' => $this->photo
        ];

        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);

        $committe = new Committee();
        $committe->add($data);
        $committe->add_file($this->image_path);
        $this->reset();

    }

    public function render()
    {
        return view('livewire.pages.donate.add-committee');
    }
}