<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    $imageUrl = $faker->imageUrl($width = 640, $height = 480);
    return [
        'titulo' => $faker->sentence,
        'fecha' => now()->subDays(rand(1, 20)),
        'publicado' => true,
        'descripcion' => $faker->paragraph,
        'imagen' => $imageUrl
    ];
});
