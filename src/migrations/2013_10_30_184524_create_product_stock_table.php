<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('ka_product_stock', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('quantity');

            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('ka_products')->onDelete('CASCADE');

            $table->integer('stock_id')->unsigned();
            $table->foreign('stock_id')->references('id')->on('ka_stocks')->onDelete('CASCADE');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('ka_product_stock');
	}

}