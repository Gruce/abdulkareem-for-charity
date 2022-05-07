<?php

namespace App\Http\Livewire\Pages\Cases\Admin;

use Livewire\Component;
use App\Models\Case as CaseModel;
class Add extends Component
{
    public $title, $description, $image_path, $file_path, $target, $received_price;

    protected $rules = [
        'title' => 'required',
        'target' => 'required',
        'received_price' => 'required',
        
    ];

    public function add()
    {
        $this->validate();
        
        CaseModel::create([
            'title' => $this->title,
            'description' => $this->description,
            // 'image_path' => $this->image_path,
            // 'file_path' => $this->file_path,
            'target' => $this->target,
            'received_price' => $this->received_price,
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.pages.cases.admin.add');
    }
}
