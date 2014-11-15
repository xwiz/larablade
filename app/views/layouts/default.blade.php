<!doctype html>
<html>
<head>
	@include('includes.head')    
</head>
<body>
<div class="container">

	<header class="row">
		@include('includes.navbar')
	</header>

	<div id="main" class="col-md-12" style="margin-top: 60px;">

			@yield('content')
	</div>

	<footer class="row" style="position: absolute; bottom: 0px;">
		@include('includes.footer')
	</footer>

</body>
</html>
