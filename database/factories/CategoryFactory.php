<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'name' => $this->faker->word,
        'description' => $this->faker->sentence,
    ];
});
