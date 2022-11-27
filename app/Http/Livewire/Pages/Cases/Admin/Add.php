<?php

namespace App\Http\Livewire\Pages\Cases\Admin;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Share;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $title, $description, $image_path, $file_path, $target, $received_price, $event, $current_price;

    protected $rules = [
        'title' => 'required',
        'target' => 'required',
    ];

    public function add(Event $event)
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'target' => $this->target,
            'received_price' => 0,
        ];
        if ($this->target < $this->received_price) {
            $this->alert('warning', 'لا يمكن اضافة رسوم بقيمة اكبر من المطلوب', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
        } else {

            $case = new Event();
            $case->add($data);

            if ($this->file_path)
                $case->add_file($this->file_path); 
                
            if ($this->image_path)
                $case->add_image($this->image_path); 
            $this->reset();

            $this->alert('success', 'تمت الاضافة', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
        }

        redirect()->route('cases');
    }
    public function render()
    {

        $payments = Event::sum('received_price');
        $total = Share::where('state', true)->sum('share') * 2000;
        $this->current_price = $total - $payments;
        return view('livewire.pages.cases.admin.add');
    }
}
