@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}	
		<a href="{{ route('books-trash') }}" class="btn btn-primary pull-right">Registros Borrados</a>
	</h1>
	@if (Session::has('message'))
		<p class="alert alert-success alert-dismissible fade in">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">x</span>
			</button>
			{{ Session::get('message') }}
		</p>
	@endif
	<div class="btn-group">
		<button type="submit" title="Enviar a papelera" class="btn btn-default btn-sm">
			<i class="glyphicon glyphicon-remove-sign"></i>
		</button>
	</div>
	<div class="btn-group">
		<button type="submit" title="Eliminar definitivamente" class="btn btn-danger btn-sm">
			<i class="glyphicon glyphicon-trash"></i>
		</button>
	</div>
	{!! Form::open(['route' => 'orm-destroy', 'method' => 'delete']) !!}
	<table class="table table-hover table-striped">
		@include('partials.head-books')
		<tbody>
			@include('partials.list-books')
		</tbody>
	</table>
	{!! Form::close() !!}
</div>
@endsection

@section('scripts')
	<script>
		$(document).ready(function(){
			$('#master').on('click', function(e){
				//Atributos que se modifican con attr(): class, id, href, label, src, title...
				//Propiedades que se modifican con prop(): autofocus, checked, async, multiple, readOnly...
				if($(this).is(':checked', true))
					$(".sub_chk").prop('checked', true);
				else
					$(".sub_chk").prop('checked', false);
			});
		});
	</script>
@endsection