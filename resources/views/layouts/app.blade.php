<!DOCTYPE html>

<html lang="en">

<head>

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

	<meta charset="UTF-8">

	<meta name="description" content="APNA OK">

	<meta name="keywords" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->

	<link href="img/ico.png" rel="shortcut icon"/>



	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">




	<!-- Stylesheets -->

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css')}}"/>





	<!--[if lt IE 9]>

	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->



</head>

<body>





<!-- Page Preloder -->

<!-- <div id="preloder">

	<div class="loader">

		<img src="{{asset('img/logo.png')}}" height="50" alt="">

		<h2>Loading.....</h2>

	</div>
	<img style="height:80px; width:100%; margin-top:11px; position: absolute;" src="{{asset('img/header.jpg')}}" alt="">

</div> -->

	@include('inc.navbar')
	<div class="row" style="margin-top:120px;"></div>

	@yield('content')

    @include('inc.footer')

</body>

</html>

<!--====== Javascripts & Jquery ======-->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/magnific-popup.min.js')}}"></script>

</body>

</html>
