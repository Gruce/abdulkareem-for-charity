<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id:1
        Payment::create([
            'user_id' => 1,
            'price' => 5000,
        ]);

        // id:2
        Payment::create([
            'user_id' => 1,
            'price' => 10000,
        ]);

        // id:3
        Payment::create([
            'user_id' => 2,
            'price' => 12000,
        ]);

        // id:4
        Payment::create([
            'user_id' => 2,
            'price' => 15000,
        ]);

        // id:5
        Payment::create([
            'user_id' => 2,
            'price' => 20000,
        ]);

        // id:6
        Payment::create([
            'user_id' => 5,
            'price' => 20000,
        ]);

        // id:7
        Payment::create([
            'user_id' => 6,
            'price' => 20000,
        ]);
    }
}
