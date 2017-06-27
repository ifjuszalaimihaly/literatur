@extends('app')
@section('content')
	@foreach($posts as $post)
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->content }}</p>
		<legend>{{ $post->city }}, {{ $post->created_at }}</legend>
	@endforeach
@endsection