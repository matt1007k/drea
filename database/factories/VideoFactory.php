<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'video' => 'hw136xNCu0k',
        'fecha' => now()->subDays(rand(1, 10)),
        'publicado' => true,
    ];
});
