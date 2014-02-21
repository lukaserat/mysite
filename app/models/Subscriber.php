<?php

class Subscriber extends Eloquent {

	protected $connection = 'mysql';
	
	protected $guarded = array('id');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subscriber';
	

}