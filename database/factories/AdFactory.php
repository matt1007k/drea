<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    $imageUrl = $faker->imageUrl($width = 640, $height = 480);
    return [
        'titulo' => $faker->sentence,
        'url' => $faker->url,
        'imagen' => $imageUrl,
        'publicado' => true,
    ];
});
