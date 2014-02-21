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
	body {
		padding-top: 60px;
	}
	.show-grid{
		padding-bottom: 4px;
		padding-top: 4px;
	}
	.show-grid [class*="span"]{
		background-color: #EEEEEE;
	    border-radius: 3px 3px 3px 3px;
	    line-height: 30px;
	    min-height: 30px;
	    text-align: center;
	}
	</style>

@stop

@section('body')
	
	<!-- Container -->
	<div class="container">
		
		<!-- Typography
		================================================== -->
		<section id="typography">
			<div class="page-header">
				<h1>Grid</h1>
			</div>

			<div class="row show-grid">
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
				<div class="span1">1</div>
			</div>
			<div class="row show-grid">
				<div class="span4" data-original-title="">4</div>
				<div class="span4">4</div>
				<div class="span4">4</div>
			</div>
			<div class="row show-grid">
				<div class="span4" data-original-title="">4</div>
				<div class="span8">8</div>
			</div>
			<div class="row show-grid">
				<div class="span6" data-original-title="">6</div>
				<div class="span6">6</div>
			</div>
			<div class="row show-grid">
				<div class="span12">12</div>
			</div>

			<div class="page-header">
				<h1>Offsetting</h1>
			</div>

		 </section>


	</div>
	<!-- ./ container -->

@stop

@section('javascripts')

@stop