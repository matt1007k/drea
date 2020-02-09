<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Announcement;
use App\Models\AnnouncementLink;
use Faker\Generator as Faker;

$factory->define(AnnouncementLink::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'url' => 'documentos/test.pdf',
        'fecha' => now(),
        'announcement_id' => function () {
            return factory(Announcement::class)->create();
        }
    ];
});
