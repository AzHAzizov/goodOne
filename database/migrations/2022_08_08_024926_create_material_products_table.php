<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_products', function (Blueprint $table) {
            $table->integer("product_id")->constrained();
            $table->integer("material_id")->constrained();
         
 
 
            $table->foreign("product_id")
                 ->references("id")
                 ->on('products')
                 ->onDelete("cascade");
 
 
            $table->foreign("material_id")
                 ->references("id")
                 ->on('materials')
                 ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_products');
    }
}
