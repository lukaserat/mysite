<?php

class SiteMapController extends BaseController {

	private $routes = array(
		"portfolio",
		"blog",
		"uh"
	);

	/*
	|--------------------------------------------------------------------------
	| Sitemap Controller
	|--------------------------------------------------------------------------
	|
	| This will handle the automation of sitemap generator
	|
	*/

	public function getGenerate()
	{
		$urls = "";
		foreach ($this->routes as $route) {
			$urls .= ""
				. "<url>\n"
				. "<loc>".URL::to($route)."</loc>\n"
				. "<lastmod>".date('Y-m-d')."</lastmod>\n"
				. "<changefreq>daily</changefreq>\n"
				. "<priority>0.8</priority>\n"
				. "</url>\n"
				;
		}
		$sitemap = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
		    . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n"
		    . $urls
		    . '</urlset>';

		$response = Response::make($sitemap, 202);
		$response->header('Content-Type', "application/xml");
		return $response;
	}

}