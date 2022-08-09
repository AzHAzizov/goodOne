<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Material;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {
    return [
        "name" => $faker->name(),
        "created_at" => time(),
        "updated_at" => time()
    ];
});
