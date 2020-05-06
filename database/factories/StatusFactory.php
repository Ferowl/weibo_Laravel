<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Status::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time();
    return [
        'content' => $faker->text(),
        'create_at' => $date_time,
        'update_at' => $date_time,
    ];
});
