<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use Faker\Generator as Faker;

$factory->define(Announcement::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'numero' => $faker->paragraph,
        'estado' => 'en proceso',
        'fecha' => now(rand(1, 10)),
        'grupo_id' => function () {
            return factory(AnnouncementGroup::class)->create();
        }
    ];
});
