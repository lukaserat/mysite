<?php
class UrshrtController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controller for not long url request
	|--------------------------------------------------------------------------
	|
	*/
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function getTest()
	{
		$urlShort = UrlHelper::generateShortUrl('http://www.cashcashpinoy.com/#!/cashcashpinoy/home-and-decor');
		echo $urlShort;
	}

	public function getIndex()
	{
		return View::make('urshrt.index');
	}

	public function postLongUrl()
	{
		// $rules = array('longurl' => 'required|url|active_url');
		$rules = array('longurl' => 'required|url');
		$messages = array(
		    'required'   => 'We don\'t get your very very long url. It looks like you don\'t put it there.',
		    'active_url' => 'I think you better look for your very long url on the internet. It looks like it is a dead link. Google hate that.',
		    'url'        => 'Oops! We are only accepting a URL, try to format it like "http://very.very/long?url=is+what+i\'m+typing".'
		);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if ($validator->fails())
		{
		   return Redirect::back()->withErrors($validator)->withInput();
		}
		;
		//prepare the url
		$urlShort = UrlHelper::generateShortUrl(Input::get('longurl'));
		$result = explode('_', $urlShort);

		if(count($result) > 1)
		{
			// insert new
			$url = new Url(array(
				'url_long'  => base64_encode(Input::get('longurl')),
				'url_short' => $result[0],
				'degree'    => $result[1]
			));

			// get the user
			if( Auth::guest() )
			{
				// use the default user
				$user = Email::where('email', '=', 'urlshort@josephlacerna.com')->first();
			}

			// encode the url
			$user->urls()->save($url);
		}

		$data = array(
	        'url'     => Input::get('longurl'),
	        'short'   => $result[0],
	    );
	    Mail::send('emails.urlshort.template-01', $data, function($message)
	    {
	        $message->from('me@josephlacerna.com', 'Urlshort');
	        $message->to('me@josephlacerna.com', 'Me')->subject('Contact Us Form');
	    });

		return Redirect::back()->with(array('shortUrl'=>$result[0]))->withInput();
	}

	public function getWhat()
	{
		return View::make('urshrt.what');
	}

	public function getWhy()
	{
		return View::make('urshrt.why');
	}

	public function getHow()
	{
		return View::make('urshrt.how');
	}

}