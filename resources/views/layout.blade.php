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
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Consultas Eloquent
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('all') }}">
								Todos los usuarios (All)
							</a>
						</li>
						<li>
							<a href="{{ route('get', 'f') }}">
								Lista de usuarios Femenina (Get)
							</a>
						</li>
						<li>
							<a href="{{ route('get', 'm') }}">
								Lista de usuarios Masculino (Get)
							</a>
						</li>
					</ul>
				</li>	
			</ul>
		</div>
	</nav>
	@yield('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>