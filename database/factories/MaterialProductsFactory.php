<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Material;
use App\MaterialProduct;
use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(MaterialProduct::class, function (Faker $faker) {
    return [
        'material_id' => Material::all()->random()->id,
        'product_id' => Product::all()->random()->id,
        'quantity' => $faker->randomFloat(3, 0, 1000)
    ];
});
