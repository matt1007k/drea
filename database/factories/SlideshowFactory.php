<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Slideshow;
use Faker\Generator as Faker;

$factory->define(Slideshow::class, function (Faker $faker) {
    $imageUrl = $faker->imageUrl($width = 640, $height = 480);
    return [
        'titulo' => $faker->sentence,
        'descripcion' => $faker->paragraph,
        'imagen' => $imageUrl,
        'fecha' => now()->subDays(rand(1, 20)),
        'publicado' => true,
    ];
});
