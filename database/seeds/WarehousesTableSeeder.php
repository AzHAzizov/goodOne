<?php

use App\Material;
use App\Warehouse;
use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Warehouse::class, 15)->create();
    }
}
