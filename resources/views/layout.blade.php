<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso eloquent ORM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<style type="text/css">
		body{
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<a href="{{ route('home') }}" class="navbar-brand">Eloquent ORM</a>
			<ul class="nav navbar-nav">
				<li>
					<a href="{{ route('home') }}">Home</a>
				</li>
				@include('partials.menu-query')	
			</ul>
		</div>
	</nav>
	@yield('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>