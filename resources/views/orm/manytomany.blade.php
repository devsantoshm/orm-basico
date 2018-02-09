@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}	
	</h1>
	<ul>
	@foreach ($users as $user)
		<li><strong>Autor</strong> {{ $user->name }}
		<ul>
			@foreach ($user->books as $book)
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