@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">
		{{ $title }}	
	</h1>

	@foreach ($categories as $category)
		<p>
			{{ $category->name }}
			({{ count($category->books) }})
		</p>
		<ul>
			@foreach ($category->books as $book)
				<li>
					<strong>{{ $book->title }}</strong>
					{{ $book->description }}
				</li>
			@endforeach
		</ul>
	@endforeach
	
</div>
@endsection