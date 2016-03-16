<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelTaskUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rel_task_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_cpf', 15)->unique();
			$table->foreign('user_cpf')->references('cpf')->on('users');
			$table->integer('task_id')->unsigned();
			$table->foreign('task_id')->references('id')->on('tasks');
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
		Schema::drop('rel_task_users');
	}

}
