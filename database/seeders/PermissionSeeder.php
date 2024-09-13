<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::Create([
            'name' => 'Crear cursos'
        ]);

        Permission::Create([
            'name' => 'Leer cursos'
        ]);

        Permission::Create([
            'name' => 'Actualizar cursos'
        ]);

        Permission::Create([
            'name' => 'Eliminar cursos'
        ]);

        Permission::Create([
            'name' => 'Ver Dashboard'
        ]);

        Permission::Create([
            'name' => 'Crear role'
        ]);

        Permission::Create([
            'name' => 'Listar role'
        ]);

        Permission::Create([
            'name' => 'Editar role'
        ]);

        Permission::Create([
            'name' => 'Eliminar role'
        ]);

        Permission::Create([
            'name' => 'Leer usuarios'
        ]);

        Permission::Create([
            'name' => 'Editar usuarios'
        ]);
    }
}
