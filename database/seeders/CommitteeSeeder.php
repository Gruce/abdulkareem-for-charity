<?php

namespace Database\Seeders;

use App\Http\Livewire\Pages\Donate\Committee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id=1
        Committee::create([
            'name' => 'محمد جواد',
            'department'=>1,
            'stage' => 2,
            'study' => 1,
            'photo' => '/img/mo.jpg',
            'phone_number' => '077xxxxxx'
        ]);
        
    }
}
