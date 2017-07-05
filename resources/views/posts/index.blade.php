@extends('app')
@section('stylesheet')

<link rel="stylesheet" href="{{ URL::to('/') }}/css/styles.css" />
@endsection
@section('content')
	<a href="{{ route('posts.create') }}" class="btn btn-primary">Új bejegyzés</a>
	@foreach($posts as $post)
		<h2>{{ $post->title }}</h2>
		<p>
			{{ substr(strip_tags($post->content),0,200) }}{{ strlen(strip_tags($post->content)) > 200 ? "..." : "" }}		</p>
		<legend>
		<div class="row">
			<div class="col-md-5">
				{{ $post->city }}, {{ $post->written_at }}

			</div>
			<div class="col-md-2">
				<a class="btn btn-default btn-block" href="{{ route('posts.show', $post->id) }}">A teljes bejegyzés</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-success btn-block" href="{{ route('posts.edit', $post->id) }}">Szerkesztés</a>
			</div>
			<div class="col-md-2">
				<form method='POST' action="{{route('posts.destroy', $post->id)}}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger btn-block">Törlés</button>					
				</form>					
			</div>
		</div>		
		</legend>
	@endforeach
@endsection