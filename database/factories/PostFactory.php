<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $imageUrl = $faker->imageUrl($width = 640, $height = 480);
    return [
        'titulo' => $faker->sentence,
        'fecha' => now()->subDays(rand(1, 20)),
        'contenido' => "<h1>$faker->sentence</h1><img src='$imageUrl' class='w-sm-100'/><p>$faker->paragraph</p>",
        'publicado' => true,
    ];
});
