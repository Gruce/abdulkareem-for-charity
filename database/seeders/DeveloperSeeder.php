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
            'github' => "https://github.com/MohammedJ18",
            'email' => "jawad6686@gmail.com",


        ]);

        ### id = 2 ###
        Developer::create([
            'name' => 'حسين نجاح',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الأولى",
            'photo' => "/img/dev2.jpg",
            'github' => "https://github.com/i1Zeus",
            'email' => "husseinnajah123@gmail.com",

        ]);

        ### id = 3 ###
        Developer::create([
            'name' => 'منار ناصر',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثالثة",
            'photo' => "/img/mo.jpg",
            'github' => "https://github.com/6vnar",
            'email' => 'manarnaseerabdulla@gmail.com',

        ]);

        ### id = 4 ###
        Developer::create([
            'name' => 'أحمد عبدالكريم',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الأولى",
            'photo' => "/img/dev4.jpg",
            'github' => "https://github.com/a7med3bd",
            'email' => "mr.darkboss1@gmail.com",

        ]);

        ### id = 5 ###
        Developer::create([
            'name' => 'موسى نمير',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'photo' => "/img/mo.jpg",
            'github' => "https://github.com/MosaNameer",
            'email' => "mosa.mn777@gmail.com",

        ]);

        ### id = 6 ###
        Developer::create([
            'name' => 'زينب أمجد ',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الرابعة",
            'photo' => "/img/mo.jpg",
            'github' => "https://github.com/zal3",
            'email' => "zainabamjedlatef31@gmail.com",

        ]);

        ### id = 7 ###
        Developer::create([
            'name' => 'فاطمة نوفل',
            'department'=>'علوم الحاسوب',
            'stage' => 'المرحلة الثالثة',
            'photo' =>'/img/mo.jpg',
            'email' => 'fatma.nawfal.abdalrazak@gmail.com',
            'github' => 'https://github.com/fatmanawfal'
        ]);
        ### manager ###
        Developer::create([
            'name' => 'مصطفى معتز',
            'department' => 'علوم الحاسوب',
            'stage' => "المرحلة الثالثة",
            'type' => 2,
            'photo' => '/img/mo.jpg',
            'phone' => '01098989898',

        ]);
    }
}
