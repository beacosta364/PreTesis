<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Crear roles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);

        // Crear permisos categorias
        Permission::create(['name' => 'categoria.index'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name' => 'categoria.create'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'categoria.update'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'categoria.destroy'])->syncRoles([$roleAdmin]);

    }
}
