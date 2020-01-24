<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

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

        $user = User::first();
        $user->assignRoles('admin');
    }
}
