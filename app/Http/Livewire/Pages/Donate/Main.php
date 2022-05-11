<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;
use App\Models\Share;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Main extends Component{
    use LivewireAlert;
    // public $share, $note;
    // public function save()
    // {
    //     $donate = new Share;
    //     $donate->add($this->share, $this->note);

    //     $this->alert('success', 'تم', [
    //         'position' => 'top',
    //         'timer' => 3000,
    //         'toast' => true,
    //     ]);
    //     $this->reset();
    // }

    public function render(){
        return view('livewire.pages.donate.main');
    }
}
