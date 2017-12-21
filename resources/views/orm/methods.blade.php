@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}
		<a href="{{ route('books-trash') }}" class="btn btn-danger pull-right">Registros Borrados</a>
	</h1>
	@if (Session::has('message'))
		<p class="alert alert-success alert-dismissible fade in">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">x</span>
			</button>
			{{ Session::get('message') }}
		</p>
	@endif
	<table class="table table-hover table-striped">
		@include('partials.head-books')
		<tbody>
			@include('partials.list-books')
		</tbody>
	</table>
</div>
@endsection