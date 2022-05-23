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
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'study' => 'صباحية',
            'phone' => '077xxxxxx'
        ]);

         // id=2
         Committee::create([
            'name' => 'محمد جواد',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'phone' => '077xxxxxx'
        ]);

         // id=3
         Committee::create([
            'name' => 'محمد جواد',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'phone' => '077xxxxxx'
        ]);

         // id=4
         Committee::create([
            'name' => 'محمد جواد',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'phone' => '077xxxxxx'
        ]);
    }
}
