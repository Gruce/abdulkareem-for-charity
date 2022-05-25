<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;
use App\Models\Share;
use App\Models\Committee;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Main extends Component{
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    protected $rules = [
        'share' => 'required',
    ];
    
    public $share, $note ,$committee;
    public function save()
    {
        $this->validate();
        $donate = new Share;
        $donate->add($this->share, $this->note);

        $this->alert('success', 'تم', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->reset();
    }

    public function render(){
        $this->committees = Committee::get();
        return view('livewire.pages.donate.main');
    }
}
