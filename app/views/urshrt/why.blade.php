@extends('urshrt.layout')
@section('meta')
<title>Why UrlShort? | Pinoy WebDeveloper</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="getting to know each other is the best way to make love on urlshort.">
<meta name="author" content="joseph lacerna">
@stop
@section('head')
@stop
@section('content')
@include('urshrt.nav-guest', array('active'=>'why'))
<header>
  <div class="container">
    <div class="page-header">
      <h1>why urlshort? <small>Let's see why urlshort is the best.</small></h1>
      <p>Do awesome things on your very very long url! See explanations below.</p>
    </div><!-- /page-header -->
  </div>
</header><!-- /header -->

<section>
  <div class="container">
    <div class="row-fluid">
      <div class="span8">
        <h2>urlshort top 4 reasons why</h2>
        <p>Read the top 4 reasons why use the urlshort of the pwd!</p>
        <ol>
          <li><a href="#customizable" title="customizable">Customizable!</a></li>
          <li><a href="#update-your-links" title="update your links">Update your Links</a></li>
          <li><a href="#geographical-reporting" title="geographical reporting">Geographical reporting</a></li>
          <li><a href="#set-expiration" title="set expiration">Set Expiration</a></li>
          <li><a href="#made-by-pilipino" title="Made by Pilipino - (for Pilipino out there, please support urlshort! :D)">Made by Pilipino - (for Pilipino out there, please support urlshort! :D)</a></li>
        </ol>
        <br />
        <h2 id="customizable">Customizable</h2>
        <p>Are you tired of <code>/UHSFF</code> or <code>/cycpp8</code>? What does they mean? Ok, it is because of the concept <em>shortening</em>, but can we put something like, <code>/i-miss-you</code> or maybe this <code>/i-hate-you-read-this</code>. Sounds very interesting, right?</p>
        <p>Urlshort let's you do this thing. But some of the good news always have a bad news, but not very bad this time. Because of assumingly this will cause a huge number of application, we will imagine that will happen, we come up to the point that we will add special wording(from you) at the end or beginning of your wonderful thoughts that you want to put as the replacement of your very long url. Something like, <code>/by-joseph|i-love-you-so-much</code> or this one <code>/i-hate-you|from-joseph</code>. Sound exciting, right? All of these can be configured, you have the options. Let be yourself the boss of your links!</p>
        <h2 id="update-your-links">Update your Links</h2>
        <p>Somehow you'll find yourself that you published lot of links from your previous site and don't know how to redirect them to your new one, but it can be done on a some sort of server redirection. If you know how to deal with it. But for a typical person it seems to be dramatically a problem. If you managed to have your links within urlshort you are in a good hand. Suprisingly we do have the feature of letting you to replace or update your links before search engines tagged them as 404, that's a bad score for SEO, right? So better check-in your links with us and be worry-free evrytime you moved your pages.</p>
        <h2 id="geographical-reporting">Geographical reporting</h2>
        <p>Do you know where your links are popular? For a businessman or a business starter man that have website, this is a big issue. They want to see where to put their market. They don't want to lose that oppurtunity. Because of that, we upgraded the statistics we offer by simply plotting your clickers on the map. Where it is being clicked, if you know where your concentration of audience then it is easy to formulate a strategy, right?</p>
        <h2 id="set-expiration">Set Expiration</h2>
        <p>Sometimes you wish you didn't link it. Or maybe you decided to remove that link but you forgot the site or page you linked it. That is truly sad, but with the urlshort it is just almost as easy as counting ABC. Let your hands do the on and off. Put your links to dead or just put some life span on it. Maybe 1 month, 2 days or even a split of second. I think that would be none sense for a link to live for just 2 seconds. But you can do that.</p>
        <h2 id="made-by-pilipino">Made by Pilipino - (for Pilipino out there, please support urlshort! :D)</h2>
        <p>This is the most important reason for all those Pilipino there. You must, I'll say it as a must and not an option, to support the 'gawang Pinoy!'. Just kidding, but if I were you I should be using this. :)</p>
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