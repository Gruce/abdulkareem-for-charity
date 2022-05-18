<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ### developers ###

        ### id = 1 ###
        Developer::create([
            'name' => 'محمد جواد',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 2 ###
        Developer::create([
            'name' => 'حسين نجاح',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الأولى",
            'photo' => "/img/dev2.jpg",
        ]);

        ### id = 3 ###
        Developer::create([
            'name' => 'منار ناصر',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثالثة",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 4 ###
        Developer::create([
            'name' => 'أحمد عبدالكريم',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الأولى",
            'photo' => "/img/dev4.jpg",
        ]);

        ### id = 5 ###
        Developer::create([
            'name' => 'موسى نمير',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 6 ###
        Developer::create([
            'name' => 'زينب أمجد ',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الرابعة",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 7 ###
        Developer::create([
            'name' => 'فاطمة نوفل',
            'department'=>'علوم الحاسوب',
            'stage' => 'المرحلة الثالثة',
            'photo' =>'/img/mo.jpg',
        ]);
        ### manager ###
        Developer::create([
            'name' => 'مصطفى معتز',
            'department' => 'علوم الحاسوب',
            'stage' => "المرحلة الثالثة",
            'type' => 2,
            'photo' => '/img/mo.jpg',
        ]);
    }
}
