@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}	
	</h1>
	{!! Form::model($user, ['route' => ['putEdit', $user->id], 'method' => 'PUT']) !!}
	<div>
		<p><strong>Usuario (Autor):</strong>{{ $user->name }}</p>
	</div>
	<div>
		{!! Form::label('books', 'Libros') !!}<br>
		{!! Form::select('books[]', $books, null, ['multiple']) !!}
	</div>
	{!! Form::submit('Actualizar') !!}
	{!! Form::close() !!}
</div>
@endsection