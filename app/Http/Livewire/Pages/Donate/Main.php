<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;
use App\Models\Share;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Main extends Component
{
    use LivewireAlert;

    protected $rules = [
        'share' => 'required',
    ];

    public $share, $note, $admins;
    public function save()
    {
        $this->validate();
        $donate = new Share;
        $donate->add($this->share);

        $this->alert('success', 'تم', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->reset();
    }

    public function render()
    {
        $this->admins = User::where('is_admin', true)->get();

        return view('livewire.pages.donate.main');
    }
}
