<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ExternalLink;
use Faker\Generator as Faker;

$factory->define(ExternalLink::class, function (Faker $faker) {
    $imageUrl = $faker->imageUrl($width = 640, $height = 480);
    return [
        'url' => $faker->url,
        'orden' => ExternalLink::count() + 1,
        'imagen' => $imageUrl,
        'publicado' => true
    ];
});
