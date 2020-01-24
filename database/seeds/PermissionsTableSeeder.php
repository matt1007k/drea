<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        //roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.lista',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un rol',
            'slug' => 'roles.ver',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un rol',
            'slug' => 'roles.editar',
            'description' => 'Editar los datos de cualquier rol del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un rol',
            'slug' => 'roles.eliminar',
            'description' => 'Eliminar los datos de cualquier rol del sistema',
        ]);
        Permission::create([
            'name' => 'Registrar un rol',
            'slug' => 'roles.registrar',
            'description' => 'Registrar un rol del sistema',
        ]);
        //permisos
        Permission::create([
            'name' => 'Navegar permisos',
            'slug' => 'permisos.lista',
            'description' => 'Lista y navega todos los permisos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un permiso',
            'slug' => 'permisos.ver',
            'description' => 'Ver en detalle cada permiso del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un permiso',
            'slug' => 'permisos.editar',
            'description' => 'Editar los datos de cualquier permiso del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un permiso',
            'slug' => 'permisos.eliminar',
            'description' => 'Eliminar los datos de cualquier permiso del sistema',
        ]);
        //usuarios
        Permission::create([
            'name' => 'Registrar un usuario',
            'slug' => 'usuarios.registrar',
            'description' => 'Registrar un usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'usuarios.lista',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un usuario',
            'slug' => 'usuarios.ver',
            'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un usuario',
            'slug' => 'usuarios.editar',
            'description' => 'Editar los datos de cualquier usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un usuario',
            'slug' => 'usuarios.eliminar',
            'description' => 'Eliminar los datos de cualquier usuario del sistema',
        ]);
        //documentos
        Permission::create([
            'name' => 'Navegar documentos',
            'slug' => 'documentos.lista',
            'description' => 'Lista y navega todos los documentos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un documento',
            'slug' => 'documentos.ver',
            'description' => 'Ver en detalle cada documento del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un documento',
            'slug' => 'documentos.editar',
            'description' => 'Editar los datos de cualquier documento del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un documento',
            'slug' => 'documentos.eliminar',
            'description' => 'Eliminar los datos de cualquier documento del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un documento',
            'slug' => 'documentos.registrar',
            'description' => 'Crear un documento en el sistema',
        ]);
        //tipo de documentos
        Permission::create([
            'name' => 'Crear un tipo de documento',
            'slug' => 'tipo-documento.registrar',
            'description' => 'Crear un tipo de documento del sistema',
        ]);
    }
}
