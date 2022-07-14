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

    public $title, $description, $image_path, $file_path, $target, $received_price, $case_id, $new_image, $new_file;

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
        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'target' => $this->target,
        ];

        $case = Event::findOrFail($this->case_id);
        $case->edit($data);
        
        if ($this->new_file){
             
            $case->update_file($this->new_file); 
        }
        

        if ($this->new_image){
            
            $case->update_image($this->new_image); 
        }
        
        
        $this->alert('success', 'تم التعديل', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        redirect()->route('cases');
    }

    public function render()
    {

        return view('livewire.pages.cases.admin.edit');
    }
}
