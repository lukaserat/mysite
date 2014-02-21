<?php

use Illuminate\Database\Migrations\Migration;

class CreateUrls extends Migration {

	protected $softDelete = true;

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('urlshort')->create('urls', function($table)
		{
		    $table->increments('id');
		    $table->integer('email_id')->unsigned();
		    $table->string('url_long');
		    $table->string('url_short');
		    $table->timestamp('expiration')->default(date('Y-m-d H:i:s', strtotime('+1 month')));
		    $table->integer('degree')->default(0);
		    $table->timestamps();
		    $table->softDeletes();

		    $table->unique('url_short');
		    $table->unique(array('url_long', 'email_id'));

		    $table->foreign('email_id')->references('id')->on('emails');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('urlshort')->dropIfExists('urls');
	}

}