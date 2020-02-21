<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Caffeinated\Shinobi\Models\Role;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Acceso a todos los módulos del sistema',
        'special' => 'all-access',
    ];
});
