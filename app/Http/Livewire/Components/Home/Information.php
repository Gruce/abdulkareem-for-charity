<?php

namespace App\Http\Livewire\Components\Home;

use Livewire\Component;

class Information extends Component
{
    public function render()
    {
        $menu = new Menu([
            [
                'info' => 'عدد المتبرعين',
                'value' => '+1000',
                'icon' => 'fas fa-home',

                // 'submenu' => [
                //     [
                //         'name' => 'Home2',
                //         'route' => 'home',
                //         'icon' => 'fas fa-home',
                //         'permissions' => 2,
                //     ]
                // ]
            ],
            [
                'info' => 'الحالات التي تم علاجها',
                'value' => '+15',
                'icon' => 'fas fa-hand-holding-heart',
            ],
            [
                'info' => 'مجموع المبالغ المتبرع بها',
                'value' => '+800$',
                'icon' => 'fas fa-circle-info',
            ],
        ]);

        return view('livewire.components.home.information' ,[
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

        $this->filter();
    }

    function filter()
    {
        $this->items = collect($this->items)->filter(function ($item) {
            if ($item->hasSubmenu && !$item->submenu->items) return false;
            return $item->show;
        })->all();
    }
}

class MenuItem
{
    public $info;
    public $submenu;
    public $value;
    public $icon;

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
        $this->hasSubmenu = isset($data['submenu']);
        $this->submenu = new Menu($data['submenu'] ?? []);

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
