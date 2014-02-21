@extends('urshrt.layout')
@section('meta')
<title>What is UrlShort? | Pinoy WebDeveloper</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="urlshort is really a fantastic way to do url shortening, be part and help the community spreading the awesomeness across the world.">
<meta name="author" content="joseph lacerna">
@stop
@section('head')
@stop
@section('content')
@include('urshrt.nav-guest', array('active'=>'how'))
<header>
  <div class="container">
    <div class="page-header">
      <h1>how to..urlshort? <small>Let's try and be amazed, don't forget to <a href="" title="join to us now!">join to us</a> to do and know more.</small></h1>
      <p>If you are reading this now, you almost in love with urlshort. Reading this article will trully boost the feeling you felt on the first time after reading our site name <strong>"urlshort"</strong>.</p>
    </div><!-- /page-header -->
  </div>
</header><!-- /header -->

<section>
  <div class="container">
    <div class="row-fluid">
      <div class="span8">
        <h2>url shortening is free!</h2>
        <p>
          We will keep this section 2 sentences only. Urlshort is free of charge!
        </p>
        <br>
        <h2>join us to let your links know that you are the boss!</h2>
        <p>Signing to us helps you to manage your links and to maximize the benefits of having urlshort on the internet. Put your links in control. Replace them, put them dead or even let them live on s specific time are just some of the features you can have by signing in to us. Render your time managing your links can consecutively see your self avoiding some risks. Seeing your links clickers is just like having a business strategist or analyst. Invest on the benefits of being a member, don't lose your potentials. It just a one click away from the button below.</p>
        <a class="btn btn-success" href="#">Become a Memeber</a>
        <br>
        <br>
        <h2>still have questions?</h2>
        <p>It is ok. Some of us is hard to get. Not because we are dull it is just we need to be wise. If you still have so questions, feel free to send us feedback using our sleek form below. Or maybe you can find your answers at our <a href="#" class="has-tooltip" title="see our knowledge based articles to find out some useful contents there.">knowledge based articles</a></p>
      </div>
      <div class="span4 text-center">
        <div class="row-fluid">
          @include('urshrt.sidebar.content-01')
        </div>
        <br />
        <div class="row-fluid">
          @include('urshrt.sponsor.sidebar')
        </div>
      </div>
    </div>
  </div>
</section>

<br/>
@stop
@section('footer')
@stop