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
	</ul>
</li>