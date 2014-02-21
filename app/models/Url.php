<?php

class Url extends Eloquent {

	protected $connection = 'urlshort';

	protected $guarded = array('id');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'urls';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('');

	/**
	 * Get the long url of the corresponding short url
	 *
	 * @return string
	 */
	public function getLongUrl($url='')
	{
		if(!empty($url))
		{
			$url = $this->where('url_short', '=', $url)->first();
		}

		return false;
	}

	/**
	 * Defining the inverse on One to Many at Email
	 *
	 * @return string
	 */
	public function email()
    {
        return $this->belongsTo('Email', 'email_id');
    }

	/**
	 * One to Many relationship on Click
	 *
	 * @return string
	 */
	public function clicks()
	{
		return $this->hasMany('Click', 'url_id');
	}

}