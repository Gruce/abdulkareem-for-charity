<?php

namespace App\Http\Livewire\Pages\Profile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;


class StudentInfo extends Component
{
    use LivewireAlert;

    public $department, $study_type, $stage, $division;

    protected $rules = [
        'department' => 'required',
        'study_type' => 'required',
        'stage' => 'required',
        'division' => 'required',
    ];

    public function edit(){
        $this->validate();
        $this->user->student->edit([
            'department' => $this->department,
            'study_type' => $this->study_type,
            'stage' => $this->stage,
            'division' => $this->division,

        ]);

        $this->alert('success', 'تم', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function mount($user){
        $this->user = $user;
        if(auth()->user()->type == 1){
        $this->department = $this->user->student->department;
        $this->study_type = $this->user->student->study_type;
        $this->stage = $this->user->student->stage;
        $this->division = $this->user->student->division;
        }
    }

    public function render(){
        return view('livewire.pages.profile.student-info');
    }
}
