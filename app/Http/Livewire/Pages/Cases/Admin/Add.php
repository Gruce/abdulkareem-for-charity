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
            'received_price' => $this->received_price,
        ];
        if ($this->received_price > $this->current_price) {
            $this->alert('warning', 'لا يمكنك اضافة مبالغ اكثر من الموجود في الصندوق', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
        } elseif ($this->target < $this->received_price) {
            $this->alert('warning', 'لا يمكن اضافة رسوم بقيمة اكبر من المطلوب', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
        } else {

            $case = new Event();
            $case->add($data);

            if ($this->file_path)
                $case->add_file($this->file_path, 2); // 2: file_path
            if ($this->image_path)
                $case->add_file($this->image_path); // 1: image_path default
            $this->reset();

            $this->alert('success', 'تمت الاضافة', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
        }

        $this->emitTo('pages.cases.main', '$refresh');
    }
    public function render()
    {

        $payments = Event::sum('received_price');
        $total = Share::where('state', true)->sum('share') * 2000;
        $this->current_price = $total - $payments;
        return view('livewire.pages.cases.admin.add');
    }
}
