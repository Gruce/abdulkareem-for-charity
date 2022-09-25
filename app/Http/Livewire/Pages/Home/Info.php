<?php

namespace App\Http\Livewire\Pages\Home;

use App\Models\{
    Event,
    Share,
    User,
};
use Livewire\Component;

class Info extends Component
{

    protected $listeners = ['$refresh'];

    public function render()
    {
        $users = User::all()->count();
        $share = Share::all()->sum('share');
        $event = Event::whereColumn('received_price', 'target')->count();
        $payments = Event::sum('received_price');
        $total = Share::where('state', true)->sum('share') * 2000;
        $current_price = $total - $payments;



        $menu  = new Menu([
            [
                'info' => 'المبلغ الكلي',
                'value' => $total,
                'type' => 1,

            ],
            [
                'info' => 'المبلغ الحالي',
                'value' => $current_price,
                'type' => 1,
            ],
            [
                'info' => 'مصروفات',
                'value' => $payments,
                'type' => 1,

            ],

            [
                'info' => 'متبرعين',
                'value' => $users,
                'type' => 2,

            ],
            [
                'info' => 'حالات معالجة',
                'value' => $event,
                'type' => 2,

            ],
            [
                'info' => 'اسهم',
                'value' =>  $share,
                'type' => 2,

            ],


        ]);

        return view('livewire.pages.home.info', [
            'menu' => $menu,
        ]);
    }
}


class Menu
{
    public $items;

    function __construct($items = [])
    {
        // Menu Generation
        foreach ($items as $item) $this->items[] = new MenuItem($item);
    }
}

class MenuItem
{
    public $info;
    public $value;
    public $type; //1 = amount , 2 = info


    public function __construct($data)
    {
        $this->info = $data['info'];
        $this->value = $data['value'];
        $this->type = $data['type'];
    }
}
