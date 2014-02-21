<!DOCTYPE html>
    <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Facebook | Test</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
        <div class="container">
            <div class="page-header">
                <h1>Facebook Feed</h1>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="facebook-feed-container" style="position:relative; display: block;">
                        <div id="fb-root" style="position:absolute; display: block; min-height: 100px;width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
          window.fbAsyncInit = function() {
          FB.init({
            appId      : '290097834480437',
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });

          // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
          // for any authentication related change, such as login, logout or session refresh. This means that
          // whenever someone who was previously logged out tries to log in again, the correct case below 
          // will be handled. 
          FB.Event.subscribe('auth.authResponseChange', function(response) {
            // Here we specify what we do with the response anytime this event occurs. 
            if (response.status === 'connected') {
              // The response object is returned with a status field that lets the app know the current
              // login status of the person. In this case, we're handling the situation where they 
              // have logged in to the app.
              testAPI();
            } else if (response.status === 'not_authorized') {
              // In this case, the person is logged into Facebook, but not into the app, so we call
              // FB.login() to prompt them to do so. 
              // In real-life usage, you wouldn't want to immediately prompt someone to login 
              // like this, for two reasons:
              // (1) JavaScript created popup windows are blocked by most browsers unless they 
              // result from direct interaction from people using the app (such as a mouse click)
              // (2) it is a bad experience to be continually prompted to login upon page load.
              FB.login();
            } else {
              // In this case, the person is not logged into Facebook, so we call the login() 
              // function to prompt them to do so. Note that at this stage there is no indication
              // of whether they are logged into the app. If they aren't then they'll see the Login
              // dialog right after they log in to Facebook. 
              // The same caveats as above apply to the FB.login() call here.
              FB.login();
            }
          });
          };

          // Load the SDK asynchronously
          (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
          }(document));

          // Here we run a very simple test of the Graph API after login is successful. 
          // This testAPI() function is only called in those cases. 
          function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/376061168966/feed', function(response) {
              console.log(response);
            });
          }
        </script>

        <!--
          Below we include the Login Button social plugin. This button uses the JavaScript SDK to
          present a graphical Login button that triggers the FB.login() function when clicked. -->

        <fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
    </body>
</html>
