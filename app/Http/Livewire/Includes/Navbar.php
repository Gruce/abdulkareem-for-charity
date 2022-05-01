<?php

namespace App\Http\Livewire\Includes;

use Livewire\Component;

class Navbar extends Component
{

    public function admin(){

    }

    public function user(){

    }

    public function guest(){
        $this->menu = [
            new MenuItem('Home', 'guest.home', 'fas fa-home'),
        ];
    }

    public function render(){

        if (auth()->check()){
            if (auth()->user()->is_admin){
                // Admin Menu
                $this->admin();

            } else {
                // User Menu
                $this->user();
            }
            $this->menu[] = new MenuItem('Logout', 'logout', 'fas fa-sign-out-alt');
        } else {
            // Guest Menu
            $this->guest();
            $this->menu[] = new MenuItem('Login', 'login', 'fas fa-sign-in-alt');
            $this->menu[] = new MenuItem('Register', 'register', 'fas fa-user-plus');
        }

        return view('livewire.includes.navbar');
    }
}


class MenuItem {
    public $name;
    public $route;
    public $icon;
    public $active;

    public function __construct($name, $route, $icon){
        $this->name = $name;
        $this->route = $route;
        $this->icon = $icon;
        $this->active = request()->routeIs($route);
    }
}
