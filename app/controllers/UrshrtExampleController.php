<?php

class UrshrtExampleController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controller for not long url request
	|--------------------------------------------------------------------------
	|
	*/

	public function getCustomizedUrl()
	{
		return View::make('urshrt.example.customized-url');
	}

}