<?php

namespace App\Faker;

use Faker\Provider\Base;

class ProductServiceProvider extends Base
{
    protected static $materials = [
        'Shim',
        'Ko\'ylak',
    ];

    public function productName(): string {
        return static::randomElement(static::$materials);
    }
}
