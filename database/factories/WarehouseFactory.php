<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Material;
use App\Warehouse;
use Faker\Generator as Faker;

$factory->define(Warehouse::class, function (Faker $faker) {
    return [
        "material_id" => Material::all()->random()->id,
        "remainder" => $faker->randomFloat(3, 1, 1000),
        "created_at" => time(),
        "updated_at" => time()
    ];
});
