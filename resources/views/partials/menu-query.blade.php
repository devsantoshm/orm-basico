<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		Consultas Eloquent
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
		<li>
			<a href="{{ route('all') }}">
				Todos los usuarios (All)
			</a>
		</li>
		<li>
			<a href="{{ route('get', 'f') }}">
				Lista de usuarios Femenina (Get)
			</a>
		</li>
		<li>
			<a href="{{ route('get', 'm') }}">
				Lista de usuarios Masculino (Get)
			</a>
		</li>
		<li>
			<a href="{{ route('get-custom') }}">
				Lista de usuarios (Get con array)
			</a>
		</li>
		<li>
			<a href="{{ route('lists') }}">
				Lista de usuarios para select (Lists)
			</a>
		</li>
		<li>
			<a href="{{ route('first-last') }}">
				First Last
			</a>
		</li>
		<li>
			<a href="{{ route('paginate') }}">
				Eloquent Paginate
			</a>
		</li>
	</ul>
</li>

<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		Eloquent avanzado
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
		<li>
			<a href="{{ route('orm-all') }}">
				Todos los libros (All)
			</a>
		</li>
	</ul>
</li>