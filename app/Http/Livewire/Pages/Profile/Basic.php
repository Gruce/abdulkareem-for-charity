<?php

namespace App\Http\Livewire\Pages\Profile;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\Student as StudentModel;


class Basic extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    
    protected $rules = [
        'name' => 'required',
    ];
    
    public $profile_photo_path;
    public $profile_photo;
    public $name;
    public $email;
    public $phone_number;


    public  function edit(){
        $this->validate();
        $this->user->edit([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
        ]);

        if($this->profile_photo) 
            $this->user->addProfile($this->profile_photo);

        $this->alert('success', 'Done!', [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
        ]);   
    }
    public function mount($user){
        $this->user = $user;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone_number = $this->user->phone_number;
        $this->profile_photo_path = $this->user->profile_photo_path;
    }

    public function render()
    {
        return view('livewire.pages.profile.basic');
    }
}
