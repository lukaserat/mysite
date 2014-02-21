<nav>
  <div class="container">
    <ul class="nav nav-pills pull-right">
      <li class="@if(empty($active)) active @endif">
        <a href="{{ URL::to('uh/') }}">Home</a>
      </li>
      <li class="@if($active == 'what') active @endif">
        <a href="{{ URL::to('uh/h/what') }}" class="has-tooltip" title="Let's talk about url shortening." alt="Let's talk about urlshortening.">What?</a>
      </li>
      <li class="@if($active == 'why') active @endif">
        <a href="{{ URL::to('uh/h/why') }}" class="has-tooltip" title="Let's see why urlshort is the best." alt="Let's investigate why it is so popular.">Why?</a>
      </li>
      <li class="@if($active == 'how') active @endif">
        <a href="{{ URL::to('uh/h/how') }}" class="has-tooltip" title="Let's try and be amazed, don't forget to join to us to do and know more." alt="Let's try and be amazed, don't forget to join to us to do and know more.">How?</a>
      </li>
    </ul>
  </div>
</nav>