<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'ruta' => '/pagina/' . rand(1, 0),
        'orden' => Menu::count() + 1,
        'publicado' => true,
    ];
});
