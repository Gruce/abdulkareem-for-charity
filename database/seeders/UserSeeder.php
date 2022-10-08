<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ### admin ###

        // id:1
        User::create([
            'name' => 'Mustafa Moataz',
            'email' => 'mustafaadmin@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'type' => 1,
            'gender' => 2,
            'phone_number' =>'077',
            'telegram_username' =>'tttt',

        ]);

        // id:2
        User::create([
            'name' => 'Dr.Areej Hamdan',
            'email' => 'drareejadmin@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'type' => 2,
            'gender' => 1,
            'phone_number' =>'077',
            'telegram_username' =>'tttt',
        ]);

        



    }
}
