@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		First Last
	</h1>
	<h3>Primer Registro</h3>
	<p>{{ $first->id }}</p>
	<p>{{ $first->name }}</p>

	<h3>Último Registro</h3>
	<p>{{ $last->id }}</p>
	<p>{{ $last->name }}</p>
</div>
@endsection