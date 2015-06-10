<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('layout_id')->nullable();
			$table->integer('page_id')->nullable();
			$table->integer('section_id')->nullable();
			$table->integer('block_id')->nullable();
			$table->string('controller')->nullable();
			$table->text('params')->nullable();
			$table->integer('position')->nullable();
			$table->smallInteger('global')->nullable();

			$table->index('layout_id');
			$table->index('page_id');
			$table->index('section_id');
			$table->index('block_id');
			$table->index('position');
			$table->index('global');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('content');
	}

}
