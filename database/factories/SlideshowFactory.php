<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Slideshow;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Slideshow::class, function (Faker $faker) {
    $imageUrl = $faker->imageUrl($width = 640, $height = 480);
    $titulo = $faker->sentence;
    $slug = Str::slug($titulo);
    return [
        'titulo' => $faker->sentence,
        'url' => "/$slug",
        'imagen' => $imageUrl,
        'fecha' => now()->subDays(rand(1, 20)),
        'publicado' => true,
    ];
});
