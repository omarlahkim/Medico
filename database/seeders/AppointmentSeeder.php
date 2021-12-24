<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::insert([
            [
                'id' => 1,
                'time' => Carbon::now()->toTimeString(),
                'date' => Carbon::today()->toDateString(),
                'patient_id' => 1

            ]
        ]);
    }
}
