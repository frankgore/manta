<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return ['cost' => 999.99,
            'url' => 'http://www.testurl.com',
            'description' => 'What a time to be alive!',
            'name' => 'Working Hard!'];
});
