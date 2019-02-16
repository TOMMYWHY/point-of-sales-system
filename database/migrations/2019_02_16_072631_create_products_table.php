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
            $table->string( 'name',100);
            $table->string( 'trait');
            $table->string( 'desc');
            $table->unsignedInteger( 'category_id')->default( 1);
	        $table->decimal( 'price',12,2)->default( 0.00);
	        $table->decimal( 'discount',12,2)->default( 0.00);
	        $table->integer( 'stock')->default( 0);
	        $table->unsignedInteger( 'brand_id')->default( 1);


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
