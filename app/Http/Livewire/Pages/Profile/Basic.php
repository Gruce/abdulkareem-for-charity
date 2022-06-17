<?php

namespace App\Http\Livewire\Pages\Profile;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;


class Basic extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    protected $rules = [
        'name' => 'required',
    ];

    public $profile_photo_path, $profile_photo, $name, $email, $phone_number, $telegram_username ;

    public  function edit(){
        $this->validate();
        $this->user->edit([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'telegram_username' => $this->telegram_username,
        ]);

        if($this->profile_photo)
            $this->user->addProfile($this->profile_photo);

        $this->alert('success', 'تم', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect()->to('/profile');

    }

    public function mount($user){
        $this->user = $user;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone_number = $this->user->phone_number;
        $this->profile_photo_path = $this->user->profile_photo_path;
        $this->telegram_username = $this->user->telegram_username;
    }

    public function render(){
        return view('livewire.pages.profile.basic');
    }
}
