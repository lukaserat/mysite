<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// handle sitemap.xml
Route::controller('sitemap', 'SiteMapController');

// handle test
Route::get('test', function(){

    $data = array(
        'name'    => 'John Doe',
        'email'   => 'johndoe@gmail.com',
        'content' => 'Sample news letter',
        'site'    => 'josephlacerna.com'
    );
    Mail::send('emails.contact-us-form.response-01', $data, function($message)
    {
        $message->from('me@josephlacerna.com', 'Contact Us');
        $message->to('me@josephlacerna.com', 'Me')->subject('Welcome!');
    });

});

Route::get('test2', function(){
    return View::make('emails.contact-us-form.response-01', array(
        'site'    => 'josephlacerna.com/urshrt',
        'name'    => 'John Doe',
        'email'   => 'johndoe@gmail.com',
        'content' => 'Sample news letter',
    ));
});

// handle 404
Route::get('404', array('as'=>'page-404', function(){
    return Redirect::to('/404/index.php');
}));

// handle vcard download
Route::get('render-vcard.png', function(){

    $response = Response::make(base64_decode("iVBORw0KGgoAAAANSUhEUgAAAPUAAAD1AQMAAACyfyEmAAAABlBMVEX///8AAABVwtN+AAAD40lEQVRYhc1ZO46sMBBsRODQN1guMoJrESCBRDDXAnER7w0cOkD0q2qz8zbbyONBYmeGctDbn+rqRuSPa1bVZVCRh/jUaByHEOdLZJIOSCyOjyL+qer1lCiDRrcHv2qQeetEmg/Ah8svLewfgjjYPV943nd+3Tqn+3vw58Y4BZ6J8x6kxfep/xx8aQP82Pk0IKRXp2cvcOebcMbvCNHBRsRORuTY1ATm1//4VsSZ/8THR+efOz4ZW3zCf6/6qInb1apHjeKmn0UX1OZ6/SKJgvisl9cNtdfCNsQ3NcEr/ChNSFNfHx8fDWMLH2qcN8SadvcSyQ8t+asw7s5OwQ+aYB+5iUGbGvgSNbDuH4AfgfGV+VDkl/qEvG8v4y/UgFTH57Nh/vsn+V3g16uL5Fr4OFl9lsaP7+gQW8Z4IYfhjLD28HvV+rg7wO8aVHmGtht/GYcZP5TG59P4AXUgfkFeIf+pFyJSDrVZH+dz9B1yhKD3sf+p8cOPfimMO/xBDZo+IHdr5geed+TQ2jj7SzJbc49eENd1V5mG4M6+Pm61yN7z6CLOitWB8Rd4YiuPQ+++4ou6sx6zZg2T2P+q47R76xBjIYazzEHYf/fo0jiee/Y+sf6iv/hBlaVZHd8a8jk4IVDDoB6Ch/aMrc0I9XF5GJfHHGtlHeQaxXfL/8L4fH6B49V8yNlgzrOTB+Y+AXfbl/Uf9j3yKznC/p97fimO0z78dtAj7rYNcdSF9ln+VcbVLuIRs4syttSeNre/Abe+8sMRGuxuie+a55PaeGt2Uv8qtIHtMCTfaRo+AIdWGXNtmn7g7CDsP+iD2b9lcUf9S1dBA3N2WvL85NFj7vyvi8vwHeWRdzuc1RM4AbOvP8ll1r/L4rn/BnIEeYE2KmYTzCeSJtsv1cWhzxll4wTuB8AVflU1+5cPwIW2Q1NhfrDZnP5tUQcn9whvwK2fkBe2LutyaCjisNedQ32c8eXukhod3EXtiXPK/RNKozxuFzTCQl2nplOMM6Cf5HVVxEf5Mm1AjZDuHZTpT/TnxfZ3ZfHcc22/w9lbMANnfYL5hPxQG5+Z9/Ad9yjG89wPap5/W9sf1MUpUsZbR1BjkR9Mv6D/cb4qjWMu8Owt1L18Th9CH8RpuPVLbTzbzj0GuZ0zMPuO6d9liMVx6jjkFp5l/TRa7QXTv7SvNs6evLS2/+ZOV+bL9Iv+zAfVcb5fOVGf4Ffq49TbHPHqf2/BDyUnmDbnOyjuT88G/HDJZ+DksCO/N+Re7LQ9j7JPl8fv94PIJeV+WTfjJ+sz7a/3l7XwnP/Ud2p7KHt/wN3qhfrspTr+x/UPzkdTuCgWLZEAAAAASUVORK5CYII="), 202);

    $response->header('Content-Type', 'image/png');

    return $response;

});

// handle contact form
Route::post('send-letter', function(){

    $data = array(
        'name'    => Input::get('name', ''),
        'email'   => Input::get('email', ''),
        'content' => Input::get('message', ''),
        'site'    => 'josephlacerna.com'
    );
    Mail::send('emails.contact-us-form.template-01', $data, function($message)
    {
        $message->from('me@josephlacerna.com', 'Contact Us');
        $message->to('me@josephlacerna.com', 'Me')->subject('Contact Us Form');
    });

    Mail::send('emails.contact-us-form.response-01', $data, function($message)
    {
        $message->from('me@josephlacerna.com', 'Contact Us Form');
        $message->to(Input::get('email'), Input::get('name'))->subject('Thank you! | josephlacerna.com');
    });

    Subscriber::create(array(
        'email'    => Input::get('email'),
        'ip'       => Request::server('SERVER_ADDR'),
        'browser'  => Request::server('HTTP_USER_AGENT'),
    ));

    return 'SEND';
});

// get the root
Route::get('/', array('as'=>'portfolio',function()
{
    return Redirect::to('/portfolio');
}));


// get the blog
Route::get('pwd', function()
{
	return Redirect::to('/blog');
});

// handling blog
Route::group(array('prefix' => 'blog'), function()
{

    Route::get('admin', function()
    {
        return Redirect::to('/blog/wp-admin');
    });

    Route::get('wp-admin', function()
    {
        return Redirect::to('page-404');
    });

});

// handling urlshort
Route::any('urshrt', function(){
    return Redirect::to('/404/index.php?still_cooking=1&p=urlshort');
    // if (Auth::guest()) return Redirect::to('urshrt/h');
});
Route::any('uh', function(){
    if (Auth::guest()) return Redirect::to('uh/h');
});
Route::group(array('prefix' => 'uh'), function()
{   
    // handling the profile
    Route::controller('h', 'UrshrtController');

    Route::controller('x', 'UrshrtExampleController');

    // handle submitted conversion of guest user
    Route::post('long-url', 'UrshrtController@postLongUrl');


    Route::get('{shortUrl}', function($shortUrl)
    {
        // check for registered url short
        if (($url = UrlHelper::getLongUrl($shortUrl))===false) return Redirect::to('/uh');

        // log the clickers
        UrlHelper::logClicker($url);

        return Redirect::to(base64_decode($url->url_long));
        
    });

});

// handling faaizah
Route::get('faaizah', function(){

    return View::make('faaizah.layouts.home');

});

Route::group(array('prefix'=>'facebook'), function()
{
    Route::get('test', function()
    {
        return View::make('facebook.test');
    });
    Route::get('/', function()
    {
        return View::make('facebook.test');
    });
});
