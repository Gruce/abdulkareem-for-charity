<?php

namespace App\Http\Livewire\Components\Donors;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use Livewire\Component;
use App\Models\Share;


class Card extends Component
{
    public $name, $type, $shares, $share, $photo, $date, $email, $phone_number;
    use LivewireAlert;

    protected $rules = [
        'share' => 'required',
        'name' => 'required',
    ];
    
    public function add(){
        
        $this->validate();
        
        $data = [
            'share' => $this->share,
        ];
        $share->add($data);
        dd($share);
        $this->reset();
        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        

    }

    public function render(){
        $this->users= User::withSum('shares','share')->orderByDesc('shares_sum_share')->get();
        return view('livewire.components.donors.card');
    }
}
