<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Document;
use App\Models\TypeDocument;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'descripcion' => $faker->paragraph,
        'archivo' => $faker->imageUrl,
        'anio' => date('Y'),
        'fecha' => now(),
        'publicado' => true,
        'tipo_id' => function () {
            return factory(TypeDocument::class)->create();
        },
    ];
});
