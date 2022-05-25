<?php

namespace App\Http\Livewire\Pages\Committee;

use Livewire\Component;
use App\Models\Committee;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{
    use LivewireAlert;
    public $name, $department, $study_type, $stage, $phone_num,$committee_id;
    protected $rules = [
        'name' => 'required',
    ];


    public function render()
    {
        return view('livewire.pages.committee.edit');
    }
}
