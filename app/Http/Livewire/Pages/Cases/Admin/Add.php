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
    public $title, $description, $image_path, $file_path, $target, $received_price;

    protected $rules = [
        'title' => 'required',
        'target' => 'required',
    ];

    public function add(){
        $this->validate();

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'target' => $this->target,
            'received_price' => $this->received_price,
        ];
        

        $case = new Event();
        $case->add($data);
        $case->add_file($this->file_path, 2); // 2: file_path
        $case->add_file($this->image_path); // 1: image_path default
        $this->reset();
        
        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);

        $this->emitTo('pages.cases.main', '$refresh');
        

    }
    public function render()
    {
        return view('livewire.pages.cases.admin.add');
    }
}
