<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(EloquentORM\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'gender' => $faker->randomElement(['f', 'm']),
        'biography' => $faker->text(rand(100, 255)),
        'remember_token' => $faker->randomElement([null, str_random(10)])
    ];
});

$factory->define(EloquentORM\Book::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'category_id' => $faker->randomElement([1,2,3])// que pasaría si un libro no tiene una categoria relacionada
    ];
});