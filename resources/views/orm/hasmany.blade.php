@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}	
	</h1>

	@foreach ($categories as $category)
		<p>
			{{ $category->name }}
			({{ $category->num_books }})
		</p>
		<ul>
			@foreach ($category->books_public as $book)
				<li>
					{{ $book->title }} <strong>{{ $book->status }}</strong>
				</li>
			@endforeach
		</ul>
	@endforeach
	
</div>
@endsection