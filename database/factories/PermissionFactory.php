<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Caffeinated\Shinobi\Models\Permission;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'name' => 'Navegar roles',
        'slug' => 'roles.lista',
        'description' => 'Lista y navega todos los roles del sistema',
    ];
});
