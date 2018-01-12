@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}
		<a href="{{ route('orm-all') }}" class="btn btn-primary pull-right">Todos los libros</a>
	</h1>
	<div class="btn-group">
		<button data-url="{{ url('ebooksRestoreAll') }}" title="Restaurar libro" class="btn btn-success btn-sm restore_all">
			<i class="glyphicon glyphicon-ok-sign"></i> Restaurar
		</button>
	</div>
	<div class="btn-group">
		<button data-url="{{ url('ebooksforceDeleteAll') }}" title="Eliminar definitivamente" class="btn btn-danger btn-sm forceDelete_all">
			<i class="glyphicon glyphicon-trash"></i> Eliminar
		</button>
	</div>
	<table class="table table-hover table-striped">
		@include('partials.head-books')
		<tbody>
			@include('partials.list-books-trashed')
		</tbody>
	</table>
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

			$('.restore_all').on('click', function(e){
				var allVals = [];
				$('.sub_chk:checked').each(function(){
					allVals.push($(this).attr('data-id'))
				});
				if (allVals.length <= 0) {
					alert('Por favor selecciona una fila.');
				}else{
					var check = confirm('¿Realmente quieres restaurar los libros?');
					if (check == true) {
						var join_selected_values = allVals.join(',');
						$.ajax({
							url: $(this).data('url'),
							type: 'DELETE',
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							data: 'ids='+join_selected_values,
							success: function(data){
								if (data['success']) {
									$('.sub_chk:checked').each(function(){
										$(this).parents('tr').remove();
									});
									alert(data['success']);	
									window.location = "{{ url('orm-all') }}";
								}else if (data['error']) {
									alert(data['error']);
								} else {
									alert('Algo malo sucedio!!');
								}
								
							},
							error: function(data){
								alert(data.responseText);
							}
						});
					}
				}
			});

			$('.forceDelete_all').on('click', function(e){
				var allVals = [];
				$('.sub_chk:checked').each(function(){
					allVals.push($(this).attr('data-id'))
				});
				if (allVals.length <= 0) {
					alert('Por favor selecciona una fila.');
				}else{
					var check = confirm('¿Realmente quieres eliminar definitivamente?');
					if (check == true) {
						var join_selected_values = allVals.join(',');
						$.ajax({
							url: $(this).data('url'),
							type: 'DELETE',
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							data: 'ids='+join_selected_values,
							success: function(data){
								if (data['success']) {
									$('.sub_chk:checked').each(function(){
									$(this).parents('tr').remove();
									});
									alert(data['success']);	
								}else if (data['error']) {
									alert(data['error']);
								} else {
									alert('Algo malo sucedio!!');
								}
								
							},
							error: function(data){
								alert(data.responseText);
							}
						});
					}
				}
			});
		});
	</script>
@endsection