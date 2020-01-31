<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    $imageUrl = $faker->imageUrl($width = 640, $height = 480);
    return [
        'titulo' => $faker->sentence,
        'fecha' => now()->subDays(rand(1, 20)),
        'publicado' => true,
        'album_id' => function(){
        return factory(\App\Models\Album::class)->create();
        },
        'imagen' => $imageUrl
    ];
});
