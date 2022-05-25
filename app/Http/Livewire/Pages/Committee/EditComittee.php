<?php

namespace App\Http\Livewire\Pages\Committee;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Committee;

class EditComittee extends Component
{

    use LivewireAlert;
    use WithFileUploads;

    public  $name, $department, $study_type, $stage, $phone_num, $committee_id;

    

    public function render()
    {
        return view('livewire.pages.committee.edit-comittee');
    }
}
