<?php

namespace App\Http\Livewire\Pages\Cases;

use Livewire\Component;
use App\Models\Event;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Share;

class CasePage extends Component
{
    use LivewireAlert;

    public  $case_id, $received_price, $image_path, $file_path, $description, $target;
    public $event, $title;

    public function mount($case_id)
    {
        $this->case_id = $case_id;
        $this->event = Event::findOrFail($case_id);
        $this->title = $this->event->title;
        $this->target = $this->event->target;
        $this->received_price = $this->event->received();
        $this->image_path = $this->event->image_path;
        $this->file_path = $this->event->file_path;
        $this->description = $this->event->description;
    }

    public function render()
    {
        $payments = Event::sum('received_price');
        $total = Share::where('state', true)->sum('share') * 2000;
        $this->current_price = $total - $payments;
        return view('livewire.pages.cases.case-page');
    }
}
