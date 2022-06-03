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
            'user_id' => 1,
            'accepted_shares' => 0,
            'paid_amount' => 0,
        ]);

        ### id = 2 ###
        Admin::create([
            'user_id' => 2,
            'accepted_shares' => 0,
            'paid_amount' => 0,
        ]);

        ### id = 3 ###
        Admin::create([
            'user_id' => 3,
            'accepted_shares' => 0,
            'paid_amount' => 0,
        ]);

        ### id = 4 ###
        Admin::create([
            'user_id' => 4,
            'accepted_shares' => 0,
            'paid_amount' => 0,
        ]);
    }
}
