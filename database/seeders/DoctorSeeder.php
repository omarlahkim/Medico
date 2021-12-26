<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\Models\Doctor::insert([
            [
                'first_name' => 'Mohamed',
                'last_name' => 'Lahkim',
                'gender_id' => 1,
                'user_id' => 1,
            ]
        ]);
    }
}
