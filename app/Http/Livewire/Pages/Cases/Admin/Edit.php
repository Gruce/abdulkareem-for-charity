<?php

namespace App\Http\Livewire\Pages\Cases\Admin;

use Livewire\Component;
use App\Models\Event;
class Edit extends Component{

    public $title, $description, $image_path, $file_path, $target, $received_price, $case_id;

    public function mount($case_id){
    $this->case_id = $case_id;
    if ($case_id) {
        $case = Event::findOrFail($this->case_id);
    }
    }

    public function render(){
        $case = Event::findOrFail($this->case_id);
        return view('livewire.pages.cases.admin.edit', compact('case'));
    }
}
