@extends('urshrt.layout')
@section('meta')
<title>UrlShort | Pinoy WebDeveloper</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="urlshort is a url shortening service on internet that aim is to help internet user specially non-tech people to make their links simple and clean.">
<meta name="author" content="joseph lacerna">
@stop
@section('head')
@stop
@section('content')
@include('urshrt.nav-guest', array('active'=>''))
<header>
  <div class="container">
    <div class="page-header">
      <h1>urlshort</h1>
      <p>Be amazed of shortening your URL and maximize the advantage it offers to you. Lets not ruin our post with so very very long URLs. Life is simple, let's make them simple as counting ABC.</p>
    </div><!-- /page-header -->
  </div>
</header><!-- /header -->

<section class="form">
  <div class="container">
    <div class="row-fluid text-center">
      <div class="span8 well offset2">
        {{ Form::open(array('url' => 'uh/long-url')) }}
        <h4>Paste here your very very long URL here, and see the magic.</h4>
        <fieldset class="control-group 
        @if($errors->first('longurl')) error @endif
        @if(Session::has('shortUrl')) success @endif
        ">
		<div class="input-append">
          <input class="input-xxlarge" name="longurl" type="text" value="{{ Input::old('longurl', '') }}">
          <button class="btn" type="submit">Go!</button>
        </div>
        @if($errors->first('longurl'))
        <span class="help-inline">{{ $errors->first('longurl') }}</span>
        @endif
        @if(Session::has('shortUrl'))
        <span class="help-inline">short url: <a href="{{ Url::to('uh/'.Session::get('shortUrl')) }}" title="">{{  Url::to('uh/'.Session::get('shortUrl')) }}</a></span>
        @endif
        </fieldset>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</section><!-- /form -->

<br>
<section class="description">
  <div class="container">
    <div class="row-fluid">
      <div class="span10 offset1">
        <ul class="thumbnails">
          
          <li class="span4">
            <div class="thumbnail text-center">
              <div class="icon-holder">
                <i class="icon-heart img-circle"></i>
              </div>
              <h3>Shorten or Customize</h3>
              <p>Here, aside fromt the typical shortening of your url you can also replace the very very long url to a words that you want.</p>
              <a href='x/customized-url' class="btn btn-primary">See Some Example</a>
            </div>
          </li><!-- /Shorten or Customize -->
          <li class="span4">
            <div class="thumbnail text-center">
              <div class="icon-holder">
                <i class="icon-bullhorn img-circle"></i>
              </div>
              <h3>Clicks Popularity</h3>
              <p>See your links performance. From simple reporting to geographical view. Be guided and position your links to your major audience.</p>
              <a href='x/customized-url' class="btn btn-primary">Learn and Know More</a>
            </div>
          </li><!-- /Clicks Popularity -->
          <li class="span4">
            <div class="thumbnail text-center">
              <div class="icon-holder">
                <i class="icon-briefcase img-circle"></i>
              </div>
              <h3>Manage Links</h3>
              <p>Control your links. Put a sort of expiration, update the very long url and let your clickers be notified.</p>
              <a href='x/customized-url' class="btn btn-primary">Join Us Now! It is free!</a>
            </div>
          </li><!-- /Clicks Popularity -->
        </ul>
      </div>
    </div>
  </div>
</section>
@stop
@section('footer')
@stop