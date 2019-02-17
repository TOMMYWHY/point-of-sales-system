<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer( 'customer_id')->default(0);
//            $table->string( 'customer_name')->default( 'walk_in');
//	        $table->string( 'customer_phone');
//	        $table->string( 'email');
//	        $table->integer( 'pin_code');

	        $table->string( 'issue');
	        $table->text( 'desc');
	        $table->integer( 'product_id');
	        $table->decimal( 'price',12,2)->default( 0.00);
	        $table->integer( 'status')->default( 0);
	        $table->text( 'comment');
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
        Schema::dropIfExists('tasks');
    }
}
