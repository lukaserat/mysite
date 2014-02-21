@extends('urshrt.layout')
@section('meta')
<title>What is UrlShort? | Pinoy WebDeveloper</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="understanding the urlshort much deeper that will cause you to love it later.">
<meta name="author" content="joseph lacerna">
@stop
@section('head')
@stop
@section('content')
@include('urshrt.nav-guest', array('active'=>'what'))
<header>
  <div class="container">
    <div class="page-header">
      <h1>what is urlshort? <small>Let's talk about url shortening.</small></h1>
      <p>It is url shortening service on the internet that aim is to help you beautify your very very long links. That's the main objective, however sometimes we think that is not enough. So we put management tool here, all you need to do is join us to use it. Why not managing your links instead of just converting it. See how your links being clicked, from simple counting into geographical plotting.</p>
      <p>Converting or compressing the very long url into a short one is sometimes boring, why not replace it with a word that will give someone or your readers a smile. Put a thoughts on your links instead of unreadable very long url or simple random characters of the short url.</p>
    </div><!-- /page-header -->
  </div>
</header><!-- /header -->

<section>
  <div class="container">
    <div class="row-fluid">
      <div class="span8">
        <h2>Url Shortening according to <a href="http://en.wikipedia.org/wiki/URL_shortening" title="URL Shortening on wikipedia.com">Wikipedia</a></h2>
        <p>
          <blockquote>
            <strong>URL shortening</strong> is a technique on the World Wide Web in which a <strong>Uniform Resource Locator (URL)</strong> may be made substantially shorter in length and still direct to the required page. This is achieved by using an HTTP Redirect on a domain name that is short, which links to the web page that has a long URL. 
          </blockquote>
          <blockquote>
            This is especially convenient for messaging technologies such as Twitter and Identi.ca which severely limit the <strong>number of characters</strong> that may be used in a message.
          </blockquote>
          <blockquote>
            Other uses of URL shortening are to <strong>"beautify"</strong> a link, track clicks or disguise the underlying address.
          </blockquote>
          <em>Source: extracted from the article <code>URL shortening</code> in http://en.wikipedia.org/wiki/URL_shortening</em>
        </p>
        <br>
        <h2>Other url shortening services</h2>
        <p>This service is not kind of new, it has been developed by some of the genius out there. You can take a look on them, below are the well-known:</p>
        <ul>
          <li><a href="http://bit.ly" title="bit.ly">bit.ly</a> by bit.ly people</li>
          <li><a href="http://tinyurl.com" title="tinyurl.com">tinyurl.com</a> by tinyurl.com people</li>
          <li><a href="http://is.gd" title="is.gd">is.gd</a> by is.gd people</li>
          <li><a href="http://goo.gl" title="goo.gl">goo.gl</a> by google</li>
        </ul>
        <br>
        <h2>Why urlshort is different?</h2>
        <p>By the time you read this, I'm guessing that you already visit those sites above. We are all the same, but the difference is...I'll guess that soon you'll tell it to us. :)</p>
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