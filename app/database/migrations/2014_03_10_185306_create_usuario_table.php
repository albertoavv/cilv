<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	       Schema::table('usuario', function($table)
		{
			$table->create();

			$table->increments('id');

			$table->string('nombre');
                        $table->string('apellidos');
			$table->string('email');
			$table->string('password');
                        $table->string('tipo');

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
		Schema::drop('usuario');
	}

}
