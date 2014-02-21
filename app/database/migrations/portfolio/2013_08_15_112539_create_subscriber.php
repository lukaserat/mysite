<?php

use Illuminate\Database\Migrations\Migration;

class CreateSubscriber extends Migration {

	protected $softDelete = true;

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('mysql')->create('subscriber', function($table)
		{
		    $table->increments('id');
		    $table->string('email');
		    $table->string('ip', 30);
		    $table->string('browser');
		    $table->integer('send_notifications')->default(1);
		    $table->timestamps();
		    $table->softDeletes();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('mysql')->dropIfExists('subscriber');
	}

}