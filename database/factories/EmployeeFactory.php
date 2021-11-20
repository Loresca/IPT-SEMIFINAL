<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'lname'=>$this->faker->word,
        'fname'=>$this->faker->word,
        'position'=>$this->faker->word,
        'salary'=>rand(2, 250),
    ];
});
