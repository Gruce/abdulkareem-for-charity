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
        ### id = 1 ###
        Developer::create([
            'name' => 'محمد جواد',
            'stage' => "المرحلة الثانية - علوم الحاسوب",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 2 ###
        Developer::create([
            'name' => 'حسين نجاح',
            'stage' => "المرحلة ألأولى - علوم الحاسوب",
            'photo' => "/img/Dev2.jpg",
        ]);

        ### id = 3 ###
        Developer::create([
            'name' => 'منار ناصر',
            'stage' => "المرحلة الثالثة - علوم الحاسوب",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 4 ###
        Developer::create([
            'name' => 'أحمد عبدالكريم',
            'stage' => "المرحلة ألأولى - علوم الحاسوب",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 5 ###
        Developer::create([
            'name' => 'موسى نمير',
            'stage' => "المرحلة الثانية - علوم الحاسوب",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 6 ###
        Developer::create([
            'name' => 'زينب أمجد ',
            'stage' => "المرحلة الرابعة - علوم الحاسوب",
            'photo' => "/img/mo.jpg",
        ]);

        ### id = 7 ###
        Developer::create([
            'name' => 'فاطمة نوفل',
            'stage' => "المرحلة الثالثة - علوم الحاسوب",
            'photo' => "/img/mo.jpg",
        ]);
    }
}
