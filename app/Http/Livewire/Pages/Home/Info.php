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

            ],
            [
                'info' => 'المبلغ الحالي',
                'value' => $current_price,

            ],
            [
                'info' => 'مصروفات',
                'value' => $payments,

            ],

            [
                'info' => 'متبرعين',
                'value' => $users,

            ],
            [
                'info' => 'حالات معالجة',
                'value' => $event,

            ],
            [
                'info' => 'اسهم',
                'value' =>  $share,

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


    public function __construct($data)
    {
        $this->info = $data['info'];
        $this->value = $data['value'];
    }
}
