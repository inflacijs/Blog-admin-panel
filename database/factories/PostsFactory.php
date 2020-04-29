<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'category' => $faker->sentence,
        'image' => $faker->imageUrl,
        'body' => $faker->paragraphs(2)
    ];
});
