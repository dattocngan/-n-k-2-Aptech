<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on("categories");
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on("brands");
            $table->float('price');
            $table->float('price_discount');
            $table->Integer('price_lever');
            $table->unsignedBigInteger('quantity_available');
            $table->text('short_descreption');
            $table->longtext('descreption');
            $table->Integer('is_deleted')->default(0);
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
