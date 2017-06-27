@extends('app')
@section('content')
	<a href="{{ route('posts.create') }}" class="btn btn-primary">Create new Post</a>
	@foreach($posts as $post)
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->content }}</p>
		<legend>{{ $post->city }}, {{ $post->created_at }}</legend>
	@endforeach
@endsection