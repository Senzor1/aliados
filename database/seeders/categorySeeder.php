<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Category::create([
            'name' => 'En vivo'
        ]);

        Category::create([
            'name' => 'Gratis'
        ]);

        Category::create([
            'name' => 'Otros cursos'
        ]);
    }
}
