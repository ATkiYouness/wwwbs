<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Appointment::class, function (Faker $faker) {

	
    return [
        'date' => $faker->date,
        'time' => $faker->time,
        'brief_desc' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'full_desc' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'completed' => $faker->boolean,
        'canceled' => $faker->boolean,

    ];
});
