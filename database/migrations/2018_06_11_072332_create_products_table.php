<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_quantity');
            $table->enum('product_name', ['LOREAL', 'NATURAL', 'WELLA', 'JOYNNA',
                        'CREATIC', 'KOLESTON', 'SCHWARZKOPF', 'MATRIX',
                        'NU CLASS', 'REVLON', 'RHC', 'MISATO','WAVE LOTION',
                        'KERABOND', 'EPSA', 'HORTALEZA', 'BREMOD', 'SHINE MOIST',
                        'J. CHEMIE', 'AKTUELLE', 'CAOLVXIANG', 'LVJ BRAZZILIAN',
                        'A & K', 'MELLINA PROFESSIONALE', 'DRAGON BEAUTY', 'JACKIE',
                        '7 STAR','SHINE', 'HERSHE', 'KOLIES', 'OMG NAIL POLISH',
                        'CARONIA', 'CHIQ', 'NAIL OVE', 'BOBBY', 'ORLY','BK']);
            $table->text('product_description1');
            $table->enum('product_category', ['Hair Products', 'Nail Products', 'Makeup and Cosmetics']);
            $table->enum('product_type', ['HAIR COLOR', 'CREME PEROXIDE', 'NEUTRALIZING CREME',
                         'SMOOTHING CREME', 'HENA WAX', 'HAIR SPA','SENSITISED HAIR','COLOR DEVELOPER',
                         'NATURAL', 'MILD', 'INTENSE', 'EMULSION', 'INTENSIVE EMULSION']);
            $table->float('color_no');
            $table->text('product_description2');
            $table->integer('produce_bottle');
            $table->text('remarks');
            $table->enum('product_status', ['in stock', 'out of stock']);
            $table->float('product_cost', 8, 2);
            $table->text('MFX');
            $table->date('expiration');
            $table->text('po');
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
        Schema::dropIfExists('products');
    }
}
