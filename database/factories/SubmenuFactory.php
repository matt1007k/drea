<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menu;
use App\Models\Submenu;
use Faker\Generator as Faker;

$factory->define(Submenu::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'ruta' => '/pagina/' . rand(1, 0),
        'orden' => Submenu::count() + 1,
        'publicado' => true,
        'menu_id' => function () {
            return factory(Menu::class)->create();
        }
    ];
});
