<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SecretarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Secretary::insert([
            [
                'first_name' => 'Lina',
                'last_name' => 'Benjelloun',
                'birth_date' => Carbon::now()->toDateString(),
                'address' => 'test',
                'phone' => '123456',
                'gender_id' => 2,
                'user_id' => 2,
            ]
        ]);
    }
}
