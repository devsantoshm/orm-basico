@foreach ($books as $book)
	<tr>
		<td>{{ $book->id }}</td>
		<td>{{ $book->title }}</td>
		<td>{{ $book->description }}</td>
		<td>
			{!! Form::open(['route' => ['orm-restore', $book->id], 'method' => 'delete']) !!}
			<button type="submit" title="Restaurar libro" class="btn btn-success">
				<i class="glyphicon glyphicon-ok-sign"></i>
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