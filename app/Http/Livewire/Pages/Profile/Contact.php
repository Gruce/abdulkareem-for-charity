<?php

namespace App\Http\Livewire\Pages\Profile;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Contact extends Component
{
    use LivewireAlert;
    
    public $email , $phone_number , $telegram_username;

    public  function edit(){
        $this->validate();
        $this->user->edit([
            'phone_number' => $this->phone_number,
            'telegram_username' => $this->telegram_username,
            'address' => $this->address,
        ]);

        $this->alert('success', 'تم', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function mount($user){
        $this->user = $user;
        $this->email = $this->user->email;
        $this->phone_number = $this->user->phone_number;
        $this->telegram_username = $this->user->telegram_username;
    }

    public function render()
    {
        return view('livewire.pages.profile.contact');
    }
}
