<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">			
			<a class="navbar-brand" href="{{ route('posts.index') }}">Összes bejegyzés</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li {{ Route::currentRouteName()== 'posts.create' ? 'class=active' : '' }}><a href="{{ route('posts.create') }}">Új bejegyzés<span class="sr-only">(current)</span></a></li>

				@if(Route::currentRouteName()== 'posts.show' || Route::currentRouteName()== 'posts.edit')
				<li {{ Route::currentRouteName()== 'posts.edit' ? 'class=active' : '' }}><a href="{{ route('posts.edit', $post->id) }}">Bejegyzés szerkesztése<span class="sr-only">(current)</span></a></li>
				<li>
					<a href="{{ route('posts.destroy', $post->id) }}"
						onclick="event.preventDefault();
						document.getElementById('delete-form').submit();">
						Bejegyzés törlése
					</a>

					<form id="delete-form" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: none;">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
					</form>
				</li>
				@endif
				

				<!--<li><a href="#">Link</a></li>-->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Logout
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


