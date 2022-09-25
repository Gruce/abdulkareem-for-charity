<?php

namespace Database\Seeders;

use App\Http\Livewire\Pages\Donate\Committee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            StudentSeeder::class,
            ShareSeeder::class,
            EventSeeder::class,
            DeveloperSeeder::class,

        ]);

    }
}
