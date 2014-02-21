<?php

use Illuminate\Database\Migrations\Migration;

class CreateEmails extends Migration {

	protected $softDelete = true;

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('urlshort')->create('emails', function($table)
		{
		    $table->increments('id');
		    $table->string('email');
		    $table->string('password');
		    $table->boolean('verified');
		    $table->timestamps();
		    $table->softDeletes();

		    $table->unique('email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('urlshort')->dropIfExists('emails');
	}

}