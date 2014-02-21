<?php
class UrlHelper {

	public static function generateShortUrl($longUrl)
	{
		$user = Email::where('email', '=', 'urlshort@josephlacerna.com')->first();

		$url = $user->urls()-> where('url_long', '=', base64_encode($longUrl))
		-> first();

		// if already been there, get it
		if(!empty($url)) return $url->url_short;
		
		// if new, generate
		return self::convertLongUrl($longUrl);

	}

	public static function convertLongUrl($longUrl)
	{
		// we must generate a 5 maximum alphanumeric character
		// first try: parse the url
		$now = strtotime('now');
		$url_parsed = parse_url($longUrl);
		$scheme = empty($url_parsed['scheme'])  ? str_random(1) : substr($url_parsed['scheme'], 0, 1);
		$host = empty($url_parsed['host'])  ? str_random(2) : substr(str_replace('www.', '', $url_parsed['host']), 0, 2);
		$query = empty($url_parsed['query'])  ? str_random(1) : substr($url_parsed['query'], 0, 1);
		$last = str_random(1);

		$code = $scheme.$host.$query.$last;
		$exist = Url::where('url_short', '=', $code)->first();
		if(empty($exist)) return $code."_00";

		// second try: date today
		$dayName   = substr(date('D',$now), 0, 1);
		$monthName = substr(date('M',$now), 0, 1);
		$antePost  = date('A',$now); // 2
		$time = substr(date('i', $now), 1, 1);
		$code = $dayName.$monthName.$antePost.$time;
		$exist = Url::where('url_short', '=', $code)->first();
		if(empty($exist)) return $code."_10";

		// third try: random letters
		$try = 1;
		while($try <= 3)
		{
			$exist = Url::where('url_short', '=', str_random(5))->first();
			if(empty($exist)) return $code."_2".$try;
			$try++;
		}

		// fourth try: random letters(3) and a number(2)
		$try = 1;
		while($try <= 3)
		{
			$exist = Url::where('url_short', '=', str_random(3).rand(0,9).rand(0,9))->first();
			if(empty($exist)) return $code."_3".$try;
			$try++;
		}

		// fifth try: Hash key
		$try = 1;
		while($try <= 3)
		{
			$hash = Hash::make($now);
			$exist = Url::where('url_short', '=', substr($hash, rand(0, strlen($hash)-6), 6))->first();
			if(empty($exist)) return $code."_4".$try;
			$try++;
		}

	}

	public static function getLongUrl($short_url)
	{
		$url = Url::where('url_short', '=', $short_url)->first();
		if (!empty($url)) return $url;
		return false;
	}

	public static function logClicker(Url $url)
	{
		$click = new Click(array(
			'ip'       => Request::server('SERVER_ADDR'),
			'browser'  => Request::server('HTTP_USER_AGENT'),
		));
		$url->clicks()->save($click);
	}

}