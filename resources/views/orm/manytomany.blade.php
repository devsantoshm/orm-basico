@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}	
	</h1>
	<ul>
	@foreach ($users as $user)
		<li><strong>Autor</strong> {{ $user->name }}
		<a href="{{ route('getEdit', $user->id) }}">Editar</a>
		<ul>
			@foreach ($user->manyBooks as $book)
				<li>
					<strong>Libro</strong> {{ $book->title }}
				</li>
			@endforeach
		</ul>
		</li>
	@endforeach
	</ul>
</div>
@endsection