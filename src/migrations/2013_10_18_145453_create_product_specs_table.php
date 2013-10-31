<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSpecsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ka_product_specs', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('title');

            $table->string('language');

            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('ka_products')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ka_product_specs');
	}

}
