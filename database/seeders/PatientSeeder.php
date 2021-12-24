<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Patient;
use Carbon\Carbon;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert(
            [
                'id' => 1,
                'first_name' => 'Kev',
                'last_name' => 'Ikken',
                'address' => 'res al kira imm 1 app 1',
                'CIN' => 'C121212',
                'birth_date' => Carbon::create('2000', '01', '01'),
                'profession' => 'fireman',
                'phone' => '00000000',
                'marital_situation_id' => 1,
                'gender_id' => 1,
                'insurance_id' => 1,
                'city_id' => 1
            ]
        );
    }
}
