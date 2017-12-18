@extends('layout')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Curso eloquent orm</h1>
			<p>hola</p>
		</div>
	</div>
	<div class="container">
		<h1 class="page-header">
			Ultimos usuarios registrados
		</h1>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Genero</th>
					<th>Biografia</th>
				</tr>
			</thead>
			<tbody>
				@include('partials.list-users')
			</tbody>
		</table>
	</div>
@endsection