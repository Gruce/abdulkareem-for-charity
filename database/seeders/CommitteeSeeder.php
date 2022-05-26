<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Committee;

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
            'department'=>1,
            'stage' => 2,
            'study_type' => 1,
            'phone_num' => '077xxxxxx'
        ]);
        // id=2

        Committee::create([
            'name' => 'زينب ',
            'department'=>1,
            'stage' => 4,
            'study_type' => 1,
            'phone_num' => '033xxx'
        ]);

        // id=3
        Committee::create([
            'name' => 'منار ',
            'department'=>1,
            'stage' => 3,
            'study_type' => 1,
            'phone_num' => '033xxx'
        ]);



    }
}
