<?php

namespace App\Faker;

use Faker\Provider\Base;

class MaterialServiceProvider extends Base
{
    protected static $materials = [
        'Ip',
        'Mato',
        'Tugma',
        'Zamok'
    ];

    public function materialName(): string {
        return static::randomElement(static::$materials);
    }
}
