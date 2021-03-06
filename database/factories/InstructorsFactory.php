<?php

use Faker\Generator as Faker;

$factory->define(App\Instructor::class, function (Faker $faker) {
    return [        
        "position" => $faker->sentence(),
        "image" => $faker->word(),
        "bio" => $faker->paragraphs(rand(2, 10), true), 
    ];
});
