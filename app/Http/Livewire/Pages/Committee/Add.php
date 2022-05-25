<?php

namespace App\Http\Livewire\Pages\Committee;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Committee;
use Livewire\Component;
use Livewire\WithFileUploads;
class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $name, $department, $study_type, $stage, $phone_num;
    

    protected $rules = [
        'name' => 'required',
        'department' => 'required',
        'study_type' => 'required',
        'stage' => 'required',
        'phone_num' => 'required'
    ];

    public function add(){
        $this->validate();

        $data = [
            'name' => $this->name,
            'department' => $this->department,
            'study_type' => $this->study_type,
            'stage' => $this->stage,
            'phone_num' => $this->phone_num,
            //'photo' => $this->photo,
        ];
        //dd($data);

        $committee = new Committee();
        $committee->add($data);
        //dd($committe->toArray());
        //$committe->add_file($this->image_path);
        $this->reset();

        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitTo('pages.committee.main', '$refresh');
    }

    public function render()
    {
        return view('livewire.pages.committee.add');
    }
}
