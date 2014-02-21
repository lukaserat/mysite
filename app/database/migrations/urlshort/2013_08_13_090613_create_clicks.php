<?php

use Illuminate\Database\Migrations\Migration;

class CreateClicks extends Migration {

	protected $softDelete = true;
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('urlshort')->create('clicks', function($table)
		{
		    $table->increments('id');
		    $table->integer('url_id')->unsigned();
		    $table->string('ip', 30);
		    $table->string('browser');
		    $table->timestamps();
		    $table->softDeletes();

		    $table->foreign('url_id')->references('id')->on('urls');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('urlshort')->dropIfExists('clicks');
	}

}