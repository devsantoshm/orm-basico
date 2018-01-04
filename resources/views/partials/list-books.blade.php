@foreach ($books as $book)
	<tr>
		<td align="center"><input type="checkbox" class="sub_chk" name="ids[]" value="{{ $book->id }}"></td>
		<td>{{ $book->id }}</td>
		<td>{{ $book->title }}</td>
		<td>{{ $book->description }}</td>
		<td>
			{!! Form::open(['route' => ['orm-delete', $book->id], 'method' => 'delete']) !!}
			<button type="submit" title="Enviar a papelera" class="btn btn-default">
				<i class="glyphicon glyphicon-remove-sign"></i>
			</button>
			{!! Form::close() !!}
		</td>
		<td>
			{!! Form::open(['route' => ['orm-forceDelete', $book->id], 'method' => 'delete']) !!}
			<button type="submit" title="Eliminar definitivamente" class="btn btn-danger">
				<i class="glyphicon glyphicon-trash"></i>
			</button>
			{!! Form::close() !!}
		</td>
	</tr>
@endforeach