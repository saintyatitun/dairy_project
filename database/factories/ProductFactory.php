<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'name' => $this->faker->word,
        'price' => $this->faker->randomFloat(2, 1, 100),
        'description' => $this->faker->sentence,
        'category_id' => Category::factory()->create()->id,
    ];
});
