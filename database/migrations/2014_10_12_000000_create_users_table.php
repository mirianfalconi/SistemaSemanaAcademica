<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->string('cpf', 15)->unique();
			$table->string('nome', 45);
			$table->string('email', 45)->unique();
			$table->string('telefone', 15);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
