<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AnnouncementGroup;
use Faker\Generator as Faker;

$factory->define(AnnouncementGroup::class, function (Faker $faker) {
    $anio = rand(2015, 2020);
    return [
        'nombre' => 'CAS ' . $anio,
        'anio' => $anio
    ];
});
