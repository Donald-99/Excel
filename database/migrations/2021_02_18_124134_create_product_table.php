<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_code');
            $table->integer('sku');
            $table->string('category');
            $table->string('tag');
            $table->string('product_title');
            $table->string('short_description');
            $table->string('description');
            $table->integer('price');
            $table->integer('sale_price');
            $table->integer('stock');
            $table->string('madhesia');
            $table->string('ngjyra');
            $table->string('brand');
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
        Schema::dropIfExists('product');
    }
}
