<?php

namespace Database\Seeders;

use App\Models\platform;
use Illuminate\Database\Seeder;

class platformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        platform::create([
            'name' => 'youtube'
        ]);

        platform::create([
            'name' => 'vimeo'
        ]);
    }
}
