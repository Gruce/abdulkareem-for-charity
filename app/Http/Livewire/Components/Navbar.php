<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public function render(){
        $menu = new Menu([
            [
                'name' => 'الرئيسية',
                'route' => 'home',
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
                'name' => 'الحالات',
                'route' => 'cases',
                'icon' => 'fas fa-hand-holding-heart',
            ],
            [
                'name' => 'التبرع',
                'route' => 'donate',
                'icon' => 'fas fa-circle-info',
            ],
            [
                'name' => 'المتبرعين ',
                'route' => 'donors',
                'icon' => 'fas fa-donors',
            ],
            [
                'name' => 'الصندوق',
                'route' => 'about',
                'icon' => 'fas fa-circle-info',
            ],
            
            
            

        ]);

        $leftMenu = new Menu([
            [
                'name' => 'تسجيل الدخول',
                'route' => 'login',
                'icon' => 'fas fa-home',
                'permissions' => 1,
            ],
            [
                'name' => 'انشاء حساب',
                'route' => 'register',
                'icon' => 'fas fa-home',
                'permissions' => 1,
            ],
        ]);

        return view('livewire.components.navbar', [
            'menu' => $menu,
            'leftMenu' => $leftMenu,
        ]);
    }
}


class Menu {
    public $items;

    function __construct($items = []) {
        // Menu Generation
        foreach ($items as $item) $this->items[] = new MenuItem($item);
        
        $this->filter(); 
    }

    function filter(){
        $this->items = collect($this->items)->filter(function ($item) {
            if ($item->hasSubmenu && !$item->submenu->items) return false;
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

    public function __construct($data){
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
