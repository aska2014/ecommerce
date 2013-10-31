<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ka_categories', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('ka_categories')->onDelete('CASCADE');

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
		Schema::drop('ka_categories');
	}

}
