<?php

namespace App\Http\Livewire\Pages\Cases\Admin;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Edit extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $title, $description, $image_path, $file_path, $target, $received_price, $case_id;

    protected $rules = [
        'title' => 'required',
        'target' => 'required',
    ];

    public function mount($case_id)
    {
        $this->case_id = $case_id;
    if ($case_id) {

        $case = Event::findOrFail($this->case_id);
        $this->title = $case->title;
        $this->description = $case->description;
        $this->image_path = $case->image_path;
        $this->file_path = $case->file_path;
        $this->target = $case->target;
        $this->received_price = $case->received_price;
    }
    }

    public function edit()
    {
        $this->validate();
        $case = Event::findOrFail($this->case_id);
        $case->edit([
            'title'=>$this->title,
            'description'=>$this->description,
            'image_path'=>$this->image_path,
            'file_path'=>$this->file_path,
            'target'=>$this->target,
            'received_price'=>$this->received_price,
        ]);

        $this->alert('success', 'تم التعديل', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {

        return view('livewire.pages.cases.admin.edit');
    }
}
