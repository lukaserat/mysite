<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('meta')

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="{{{ asset('assets/urshrt/js/modernizr.custom.js') }}}"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{{ asset('assets/urshrt/jquery/jquery-1.9.1.min.js') }}}"><\/script>')</script>

	<link rel="stylesheet" type="text/css" href="{{{ asset('assets/urshrt/bootstrap/bootstrap.min.css') }}}">
	<link rel="stylesheet" type="text/css" href="{{{ asset('assets/urshrt/bootstrap/metro-bootstrap.css') }}}">
	<link href="{{{ asset('assets/urshrt/css/page.css') }}}" rel="stylesheet" media="screen">
	<link href="{{{ asset('assets/urshrt/css/helpers.css') }}}" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="{{{ asset('assets/urshrt/font-awesome/css/font-awesome.min.css') }}}">
	<!--[if lt IE 7]>
	<script src="{{{ asset('assets/urshrt/font-awesome/css/font-awesome-ie7.min.css') }}}"></script><![endif]-->
 	@yield('head')
</head>
<body>
	@yield('content')
	@include('urshrt.footer')
	<!-- Javascripts -->
  	<script src="{{{ asset('assets/urshrt/bootstrap/bootstrap.min.js') }}}"></script>
  	<script src="{{{ asset('assets/urshrt/js/holder.js') }}}"></script>
  	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.has-tooltip').tooltip({
		  placement: 'bottom'
		});
	});
	</script>
	@yield('footer')
</body>
</html>