<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(MaterialTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(MaterialProductsSeeder::class);
        $this->call(WarehousesTableSeeder::class);
    }
}
