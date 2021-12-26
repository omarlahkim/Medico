<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Drug::insert([
            [
                'name' => 'Doliprane 1000',

            ],
            [
                'name' => 'Amoxile',

            ]
        ]);
    }
}
