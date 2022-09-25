<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id:1
        Student::create([
            'user_id' => 1,
            'department' => 1,
            'study_type' => 1,
            'stage' => 2,
            'division' => 2
        ]);
    }
}
