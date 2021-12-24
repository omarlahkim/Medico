<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::insert([
            [
                'id' => 1,
                'amount' => 100,
                'patient_id' => 1,

            ]
        ]);
    }
}
