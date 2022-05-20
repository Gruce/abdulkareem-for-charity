<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adminstrarer;
class AdminstrarerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             ### id = 1 ###
             Adminstrarer::create([
                'name' => 'فاطمة عيسى',
                'email'=>' fatima@gmail.com',
                'phone_number' => " 098765",
                'photo' => "/img/mo.jpg",
            ]);
    
               ### id = 2 ###
               Adminstrarer::create([
                'name' => ' منار ناصر',
                'email'=>' manar@gmail.com',
                'phone_number' => " 765",
                'photo' => "/img/mo.jpg",
            ]);

    }
}
