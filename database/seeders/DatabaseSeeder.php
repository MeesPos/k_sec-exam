<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CityTripsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CityTripsSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
