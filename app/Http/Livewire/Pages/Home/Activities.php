<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;

class Activities extends Component
{
    public function render()
    {
        $activities = new Active([
            [
                'info' => 'الطلاب',
                'icon' => 'graduation-cap',

            ],
            [
                'info' => 'المرضى',
                'icon' => 'head-side-mask',

            ],
            [
                'info' => 'الايتام',
                'icon' => 'people-line',

            ],
            [
                'info' => 'الفقراء',
                'icon' => 'person-arrow-up-from-line',

            ],
            [
                'info' => 'البيئة',
                'icon' => 'seedling',

            ],
            


        ]);
        return view('livewire.pages.home.activities',[
            'activities' => $activities
        ]);
    }
}

class Active
{
    public $items;

    function __construct($items = [])
    {
        // Menu Generation
        foreach ($items as $item) $this->items[] = new ActiveItem($item);
    }
}

class ActiveItem
{
    public $info;
    public $icon;


    public function __construct($data)
    {
        $this->info = $data['info'];
        $this->icon = $data['icon'];
    }
}

