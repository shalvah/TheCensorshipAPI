<?php

use Faker\Generator as Faker;

$factory->define(App\BadWord::class, function (Faker $faker) {
    return [
        'word' => $faker->word,
        'how_bad_is_it' => $faker->randomElement(['unspeakable', 'horrible', 'very bad', 'bad'])
    ];
});
