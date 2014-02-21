<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			Faaizah Movement
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Google Fonts
		================================================== -->
		<link href='http://fonts.googleapis.com/css?family=Lato|Diplomata|Montserrat+Alternates|Open+Sans' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<link href="{{{ asset('assets/faaizah/css/bootstrap.css') }}}" rel="stylesheet">
		<link href="{{{ asset('assets/faaizah/css/bootstrap-responsive.css') }}}" rel="stylesheet">



		<!-- FONT-AWESOME
		================================================== -->
		<link href="{{{ asset('assets/faaizah/font-awesome/css/font-awesome.css') }}}" rel="stylesheet">
		<!--[if lt IE 9]>
		<link href="{{{ asset('assets/faaizah/font-awesome/css/font-awesome-ie7.css') }}}" rel="stylesheet">
		<![endif]-->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/faaizah/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/faaizah/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/faaizah/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/faaizah/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/faaizah/ico/favicon.png') }}}">


		<style type="text/css" media="screen">
			.border-box{
				box-sizing: border-box;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
			}
			.no-boxshadow{
				-moz-box-shadow: 0px 0px 0px transparent;/*FF 3.5+*/
				-webkit-box-shadow: 0px 0px 0px transparent;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=90, Color=transparent)";/*IE 8*/
				box-shadow: 0px 0px 0px transparent;
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=90, Color=transparent);/*IE 5.5-7*/
			}
			.label-orange, 
			.badge-orange{
				background-color: #ff6203;
			}
			.label-paleorange, 
			.badge-paleorange{
				background-color: #F27820;
			}
			body{
				background-color: #f9f9f9;
			}
			header:first-child{
				min-height: 126px;
				padding-top: 10px;
			}
			.site-branding{
				position: absolute;
				z-index: 1;
			}
			.site-branding h1.site-title,
			.site-branding .site-logo{
				display: inline-block;
			}
			h1.site-title{
				font-family: 'Diplomata',cursive;
			    font-size: 18px;
			    line-height: 20px;
			    width: 191px;
			}
			.brand img{
				margin-top: -30px;
			}
			.navbar{
				margin-top: 15px;

			}
			.navbar-inner{
				background: none;
				padding-left: 0px;
				padding-right: 0px;
				border: none;
				-moz-border-radius: 0px;/*Firefox*/
				-webkit-border-radius: 0px;/*Safari, Chrome*/
				border-radius: 0px;
			}
			.nav-collapse .nav{
				margin: 10px 0px;
			}
			.navbar .nav > li{
				float: right;
			}
			.navbar .nav > li > a{
				margin: 0px 4px;
				-moz-border-radius: 4px;/*Firefox*/
				-webkit-border-radius: 4px;/*Safari, Chrome*/
				border-radius: 4px;
				padding: 8px 19px;
				font-family: 'Open Sans', sans-serif;
			}
			.navbar .nav > li > a:hover,
			.navbar .nav > li > a:focus,
			.navbar .nav > .active > a, 
			.navbar .nav > .active > a:hover, 
			.navbar .nav > .active > a:focus{
				color: #fff;
				background-color: #f27820;
				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=45, Color=#da6917)";/*IE 8*/
				text-shadow: 1px -1px 0px #da6917;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=45, Color=#da6917); /*IE 5.5-7*/
			}
			header#slider{
				height: 399px;
				background: url("assets/faaizah/img/site/slider-bg.jpg") no-repeat scroll center -2px #4AB5E0;
			}
			.carousel-inner > .item{
				height: 399px;
				overflow: hidden;
			}
			#services{
				min-height: 348px;
				background: #333 url(assets/faaizah/img/site/bg.png) center repeat;
				padding-top: 10px;
			}
			#services .row-fluid{
				margin-bottom: 30px;
			}
			#services .services-title{
				margin-top: -40px;
				margin-bottom: 40px;
				background: #fe8636; /* for non-css3 browsers */
				background: -moz-linear-gradient(top, #fe8636,  #f27820); /* for firefox 3.6+ */ 
				background: -webkit-gradient(linear, left top, left bottom, from(#fe8636), to(#f27820)); /* Safari 4+, Chrome */
				background: -webkit-linear-gradient(left top, left bottom, #fe8636, #f27820); /* Chrome 10+, Safari 5.1+, iOS 5+ */
				background: -o-linear-gradient(top, #fe8636,#f27820); /* Opera 11.10+ */
				background: -ms-filter:"progid:DXImageTransform.Microsoft.Gradient(StartColorStr=#fe8636, EndColorStr=#f27820, GradientType=0)";
				background: linear-gradient(to bottom, #fe8636,#f27820); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe8636', endColorstr='#f27820', GradientType='0'); /* for IE */

				-moz-border-radius: 5px;/*Firefox*/
				-webkit-border-radius: 5px;/*Safari, Chrome*/
				border-radius: 5px;

				/*width: 320px;*/

				padding: 4px 10px 8px;
				position:relative;

				-moz-box-shadow: 0px 2px 4px #333333;/*FF 3.5+*/
				-webkit-box-shadow: 0px 2px 4px #333333;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=180, Color=#333333)";/*IE 8*/
				box-shadow: 0px 2px 4px #333333;
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=180, Color=#333333);/*IE 5.5-7*/
			}
			#services .services-title:after{
				background: url("assets/faaizah/img/site/services-arrow.png") no-repeat scroll center 0px transparent;
			    content: "";
			    height: 16px;
			    left: 49.5%;
			    position: absolute;
			    width: 16px;
			    display:block;
			    bottom:-16px;
			}
			#services .services-title h1{
				font-size: 14px;
				line-height: 18px;
				font-family: 'Diplomata', cursive;
				font-weight: normal;
				text-transform: uppercase;
			}
			#services .thumbnail,
			#latest-news .thumbnail,
			footer #affiliates .thumbnail{
				border: 0px solid #000000;
				-moz-border-radius: 0px;/*Firefox*/
				-webkit-border-radius: 0px;/*Safari, Chrome*/
				border-radius: 0px;
			}
			#services .thumbnail .pull-left{
				margin-right: 10px;
			}
			#services .thumbnail h3{
				font-family: 'Montserrat Alternates',sans-serif;
			    font-size: 15px;
			    line-height: 18px;
			    margin-top: 2px;
			    color: #f9f9f9;
			}
			#services .thumbnail p{
				font-family: 'Open Sans',sans-serif;
			    font-size: 13px;
			    line-height: 20px;
			    color: #999999;
			}
			#services .thumbnail .content{
				overflow: hidden;
			}
			#body{
				background-color: #fff;
				padding: 20px 0px 10px;
				color: #666;
			}
			#body .media-heading.media-heading-first,
			footer .media-heading.media-heading-first{
				font-family: 'Open Sans',sans-serif;
				font-size: 18px;
				line-height: 20px;
				background: url("assets/faaizah/img/site/media-heading-orange.png") no-repeat scroll left bottom transparent;
				border-bottom: 1px solid #ddd;
				padding-bottom: 8px;
				margin-bottom: 18px;
			}
			#body .media-heading,
			footer .media-heading{
				font-family: 'Montserrat Alternates',sans-serif;
				font-size: 14px;
				line-height: 18px;
				margin-bottom: 10px;
				color: #487890;
			}
			#body .media .muted,
			footer .media .muted{
				font-family: 'Open Sans',sans-serif;
				font-size: 13px;
				line-height: 18px;
				color: #4878A8;	
			}
			.firstcharacter { 
				float: left;
			    font-family: Georgia;
			    font-size: 42px;
			    line-height: 27px;
			    padding-left: 0;
			    padding-right: 3px;
			    padding-top: 0;
			}
			#body .media .author,
			footer .media .author{
				font-family: 'Helvetica',sans-serif;
				font-size: 12px;
				line-height: 14px;
				color: #333;		
			}
			#body .unstyled li{
				padding-left: 4px;
				font-family: 'Arial', sans-serif;
			}
			#body .unstyled li > a{
				color: #666;
			}
			#latest-news .thumbnail h3{
				font-family: 'Open Sans', sans-serif;
				font-size: 18px;
			}
			#latest-news .thumbnail img{
				border-bottom: 4px solid #F27820;
			}
			#call-hotline{
				background-color: #f37821;
				border-width: 1px 0px;
				border-style: solid;
				border-color: #f48537;
				min-height: 118px;
			    overflow: hidden;
			    padding: 42px 10px;
			}
			#call-hotline h1{
				font-size: 20px;
				line-height: 24px;
				font-family: 'Montserrat Alternates', sans-serif;
				color: #fff;

				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=45, Color=#000000)";/*IE 8*/
				text-shadow: 1px -1px 0px #000000;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=45, Color=#000000); /*IE 5.5-7*/
			}
			#call-hotline button{
				font-family: 'Open Sans', sans-serif;
				color: #666;
			}
			#call-hotline button .icon-chevron-right{
				margin-right: 2px;
				margin-left: 8px;

				-moz-border-radius: 13px;/*Firefox*/
				-webkit-border-radius: 13px;/*Safari, Chrome*/
				border-radius: 13px;

			    font-size: 14px;
			    padding: 7px 8px 4px 9px;

			    -moz-box-shadow: inset 0px 1px 2px #cdcdcd;/*FF 3.5+*/
				-webkit-box-shadow: inset 0px 1px 2px #cdcdcd;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
				box-shadow: inset 0px 1px 2px #cdcdcd;

				background-color: #F5F5F5;
    			border-bottom: 1px solid #FFFFFF;
			}
			footer.container-fluid{
				padding: 42px 10px;
				background-color: #333;
				color: #999;
			}
			footer .media-heading.media-heading-first{
				font-size: 14px;
				line-height: 18px;
				border-bottom: 1px solid #555;
				color: #f9f9f9 !important;
				font-weight: normal;
			}
			footer .media .muted{
				font-family: 'Arial', sans-serif;
				font-size: 13px;
				line-height: 18px;
				color: #999;
			}
			footer .media-object{
				margin-bottom: 10px;
			}
			footer #featured-news .media-heading{
				color: #f37821;
				font-family: 'Arial', sans-serif;
			}
			footer #featured-news .media.featured-news-content{
				border-width: 1px 0px;
				border-style: solid;
				border-color: #434343 transparent #222222;
				margin: 0px;
				padding: 15px 0px 0px;
			}
			footer #featured-news article:last-child{
				border-bottom: none !important;
				margin-bottom: 15px !important;
			}
			footer #featured-news article:first-child{
				border-top: none !important;
				margin-top: 0px !important;
				padding-top: 0px !important;
			}
			footer #featured-news article:nth-child(2){
				padding-top: 0px !important;
				border-top: none !important	;
			}
			footer #affiliates .thumbnails .span12{
				margin: 0px 0px 8px;
				padding: 0px;
			}
			footer #affiliates .thumbnail.no-boxshadow{
				max-height: 134px !important;
				overflow: hidden !important;
			}
			footer #affiliates .thumbnail.no-boxshadow .image-mask{
				background-color: rgba(240,120,48, 0.54);
				overflow: hidden;
				position: absolute;
				width: 0px;
				height: 134px;
				z-index: 1;

				-webkit-transition: all 0.4s ease-in;/* Safari 3.2+, Chrome */
				-moz-transition: all 0.4s ease-in;/* Firefox 4-15 */
				-o-transition: all 0.4s ease-in;/* Opera 10.5-12.00 */
				transition: all 0.4s ease-in;/* Firefox 16+, Opera 12.50+ */
			}
			footer #affiliates .thumbnail.no-boxshadow h3,
			footer #affiliates .thumbnail.no-boxshadow p{
				color: #F9F9F9;
			    font-family: 'Open Sans',sans-serif;
			    font-size: 12px;
			    font-weight: normal;
			    line-height: 14px;
			    margin: 8px 10px 12px;
			}
			footer #affiliates .thumbnail.no-boxshadow h3{
				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=0, Color=#333)";/*IE 8*/
				text-shadow: 0px -1px 0px #333;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=0, Color=#333); /*IE 5.5-7*/

				font-size: 16px;
				line-height: 20px;
				font-family: 'Montserrat Alternates',sans-serif;
			}
			footer #affiliates .thumbnail.no-boxshadow img{
				background-color: #333;
			}
			#social-links li{
				padding-left: 10px;
				margin-bottom: 4px;
			}
			#social-links img{
				zoom: 1;
				filter: alpha(opacity=50);
				opacity: 0.6;
			}
			#social-links img,
			#social-links .media-heading{
				-webkit-transition: all 0.6s ease;/* Safari 3.2+, Chrome */
				-moz-transition: all 0.6s ease;/* Firefox 4-15 */
				-o-transition: all 0.6s ease;/* Opera 10.5-12.00 */
				transition: all 0.6s ease;/* Firefox 16+, Opera 12.50+ */
			}
			#social-links .social-link:hover img,
			#social-links .social-link:focus img{
				filter: alpha(opacity=100);
				opacity: 1;
			}
			#social-links .social-link:hover .media-heading,
			#social-links .social-link:focus .media-heading{
				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=135, Color=#000000)";/*IE 8*/
				text-shadow: 1px 1px 0px #000000;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=135, Color=#000000); /*IE 5.5-7*/
				color: #fff;

			}
			#social-links .media-heading{
				padding-top: 4px;
				color: #999;
				font-family: 'Open Sans', sans-serif;

			}

			/** slider captions **/
			.slider-captions .caption-01{
				font-family: 'Montserrat Alternates', sans-serif;
				font-weight: normal;
				color: #fff;

				font-size: 150%;
				line-height: normal;

				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=135, Color=#000000)";/*IE 8*/
				text-shadow: 1px 1px 0px #000000;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=135, Color=#000000); /*IE 5.5-7*/

			}
			.slider-captions .caption-02{
				font-family: 'Lato', cursive;
				font-weight: normal;
				background-color: #00aeef;
				color: #fff;

				font-size: 120%;
				line-height: normal;

				padding-bottom: 4px;

				-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=135, Color=#000000)";/*IE 8*/
				text-shadow: 1px 1px 0px #000000;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
				filter: progid:DXImageTransform.Microsoft.Shadow(Strength=0, Direction=135, Color=#000000); /*IE 5.5-7*/
			}
			/** slider 01 */
			#slider .slider-01{
				margin: 14px auto;
    			width: 83%;
			}
			#slider .slider-01 .span7{
				margin-top: 30px;
			}
			#slider .slider-01 .caption-01,
			#slider .slider-01 .caption-02{
				width: 90%;
				margin: 0px auto;
				text-align: center;
				font-size: 200%;
			}
			#slider .slider-01 .caption-01{
				margin: 60px auto 30px;
				width: 64%;
			}
			#slider .slider-01 .caption-02{
				margin: 10px auto 10px;
				font-size: 140%;
				width: 70%;
			}
			#slider .slider-01 h1:nth-child(2){
				width: 33%;
			}
			@media only screen and (max-width: 980px) {
				#slider .slider-01{
					margin: 14px auto;
	    			width: 100%;
				}
			}
			@media only screen and (max-width: 800px) {
				#slider .slider-01 .caption-01{
					margin: 10px auto 30px;
    				width: 100%;
				}
				#slider .slider-01 .caption-02{
					width: 87%;
				}
				#slider .slider-01 h1:nth-child(2){
					width: 46%;
				}

			}
			@media only screen and (max-width: 600px) {
				header#slider,
				header#slider .carousel-inner > .item{
					height: auto;
				}
			}

			/** added media queries **/
			@media only screen and (max-width: 800px) {
				.site-branding{
					position: relative;
				}
				.site-branding h1.site-title,
				.site-branding .site-logo{
					/*display: block;*/
				}
				header:first-child{
					
				}
				header:first-child .row-fluid .span8{
					width: 100%;
				}
				.navbar{
					margin-top: -10px;
				}
			}
			@media only screen and (max-width: 959px) {
				body{
					padding-left: 0px !important;
					padding-right: 0px !important;
				}
				.border-box.container{
					padding-left:8px !important;
					padding-right:8px !important;
				}
			}
			@media only screen and (max-width: 360px) {
				.navbar .nav > li{
					margin-bottom: 10px;
				}
				.site-branding{
					position: relative;
				}
				.site-branding h1.site-title,
				.site-branding .site-logo{
					width: 90%;
					text-align: center;
					margin: 0px auto;
					display: block;
				}
				.site-branding .site-logo{
					width: 60%;
				}
				header:first-child{
					margin-bottom: 0px;
				}
				.navbar{
					margin-top: 2px;
				}
			}
			

			
			#subscription .subscription-button{
				position: fixed;
				left: auto;
				right: -66px;
				background-color: #fd8433;
				padding: 2px 16px;

				font-family: 'Open Sans', sans-serif;
				font-weight: 600;
				font-size: 14px;

				-moz-transform: rotate(270deg); /*FF3.5+*/
				-o-transform: rotate(270deg); /*Opera 10.5*/
				-webkit-transform: rotate(270deg); /*Saf3.1+, Chrome*/
				-ms-transform: rotate(270deg); /*IE9*/
				transform: rotate(270deg);
				filter: progid:DXImageTransform.Microsoft.Matrix(M11=-0.000000, M12=1,M21=-1.000000, M22=-0.000000, sizingMethod='auto expand');/*IE6-IE9*/
				zoom: 1;
				
				z-index: 3;

				filter: alpha(opacity=90);
				opacity: 0.9;
				color: #f9f9f9;
			}
			#subscription .subscription-form{
				width: 0px;
				background-color: #fffefe;
				position: fixed;
				left: auto;
				right: 0px;
				overflow: hidden;
				z-index: 4;

				padding-left: 0px;
    			padding-right: 0px;
			}
			#subscription .subscription-form legend{
				background-color: #f37922;
				font-family: 'Montserrat Alternates', sans-serif;
				font-size: 22px;
				color: #f9f9f9;
				padding: 0px 10px;
			}
			#subscription .subscription-form input,
			#subscription .subscription-form span,
			#subscription .subscription-form button{
				margin: 0px 10px;
			}
			#subscription .subscription-form input{
				margin-bottom: 8px;
			}

			#subscription .subscription-form .help-block{
				font-size: 12px;
			}
			#subscription .subscription-form .btn-block{
				width: 90%;
				margin-top: 10px;
				background-color: #fc8433;
				color: #f9f9f9;
			}

		</style>
	</head>

	<body id="faaizah">

		<span id="subscription">
			<a href="#" title="press to show subscription form">
				<h1 class="subscription-button border-box" style="display:none;">
					SUBSCRIBE NOW
				</h1>
			</a>

			<div class="subscription-form container-fluid">

				<form class="row-fluid" name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" >
					<fieldset>
					<legend>SUBSCRIBE TO US</legend>
					<input name="ea" type="email" placeholder="Email Address">
					<span class="help-block">Faaizah Movement respects your privacy. We don't rent or sell your personal information.</span>
					<button type="submit" class="btn-block btn medium btn-warning">SUBSCRIBE NOW</button>
					</fieldset>
				</form>

			</div>
		</span>

		<header class="border-box container-fluid">
			
			<span class="hidden-desktop">
				<div class="site-branding">
					<div class="site-logo">
						<img src="{{{ asset('assets/faaizah/img/site/logo.png') }}}" alt="Faaizah Movement">
					</div>
					<h1 class="site-title">Faaziah Movement</h1>
				</div>
			</span>

			<!-- header -->
			<div class="border-box container">

				<div class="row-fluid">
					<div class="span4 visible-desktop">
						<div class="site-branding">
							<div class="site-logo">
								<img src="{{{ asset('assets/faaizah/img/site/logo.png') }}}" alt="Faaizah Movement">
							</div>
							<h1 class="site-title">Faaziah Movement</h1>
						</div>
					</div>
					<div class="span8">

						<div class="navbar">
							<div class="navbar-inner no-boxshadow">

								<div class="container pull-right">

									<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

									<div class="nav-collapse collapse">
									<ul class="nav">
										<li class="active"><a href="http://faaizah.com/home">Home</a></li>
										<li><a href="http://faaizah.wix.com/home/about">About Faaizah</a></li>
										<li><a href="http://faaizah.wix.com/home/about#!__gallery">Gallery</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="http://faaizah.wix.com/home/about#!__contacts">Contact Us</a></li>
									</ul>
									</div>

								</div>

								<div class="clearfix"></div>

							</div>
						</div>

					</div>

				</div>

			</div><!-- ./header -->

		</header>

		<header class="border-box container-fluid" id="slider">

			<!-- sider -->
			<div class="border-box container">

				<div id="faaizah-slider" class="carousel slide">

					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item">

							<div class="row-fluid slider-01">

								<div class="span7 slider-captions">
									<h1 class="caption-01">Faaizah Movement Graphic Design &amp; Web Creations</h1>
									<h1 class="caption-02">Call our Design Line</h1>
									<h1 class="caption-02">Tue-Sat 10 am-5pm est 1-267-712-9112</h1>
								</div>
								<div class="span5 text-center">
									<img src="{{{ asset('assets/faaizah/img/slider/01.png') }}}" alt="">
								</div>

							</div>

						</div>
						<div class="item">

						</div>
						<div class="item">
						</div>
					</div>

					<!-- Carousel nav -->
					<a class="carousel-control left" href="#faaizah-slider" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#faaizah-slider" data-slide="next">&rsaquo;</a>
				</div>


			</div><!-- ./sider -->

		</header>

		<div class="border-box container-fluid" id="services">
			<!-- services -->
			<div class="border-box container">

				<div class="row-fluid">

					<div class="span4 offset4">
						<div class="services-title">
							<h1 class="our-services text-center">Our Services</h1>
						</div>
					</div>

				</div>

				<div class="row-fluid">

					<ul class="thumbnails">
						<li class="span4">
							<div class="thumbnail">
								<div class="pull-left">
									<img src="assets/faaizah/img/site/identity.png" alt="">
								</div>
								
								<div class="content">
									<h3>Corporate Identity &amp; Branding</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</li>
						<li class="span4">
							<div class="thumbnail">
								<div class="pull-left">
									<img src="assets/faaizah/img/site/development-and-design.png" alt="">
								</div>
								
								<div class="content">
									<h3>Creative Development &amp; Design</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</li>
						<li class="span4">
							<div class="thumbnail">
								<div class="pull-left">
									<img src="assets/faaizah/img/site/campaign-design-and-layout.png" alt="">
								</div>
								
								<div class="content">
									<h3>Campaign Design &amp; Format Layout</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>

				</div>

				<div class="row-fluid">

					<ul class="thumbnails">
						<li class="span4">
							<div class="thumbnail">
								<div class="pull-left">
									<img src="assets/faaizah/img/site/marketing-strategy-and-plan-development.png" alt="">
								</div>
								
								<div class="content">
									<h3>Marketing Strategy &amp; Plan Development for Online/Email &amp; B2B Social Media</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</li>
						<li class="span4">
							<div class="thumbnail">
								<div class="pull-left">
									<img src="assets/faaizah/img/site/selling-and-pitch-management.png" alt="">
								</div>
								
								<div class="content">
									<h3>Selling &amp; Pitch Management</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</li>
						<li class="span4">
							<div class="thumbnail">
								<div class="pull-left">
									<img src="assets/faaizah/img/site/printing-services.png" alt="">
								</div>
								
								<div class="content">
									<h3>Printing Services</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>

				</div>


			</div><!-- ./services -->

		</div>

		<div class="border-box container-fluid" id="body">

			<!-- body -->
			<div class="border-box container">

				<div class="row-fluid">

					<!-- testimonials -->
					<div class="span4" id="testimonials">

						<div class="media">
						
							<div class="media-body">
								<h4 class="media-heading media-heading-first">
									Testimonials

									<a href="#" title="" class="pull-right"><span class="label label-orange">view more</span></a>
								</h4>

								<div class="clearfix"></div>
								
								<!-- Testimonial item 1-->
								<div class="media">

									<a class="pull-left" href="#">
										<img class="media-object img-polaroid" src="http://placeimg.com/50/60/any?aa={{ rand(0,10) }}">
									</a>

									<div class="media-body">

										<h4 class="media-heading">The Services is good!</h4>

										<p class="muted">
											<span class="firstcharacter">“</span>Sed luctus sit amet est id bibendum. Sed porta lorem et risus varius, id scelerisque nunc interdum? Nulla tempor...<a href="#" title=""><span class="label label-info">read more</span></a>
											<div class="clearfix"></div>
										</p>

										<p class="author">
											Client Name<br/>
											Client Current Occupation or Company
										</p>
										
									</div>

									<div class="clearfix"></div>

								</div>

								<!-- Testimonial item 2-->
								<div class="media">

									<a class="pull-left" href="#">
										<img class="media-object img-polaroid" src="http://placeimg.com/50/60/any?aa={{ rand(0,10) }}">
									</a>

									<div class="media-body">

										<h4 class="media-heading">They help me to be on top!</h4>

										<p class="muted">
											<span class="firstcharacter">“</span>Sed luctus sit amet est id bibendum. Sed porta lorem et risus varius, id scelerisque nunc interdum? Nulla tempor...<a href="#" title=""><span class="label label-info">read more</span></a>
											<div class="clearfix"></div>
										</p>

										<p class="author">
											Client Name<br/>
											Client Current Occupation or Company
										</p>
										
									</div>

									<div class="clearfix"></div>

								</div>


							</div>

						</div>

					</div><!-- ./testimonials -->

					<!-- latest news -->
					<div class="span8" id="latest-news">

						<div class="media">
						
							<div class="media-body">
								
								<h4 class="media-heading media-heading-first">
									Latest News

									<a href="#" title="" class="pull-right"><span class="label label-orange">view more</span></a>
								</h4>

								<div class="clearfix"></div>
								
								<div class="row-fluid">

									<ul class="thumbnails">
										<li class="span6">
											<div class="thumbnail no-boxshadow">
												<img alt="" src="http://placeimg.com/365/190/any?aa={{ rand(0,10) }}">
												<h3>News Headline</h3>
												<p class="muted">Sed luctus sit amet est id bibendum. Sed porta lorem et risus varius, id scelerisque nunc interdum? Nulla tempor...<a href="#" title=""><span class="label label-info">read more</span></a></p>

											</div>
										</li>
										<li class="span6">
											<div class="thumbnail no-boxshadow">
												<img alt="" src="http://placeimg.com/365/190/any?aa={{ rand(0,10) }}">
												<h3>News Headline</h3>
												<p class="muted">Sed luctus sit amet est id bibendum. Sed porta lorem et risus varius, id scelerisque nunc interdum? Nulla tempor...<a href="#" title=""><span class="label label-info">read more</span></a></p>

											</div>
										</li>
									</ul>

								</div>

							</div>

						</div>

					</div><!-- ./latest news -->

				</div>

			</div><!-- ./body -->

		</div>

		<div class="border-box container-fluid" id="call-hotline">

			<!-- call-hotline -->
			<div class="border-box container">

				<div class="row-fluid">
					<div class="span12">
						<h1 class="pull-left">Call our Design Line : Tue-Sat 10 am-5pm est 1-267-712-9112</h1>
						<button class="btn btn-large pull-right" type="button">Learn More<i class="icon-chevron-right border-box"></i></button>
					</div>
				</div>

			</div><!-- ./call-hotline -->

		</div>

		<footer class="border-box container-fluid">

			<!-- footer -->
			<div class="border-box container">

				<div class="row-fluid">

					<div class="span3" id="about-faaziah">

						<div class="media">
						
							<div class="media-body">
								
								<h4 class="media-heading media-heading-first">
									About Faaizah
								</h4>

								<div class="media">

									<a href="#">
										<img class="media-object" src="http://placeimg.com/270/134/any?aa={{ rand(0,10) }}">
									</a>

									<div class="media-body">

										<p class="muted">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc cursus, dui a facilisis laoreet, libero turpis luctus massa, euismod bibendum dolor ligula quis lacus.</p>
										
									</div>

									<div class="clearfix"></div>

								</div>

							</div>

						</div>

					</div>

					<div class="span3" id="featured-news">

						<div class="media">
						
							<div class="media-body">
								
								<article>

									<h4 class="media-heading media-heading-first">
										Featured News
									</h4>

								</article>

								<article class="media featured-news-content">

									<div class="media-body">

										<h4 class="media-heading">They help me to be on top!</h4>

										<p class="muted">Aliquam ultricies purus id. Etiam sit amet nunc nullam. Sed tristique orci id amet.</p>
										
									</div>

									<div class="clearfix"></div>

								</article>

								<article class="media featured-news-content">

									<div class="media-body">

										<h4 class="media-heading">They help me to be on top!</h4>

										<p class="muted">Aliquam ultricies purus id. Etiam sit amet nunc nullam. Sed tristique orci id amet.</p>
										
									</div>

									<div class="clearfix"></div>

								</article>

							</div>

						</div>

					</div>

					<div class="span3" id="affiliates">

						<div class="media">
						
							<div class="media-body">
								
								<h4 class="media-heading media-heading-first">
									Affiliates
								</h4>

								<div class="row-fluid">

									<ul class="thumbnails">
										<li class="span12">
											<div class="thumbnail no-boxshadow">
												<div class="image-mask">
													<h3 class="border-box">Thumbnail label</h3>
													<p>Aenean eu velit dictum, accumsan. Aenean porta faucibus tellus, ac.</p>
												</div>
												<img src="http://placeimg.com/270/134/any?aa={{ rand(0,10) }}" alt="">
											</div>
										</li>
										<li class="span12">
											<div class="thumbnail no-boxshadow">
												<div class="image-mask">
													<h3 class="border-box">Thumbnail label</h3>
													<p>Aenean eu velit dictum, accumsan. Aenean porta faucibus tellus, ac.</p>
												</div>
												<img src="http://placeimg.com/270/134/any?aa={{ rand(0,10) }}" alt="">
											</div>
										</li>
										<li class="span12">
											<div class="thumbnail no-boxshadow">
												<div class="image-mask">
													<h3 class="border-box">Thumbnail label</h3>
													<p>Aenean eu velit dictum, accumsan. Aenean porta faucibus tellus, ac.</p>
												</div>
												<img src="http://placeimg.com/270/134/any?aa={{ rand(0,10) }}" alt="">
											</div>
										</li>
									</ul>

								</div>

							</div>

						</div>


					</div>

					<div class="span3" id="social-links">

						<div class="media">
						
							<div class="media-body">
								
								<h4 class="media-heading media-heading-first">
									Connect With Us
								</h4>

								<div class="media">

									<ul class="unstyled">

										<li>
											<a href="#" class="tooltips" data-toggle="tooltip" title="Like us on Facebook">
											<div class="media social-link">
												<a class="pull-left" href="#">
													<img class="pull-left" src="assets/faaizah/img/site/fb.png" alt="Like us on Facebook">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Like us on Facebook</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											</a>
										</li>
										<li>
											<a href="#" class="tooltips" data-toggle="tooltip" title="Follow us on Twitter">
											<div class="media social-link">
												<a class="pull-left" href="#">
													<img class="pull-left" src="assets/faaizah/img/site/twitter.png" alt="Follow us on Twitter">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Follow us on Twitter</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											</a>
										</li>
										<li>
											<a href="#" class="tooltips" data-toggle="tooltip" title="Pin us on Pinterest">
											<div class="media social-link">
												<a class="pull-left" href="#">
													<img class="pull-left" src="assets/faaizah/img/site/pinterest.png" alt="Pin us on Pinterest">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Pin us on Pinterest</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											</a>
										</li>
										<li>
											<a href="#" class="tooltips" data-toggle="tooltip" title="Add us up on on Google +">
											<div class="media social-link">
												<a class="pull-left" href="#">
													<img class="pull-left" src="assets/faaizah/img/site/googleplus.png" alt="Add us up on on Google +">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Add us up on on Google +</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											</a>
										</li>
										<li>
											<a href="#" class="tooltips" data-toggle="tooltip" title="Connect with us on Linkedin">
											<div class="media social-link">
												<a class="pull-left" href="#">
													<img class="pull-left" src="assets/faaizah/img/site/linkedin.png" alt="Connect with us on Linkedin">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Connect with us on Linkedin</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											</a>
										</li>
									</ul>

								</div>

							</div>

						</div>

					</div>


				</div>

			</div><!-- ./footer -->

		</footer>


		<!-- Javascripts
		================================================== -->
		<script src="{{{ asset('assets/faaizah/js/jquery.v1.8.3.min.js') }}}"></script>
		<script src="{{{ asset('assets/faaizah/js/bootstrap/bootstrap.min.js') }}}"></script>
		
		<script type="text/javascript" charset="utf-8" async defer>
			var xSubscription = 0;
			jQuery(window).load(function() {
				initFooterAffiliates();
				jQuery('.tooltips').tooltip({trigger:'hover'});
			});

			jQuery(document).ready(function($) {
				initSubscribeNowButton();
				
			});

			function initSubscribeNowButton(){
				jQuery("#subscription .subscription-button").css({

					top: jQuery(window).height() * 0.5

				}).fadeIn("fast");

				jQuery("#subscription .subscription-form").css({

					top: jQuery(window).height() * 0.5

				});

				jQuery("#subscription .subscription-form").hover(function(){
					showSubscriptionButton(1);
				}, function(){
					showSubscriptionButton(0);
				});

				jQuery("#subscription .subscription-button").hover(function(){
					showSubscriptionButton(1);
				}, function(){
					showSubscriptionButton(0);
				});
			}

			function showSubscriptionButton(x){

				if(x==1)
				{
					clearTimeout(xSubscription);
					xSubscription = setTimeout(function(){

						jQuery("#subscription .subscription-button").animate({
							right: -100
						}, { duration: 200 });

						jQuery("#subscription .subscription-form").animate({
							width: 244
						}, { duration: 200 });

					}, 200);
					
				}
				else
				{
					clearTimeout(xSubscription);
					xSubscription = setTimeout(function(){
						jQuery("#subscription .subscription-form").animate({
							width: 0
						}, { duration: 200 });

						jQuery("#subscription .subscription-button").animate({
							right: -66
						}, { duration: 200 });

					}, 200);
				}

			}

			function initFooterAffiliates(){
				jQuery("footer #affiliates .thumbnail").each(function(){

					var obj = jQuery(this);
					var imgObj = obj.find("img");
					var imagemaskObj = obj.find(".image-mask");

					imagemaskObj.css({
						left: imgObj.offset().left + imgObj.width(),
						height: imgObj.height(),
						width: 4
					});

					obj.hover(function(){

						imagemaskObj.animate({
							width: imgObj.width(),
							left: imgObj.offset().left
						}, {
							duration: 200 });

					}, function(){

						imagemaskObj.animate({
							width: 4,
							left: imgObj.offset().left + imgObj.width()
						}, {
							duration: 200 });

					});
					

				});
			}
		</script>
	</body>
</html>
