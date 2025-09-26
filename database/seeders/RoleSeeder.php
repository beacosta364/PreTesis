<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        //
        // Crear roles
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $roleUser = Role::firstOrCreate(['name' => 'user']);

        // Crear permisos categorias
        Permission::firstOrCreate(['name' => 'categoria.index'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::firstOrCreate(['name' => 'categoria.create'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'categoria.update'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'categoria.destroy'])->syncRoles([$roleAdmin]);

        // Crear permisos productos
        Permission::firstOrCreate(['name' => 'productos.index'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::firstOrCreate(['name' => 'productos.create'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'productos.update'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'productos.destroy'])->syncRoles([$roleAdmin]);

        // Crear permisos Notificaciones.
        Permission::firstOrCreate(['name' => 'notificaciones.index'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::firstOrCreate(['name' => 'notificaciones.create'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'notificaciones.update'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'notificaciones.destroy'])->syncRoles([$roleAdmin]);

        //Crear permisos registro de ingreso a bodega
        Permission::firstOrCreate(['name' => 'ingreso.index'])->syncRoles([$roleAdmin]);

        //Crear permisos configuracion
        Permission::firstOrCreate(['name' => 'configuracion.index'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::firstOrCreate(['name' => 'configuracion.create'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'configuracion.update'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'configuracion.show'])->syncRoles([$roleAdmin]);

        //Crear permisos reportes
        Permission::firstOrCreate(['name' => 'reporteinventarios.show'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'reportemovimientos.show'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'reportes.show'])->syncRoles([$roleAdmin]);

        //Crear permisos vista lista usuarios
        Permission::firstOrCreate(['name' => 'vistausuarios.show'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'registrarusuarios.show'])->syncRoles([$roleAdmin]);
        Permission::firstOrCreate(['name' => 'rolusuarios.show'])->syncRoles([$roleAdmin]);

        //Crear permisos eliminar cuenta
        Permission::firstOrCreate(['name' => 'eliminarcuenta.show'])->syncRoles([$roleAdmin]);

        // Permisos relacionados a controladores  de accceso a bodega 
        // Ver controladores (acceso al listado)
        Permission::firstOrCreate(['name' => 'controlador.show'])->syncRoles([$roleAdmin, $roleUser]);
        // Crear / guardar IP
        Permission::firstOrCreate(['name' => 'controlador.create'])->syncRoles([$roleAdmin]);
        // Editar
        Permission::firstOrCreate(['name' => 'controlador.edit'])->syncRoles([$roleAdmin]);
        // Eliminar
        Permission::firstOrCreate(['name' => 'controlador.delete'])->syncRoles([$roleAdmin]);
        // Abrir electroimán
        Permission::firstOrCreate(['name' => 'controlador.open'])->syncRoles([$roleAdmin, $roleUser]);
        // Ver historial de accesos
        Permission::firstOrCreate(['name' => 'acciones.show'])->syncRoles([$roleAdmin]);
        // Eliminar registros de historial
        Permission::firstOrCreate(['name' => 'acciones.delete'])->syncRoles([$roleAdmin]);
    }
}
