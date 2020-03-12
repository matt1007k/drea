<?php

use App\Models\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        //roles
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Acceso a todos los módulos del sistema',
            'special' => 'all-access',
        ]);
        Role::create([
            'name' => 'Suspendido',
            'slug' => 'suspendido',
            'description' => 'Sin acceso a los módulos del sistema',
            'special' => 'no-access',
        ]);
        Role::create([
            'name' => 'Consulta',
            'description' => 'Acceso a los módulos pero solo vista del sistema',
            'slug' => 'consulta',
        ]);
        Role::create([
            'name' => 'Resolución',
            'description' => 'Acceso a los módulos de documentos (sólo de resoluciones) del sistema',
            'slug' => 'resolucion',
        ]);

        $user = User::first();
        $user->assignRoles('admin');
    }
}
