<?php

namespace App\Http\Livewire\Pages\Cases\Admin;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $title, $description, $image_path, $file_path, $target;

    protected $rules = [
        'title' => 'required',
        'target' => 'required',
    ];

    public function add()
    {
        
        $this->validate();
        
        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'target' => $this->target,

        ];
        $this->alert('success', 'Done!', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);   
        $case = new Event();
        $case->add($data);
        $case->add_file($this->file_path, 2); // 2: file_path
        $case->add_file($this->image_path); // 1: image_path default
        $this->reset();
        
    }


    public function render()
    {
        return view('livewire.pages.cases.admin.add');
    }
}
