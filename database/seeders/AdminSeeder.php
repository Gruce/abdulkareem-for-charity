<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ### id = 1 ###
        Admin::create([
            'name' => 'محمد جواد',
            'department'=>'علوم الحاسوب',
            'stage' => "المرحلة الثانية",
            'photo' => "/img/mo.jpg",
            'github' => "https://github.com/MohammedJ18",
            'email' => "jawad6686@gmail.com",


        ]);
    }
}
