<?php

use App\MaterialProduct;
use Illuminate\Database\Seeder;

class MaterialProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MaterialProduct::class, 5)->create();
    }
}
