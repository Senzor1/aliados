<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\price;

class priceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        price::create([
            'name' => 'gratis',
            'value' => 0
        ]);

        price::create([
            'name' => '19.99 USD (Nivel 1)',
            'value' => 19.99
        ]);

        price::create([
            'name' => '49.99 USD (Nivel 2)',
            'value' => 49.99
        ]);

        price::create([
            'name' => '99.99 USD (Nivel 3)',
            'value' => 99.99
        ]);
    }
}
