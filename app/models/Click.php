<?php

class Click extends Eloquent {

	protected $connection = 'urlshort';
	
	protected $guarded = array('id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clicks';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

	/**
	 * Defining the inverse on One to Many at Url
	 *
	 * @return string
	 */
	public function url()
    {
        return $this->belongsTo('Url', 'url_id');
    }

	

}