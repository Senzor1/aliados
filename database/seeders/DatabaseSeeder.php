<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Contracts\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory('courses');

        Storage::makeDirectory('courses');

        $this->call(PermissionSeeder::class);
        
        $this->call(RoleSeeder::class);
        
        $this->call(UserSeeder::class);

        $this->call(levelSeeder::class);

        $this->call(categorySeeder::class);

        $this->call(priceSeeder::class);

        $this->call(platformSeeder::class);

        $this->call(courseSeeder::class);
        
    }
}
