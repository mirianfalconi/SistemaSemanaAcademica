<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {


	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('curso');
			$table->string('professor');
			$table->string('dia');
			$table->string('horario');
		});
	}

	public function down()
	{
		Schema::drop('tasks');
	}

}
