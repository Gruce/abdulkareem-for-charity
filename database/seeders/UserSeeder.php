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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'type' => 1
        ]);

        // id:2
        User::create([
            'name' => 'Hussin',
            'email' => 'hussin@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'type' => 2
        ]);

        // id:3
        User::create([
            'name' => 'Manar',
            'email' => 'manar@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'type' => 3
        ]);


        ### end admin ###

        ### User ### 

        // id:4 
        User::create([
            'name' => 'Mohammed',
            'email' => 'mohammed@gmail.com',
            'password' => bcrypt('123456'),
            //Default User
            'type' => 1
        ]);

        // id:5 
        User::create([
            'name' => 'Zainab',
            'email' => 'zainab@gmail.com',
            'password' => bcrypt('123456'),
            //Default User
            'type' => 2
        ]);

        // id:6 
        User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('123456'),
            //Default User
            'type' => 3
        ]);

        // id:7
        User::create([
            'name' => 'Fatima',
            'email' => 'fatima@gmail.com',
            'password' => bcrypt('123456'),
            //Default User
            'type' => 4
        ]);

        ### end User ###


        
    }
}
