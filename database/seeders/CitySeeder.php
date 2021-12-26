<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            [

                'name' => 'Meknes',
                'region_id' => 1

            ],
            [

                'name' => 'Fes',
                'region_id' => 1

            ],
            [

                'name' => 'Rabat',
                'region_id' => 1

            ],
            [

                'name' => 'Casablanca',
                'region_id' => 1

            ],
            [

                'name' => 'Ifrane',
                'region_id' => 1

            ],
            [

                'name' => 'Tanger',
                'region_id' => 1

            ],
            [

                'name' => 'Tetuan',
                'region_id' => 1

            ],
            [

                'name' => 'Agadir',
                'region_id' => 1

            ],

        ]);
    }
}
