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
			@foreach ($category->books as $book)
				<li>
					<strong>{{ $book->title }}</strong>
					{{ $book->description }}
					{{ $book->status }}
				</li>
			@endforeach
		</ul>
	@endforeach
	
</div>
@endsection