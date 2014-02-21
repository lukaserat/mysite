@extends('layouts.base')

@section('head')

	<title>
		@section('title')
		Laravel 4 - Bootstrap App
		@show
	</title>
	<meta name="keywords" content="your, awesome, keywords, here" />
	<meta name="author" content="Jon Doe" />
	<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

	<style type="text/css">
	@section('styles')
		body {
			padding-top: 60px;
		}
	@show
	</style>

@stop

@section('body')
	
	<!-- Container -->
	<div class="container">

		@yield('content')
		
	</div>
	<!-- ./ container -->

@stop

@section('javascripts')

@stop