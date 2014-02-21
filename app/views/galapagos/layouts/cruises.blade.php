<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
        <meta name="robots" content="noindex, nofollow">
        <title>Galapagos Cruises</title>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        

        <!-- Google Fonts
        ================================================== -->
        <link href='http://fonts.googleapis.com/css?family=Actor|Lato|Droid+Sans' rel='stylesheet' type='text/css'>

        <!-- CSS
        ================================================== -->
        
        <link href="{{{ asset('assets/galapagos/cruises/bootstrap/css/bootstrap.min.css') }}}" rel="stylesheet">
        <link rel="stylesheet" href="{{{ asset('assets/galapagos/cruises/bootstrap/css/bootstrap-responsive.min.css') }}}">
        <link href="{{{ asset('assets/galapagos/cruises/bootstrap/css/nav.css') }}}" rel="stylesheet">
        <link rel="stylesheet" href="{{{ asset('assets/galapagos/cruises/bootstrap/css/site.css') }}}" type="text/css" />
        <!-- FONT AWESOME
        ================================================== -->
        <link href="{{{ asset('assets/galapagos/cruises/font-awesome/css/font-awesome.css') }}}" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicons
        ================================================== -->

    </head>

<body>



    <!-- HEADER
    ================================================== -->
    <header id="header">

        <!-- HEADER
        ================================================== -->
        <div class="container-fluid page-content" id="top-header">
        <?php include_once("contents/header.php") ?>
        </div>
        

        <!-- NAVIGATION
        ================================================== -->
        <div class="container-fluid page-content" id="navigation">
        <?php include_once("contents/navigation.php") ?>
        </div>
        
        <!-- SLIDER
        ================================================== -->
        <div class="container-fluid page-content">
        <?php include_once("contents/slider.php") ?>
        </div>
        
        <!-- HEADER PROMOTIONS
        ================================================== -->
        <div class="container-fluid page-content">
        <?php include_once("contents/header_promotions.php") ?>
        </div>
    </header><!-- /header -->

    <!-- CONTENT
    ================================================== -->
    <section id="content">
        <!-- BODY
        ================================================== -->
        <div class="container-fluid page-content">
        <?php include_once("contents/body.php") ?>
        </div>

        <!-- THE QUASAR EXPERIENCE
        ================================================== -->
        <div class="container-fluid quasar-experience-wrapper">
        <?php include_once("contents/the-quasar-experience.php") ?>
        </div>

        <!-- TESTIMONIALS
        ================================================== -->
        <div id="testimonials-header-bg"></div>
        <div class="container-fluid page-content">
        <?php include_once("contents/testimonials.php") ?>
        </div>

        <!-- CALL OUR BRAND
        ================================================== -->
        <div id="call-our-brand-bg"></div>
        <div class="container-fluid page-content">
        <?php include_once("contents/call-our-brand.php") ?>
        </div>

        <!-- NEWSLETTER SIGN-UP
        ================================================== -->
        <div class="container-fluid page-content">
        <?php include_once("contents/newsletter-signup.php") ?>
        </div>
    </section><!-- #/content -->


    <!-- FOOTER
    ================================================== -->
    <footer id="footer">


        <!-- FOOTER PROMOTIONS
        ================================================== -->
        
        <?php /*
        <div class="container-fluid">
        <?php include_once("contents/footer_promotions.php") ?>
        </div> */ ?>
        

        <!-- QUICK LINKS
        ================================================== -->
        
        <div class="container-fluid page-content">
        <?php include_once("contents/quick_links.php") ?>
        </div>
        

        <!-- FOOTER
        ================================================== -->
        
        <div class="container-fluid page-content">
        <?php include_once("contents/footer.php") ?>
        </div>
        

    </footer><!-- /footer -->



<!-- Javascripts
================================================== -->

<script src="bootstrap/js/jquery.v1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1734696-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- make all subjects same in height -->
<script type="text/javascript">
var h = 0;
jQuery(document).ready(function($) {
    // for thumbnails
    h = 0;
    jQuery(".body-content .content-text").each(function(){
        if(h <= jQuery(this).height()){
            h = jQuery(this).height();
        }
    });
    jQuery(".body-content .content-text").css("height", h+"px");

    // for testimonials
    h = 0;
    jQuery(".testimonials .container-fluid").each(function(){
        if(h <= jQuery(this).height()){
            h = jQuery(this).height();
        }
    });
    jQuery(".testimonials .container-fluid").css("height", h+"px");    

    // for footer promotions
    // h = 0;
    // jQuery(".footer-promotions .footer-promotions-content").each(function(){
    //     if(h <= jQuery(this).height()){
    //         h = jQuery(this).height();
    //     }
    // });
    // jQuery(".footer-promotions .footer-promotions-content").css("height", h+"px"); 

    // for quick links
    h = 0;
    jQuery(".quick-links .content .span3").each(function(){
        if(h <= jQuery(this).height()){
            h = jQuery(this).height();
        }
    });
    jQuery(".quick-links .content .span3").css("height", h+"px");

    // jQuery("#header").backstretch("bootstrap/img/bg.jpg");
    
});
</script>
<!-- Bootstrap -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery(".footer-links-image").tooltip();

    jQuery("#main-slider").carousel({ interval: 3200 });
});
</script>

</body>

</html>