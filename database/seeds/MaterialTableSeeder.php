<?php

use App\Material;
use App\Product;
use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Material::class, 5)->create();
    }
}
