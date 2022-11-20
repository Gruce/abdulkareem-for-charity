<?php

namespace App\Http\Livewire\Components;

use App\Models\{
    Event,
    Share
};
use Livewire\Component;

class Navbar extends Component
{

    protected $listeners = ['$refresh'];

    public function render()
    {

        $this->payments = Event::sum('received_price');
        $this->total = Share::where('state', true)->sum('share') * 2000;
        $this->current_price = $this->total - $this->payments;

        $menu = new Menu([
            [
                'name' => 'الرئيسية',
                'route' => 'home',
                'icon' => 'home',

            ],
            [
                'name' => 'الحالات',
                'route' => 'cases',
                'icon' => 'hand-holding-heart',
            ],
            [
                'name' => 'التبرع',
                'route' => 'donate',
                'icon' => 'circle-info',
                'permissions' => 2,

            ],
            [
                'name' => 'المتبرعين ',
                'route' => 'donors',
                'icon' => 'donors',
            ],
            [
                'name' => 'الصندوق',
                'route' => 'about',
                'icon' => 'circle-info',
            ],
            [
                'name' => 'الاداريين',
                'route' => 'admins',
                'icon' => 'circle-info',
                'permissions' => 4,
            ],




        ]);

        $leftMenu = new Menu([
            [
                'name' => 'انضمام',
                'route' => 'register',
                'icon' => 'user-plus',
                'permissions' => 1,
            ],
            [
                'name' => ' الدخول',
                'route' => 'login',
                'icon' => 'people-pulling',
                'permissions' => 1,
            ],

        ]);

        return view('livewire.components.navbar', [
            'menu' => $menu,
            'leftMenu' => $leftMenu,
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

        $this->filter();
    }

    function filter()
    {
        $this->items = collect($this->items)->filter(function ($item) {

            return $item->show;
        })->all();
    }
}

class MenuItem
{
    public $name;
    public $submenu;
    public $route;
    public $icon;
    public $active;

    public $permissions;
    public $show = true;
    // 0 => General
    // 1 => Only guests
    // 2 => users (users & admins)
    // 3 => only users
    // 4 => only admins

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->route = $data['route'];
        $this->icon = $data['icon'];
        $this->permissions = $data['permissions'] ?? 0;


        $this->active = request()->routeIs($this->route);

        if ($this->permissions == 1) {
            // Only guests
            if (auth()->check()) {
                $this->show = false;
            }
        } elseif ($this->permissions == 2) {
            // users (users & admins)
            if (!auth()->check()) {
                $this->show = false;
            }
        } elseif ($this->permissions == 3) {
            // only users
            if (!auth()->check() || auth()->user()->is_admin == true) {
                $this->show = false;
            }
        } elseif ($this->permissions == 4) {
            // only admins
            if (!auth()->check() || auth()->user()->is_admin == false) {
                $this->show = false;
            }
        }
    }
}
