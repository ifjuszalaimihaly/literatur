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
				{{ $post->city }}, {{ $post->created_at }}

			</div>
			<div class="col-md-2">
				<a class="btn btn-default btn-block" href="{{ route('posts.show', $post->id) }}">A teljes bejegyzés</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-success btn-block" href="{{ route('posts.edit', $post->id) }}">Szerkesztés</a>
			</div>
			<div class="col-md-2">
				
				{!! Form::open(["route" => ["posts.destroy", $post->id], "method" => "DELETE"]) !!}
					{!! Form::submit('Törlés', ['class' => 'btn btn-danger btn-block']) !!}
					{!! Form::close() !!}				
					
			</div>
		</div>		
		</legend>
	@endforeach
@endsection