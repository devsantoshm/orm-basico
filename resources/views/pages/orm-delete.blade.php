@extends('layout')

@section('content')
	<div class="container">
		<p class="alert alert-success">
			El libro se elimino correctamente,
			<a href="{{ route('orm-all') }}">
				Ir a libros
			</a>
		</p>
	</div>
@endsection