<?php

namespace App\Http\Livewire\Pages\Admins;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Main extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    public function add()
    {
        $this->alert('info', 'لأضافة مدير للموقع قم بترقيته من صفحة المتبرعين', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function render()
    {
        // $this->admins = User::where('is_admin', true)->get();
        $this->admins = User::with('shares')->where('is_admin', true)->get()->append('get_shares');
        //dd($this->admins->toArray());
        //dd($this->admins->append('get_shares')->toArray());
        //dd($this->admins->toArray());
        return view('livewire.pages.admins.main');
    }
}
