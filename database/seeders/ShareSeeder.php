<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Share;
class ShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // id:1
        Share::create([
            'user_id' => 1,
            'share' => 5,
            
        ]);

        // id:2
        Share::create([
            'user_id' => 1,
            'share' => 1,
            
        ]);

        // id:3
        Share::create([
            'user_id' => 2,
            'share' => 12,
            
        ]);

        // id:4
        Share::create([
            'user_id' => 2,
            'share' => 15,
            
        ]);

        // id:5
        Share::create([
            'user_id' => 2,
            'share' => 20,
            
        ]);

        // id:6
        Share::create([
            'user_id' => 5,
            'share' => 20,
            
        ]);

        // id:7
        Share::create([
            'user_id' => 6,
            'share' => 20,
            
        ]);
    }
}

