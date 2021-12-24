<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // $this->call(GenderSeeder::class);
        // $this->call(MaritalSituationSeeder::class);
        // $this->call(RegionSeeder::class);
        // $this->call(CitySeeder::class);
        // $this->call(InsuranceSeeder::class);
        $this->call(AppointmentSeeder::class);
    }
}
