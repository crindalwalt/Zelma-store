<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_inventories', function (Blueprint $table) {
            $table->id();
           $table->string('retail_price');
           $table->string('discount_price');
           $table->string('stock_price');
           $table->string('prdoduct_image');
           $table->bigInteger('product_id')->unsigned();
           $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
           $table->string('in_stock')->default("off");
            $table->string('is_active')->default("off");
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
        Schema::dropIfExists('product_inventories');
    }
};
