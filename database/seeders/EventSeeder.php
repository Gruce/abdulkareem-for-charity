<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // id:1
            Event::create([
                'title' => 'اجراء عملية جراحية',
                'description' => "احد الطلبة في المرحلة الرابعة مصاب بتليف في الكبد و يحتاج الى عملية جراحية في الهند",
                'target' => 1000000,
                'received_price' => 120000,
            ]);

            // id:2
            Event::create([
                'title' => 'مساعدة احد الطلبة ',
                'description' => "احد الطلبة في المرحلة الرابعة مصاب بتليف في الكبد و يحتاج الى عملية جراحية في الهند",
                'target' => 245000,
                'received_price' => 50000,
            ]);
    }
}
