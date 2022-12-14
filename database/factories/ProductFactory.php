<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name" => $this->faker->productName,
        "created_at" => time(),
        "updated_at" => time()
    ];
});
