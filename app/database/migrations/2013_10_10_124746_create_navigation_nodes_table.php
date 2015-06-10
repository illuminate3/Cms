<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationNodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigation_nodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title')->nullable();
			$table->text('description')->nullable();
			$table->integer('page_id')->nullable();
			$table->integer('container_id')->nullable();
			$table->string('link_class')->nullable();
			$table->string('icon_class')->nullable();
			$table->text('params')->nullable();

			$table->integer('parent_id')->nullable();
			$table->integer('lft')->nullable();
			$table->integer('rgt')->nullable();
			$table->integer('depth')->nullable();

			$table->index('page_id');
			$table->index('container_id');

			$table->index('parent_id');
			$table->index('lft');
			$table->index('rgt');
			$table->index('depth');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('navigation_nodes');
	}

}
