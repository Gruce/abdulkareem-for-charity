<?php

namespace App\Http\Livewire\Pages\Profile;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Modles\User;
use App\Modles\Student as StudentModel;
class Main extends Component
{
    use WithFileUploads;

    public $profile_photo_path;
    public $profile_photo;

    
    public function edit()
    {
        $this->validate();
        $user = auth()->user();

        if($this->profile_photo) 
            $user->addProfile($this->profile_photo);
    }
    
        

        

    public function mount(){
        $this->user = auth()->user()->load('student');
        $this->profile_photo_path = $this->user->student->profile_photo_path;
        
        

    }

    public function render()
    {
        return view('livewire.pages.profile.main');
    }
}
