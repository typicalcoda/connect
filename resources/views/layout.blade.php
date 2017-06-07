<!Doctype html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
	<link rel="stylesheet" href="/css/font-awesome.min.css"></link>
	{{-- <link rel="stylesheet" href="/css/theme.css"> --}}
	<link rel="stylesheet" href="/css/app.css">
	<title>Connect - Dashboard</title>
</head>
<body>
	@include('partials.modal')
	@include('partials.nav')
	@include('partials.avatar')
	
	<div class="content">
		@yield('content')
	</div>

	
	<script src="/js/jquery.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>


