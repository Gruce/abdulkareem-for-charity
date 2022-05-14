<?php

namespace App\Http\Livewire\Components\Home;

use Livewire\Component;

class Information extends Component
{
    public $state = null;
    public function render()
    {
        $menu = new Menu([
            [
                'info' => 'متبرعين',
                'value' => '124',
                 
            ],
            [
                'info' => 'حالات معالجة',
                'value' => '15',
                
            ],
            [
                'info' => 'اسهم',
                'value' => '1000',
                
            ],
            [
                'info' => 'مصروفات',
                'value' => '1235000',
                
            ],
            
        ]);
        $activities = new Menu([
            [
                'info' => 'الطلاب',
                'value' => 'graduation-cap',
                 
            ],
            [
                'info' => 'الايتام',
                'value' => 'people-line',
                
            ],
            [
                'info' => 'الفقراء',
                'value' => 'person-arrow-up-from-line',
                
            ],
            [
                'info' => 'البيئة',
                'value' => 'seedling',
                
            ],
            
        ]);
        return view('livewire.components.home.information' ,[
            'menu' => $menu,
            'activities' => $activities
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
