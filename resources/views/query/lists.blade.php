@extends('layout')

@section('content')
<div class="container">
	<h1>
		Lista de usuarios para select (Lists)
	</h1>
	{!! Form::open() !!}
	<div class="form-group">
		{!! Form::select('users', $users, null, ['class' => 'form-control']) !!}
	</div>
	{!! Form::close() !!}
</div>
@endsection