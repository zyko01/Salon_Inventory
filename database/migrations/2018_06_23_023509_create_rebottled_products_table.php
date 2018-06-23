<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRebottledProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rebottled_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('use_product');
            $table->integer('produce_bottle');
            $table->enum('designation', ['RECEPTION', 'OFFICE', 'STOCK ROOM']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rebottled_products');
    }
}
