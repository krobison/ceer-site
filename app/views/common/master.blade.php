<!DOCTYPE html>
<html>

<head>

	{{ HTML::style('assets/css/bootstrap_custom.min.css') }}
	{{ HTML::style('assets/css/font-awesome.min.css') }}
	
	<title>CEER</title>
	
	<link rel="shortcut icon" href="{{URL::to('assets/img/favicon.ico')}}">
	
</head>

	{{-- Script Includes --}}
	
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}

	{{-- View Renderings --}}
	<div id="page_head">
		@yield('page_head')
	</div>
	<div id="messages">
		@yield('messages')
	</div>
	@yield('content_main')
	
</body>
</html>
