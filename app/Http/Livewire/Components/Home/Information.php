<?php

namespace App\Http\Livewire\Components\Home;

use Livewire\Component;
use App\Models\User;
use App\Models\Share;
use App\Models\Event;
class Information extends Component
{   public $state = null;
    
    public function render()
    {
            $users = User::all()->count();
            $share = Share::all()->sum('share');
            $event = Event::whereColumn('received_price','target')->count();
            
        
        $menu = new Menu([
            [
                'info' => 'متبرعين',
                'value' => $users,
                 
            ],
            [
                'info' => 'حالات معالجة',
                'value' =>$event,
                
            ],
            [
                'info' => 'اسهم',
                'value' =>  $share,
                
            ],
            [
                'info' => 'مصروفات',
                'value' => '1235000',
                
            ],
            
        ]);
        $activities = new Menu([
            [
                'info' => 'المرضى',
                'value' => 'seedling',
                
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
                'info' => 'الطلاب',
                'value' => 'graduation-cap',
                 
            ],
            [
                'info' => 'المرضى',
                'value' => 'head-side-mask',
                
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
