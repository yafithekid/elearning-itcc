<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="id"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="id"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="id"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--[if lt IE 9]>
        <script src="js/html5.js"></script>
	<![endif]-->
</head>
<body>
	@section('header')
		<ul>
			<li>Beranda</li>
			<li>Tentang</li>
			@if (Auth::check())
				<li>Logout</li>
			@else
				<li>Login</li>
			@endif
		</ul>
	@show

	@yield('content')

	@section('footer')
		created by kaito, yafi, willy
	@show
</body>
</html>