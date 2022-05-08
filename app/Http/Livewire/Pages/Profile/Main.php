<?php

namespace App\Http\Livewire\Pages\Profile;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Modles\User;
use App\Modles\Student as StudentModel;
class Main extends Component
{

    use WithFileUploads;

    

    public  $profile_photo_path, $file_path;

    
    public function edit()
    {
        $this->validate();
        $user = new User();
        $case->edit_file($this->file_path, 2); // 2: file_path
        $user->edit_file($this->profile_photo_path); // 1: image_path default
        $this->reset();
        
    }
    
        //$user = auth()->user();

        

    public function mount(){
        $this->user = auth()->user()->load('student');
        $this->profile_photo_path = $this->user->profile_photo_path;

    }

    public function render()
    {
        return view('livewire.pages.profile.main');
    }
}
