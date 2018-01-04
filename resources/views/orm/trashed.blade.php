@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}
		<a href="{{ route('orm-all') }}" class="btn btn-primary pull-right">Todos los libros</a>
	</h1>
	<table class="table table-hover table-striped">
		@include('partials.head-books')
		<tbody>
			@include('partials.list-books-trashed')
		</tbody>
	</table>
</div>
@endsection