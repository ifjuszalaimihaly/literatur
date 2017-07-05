@extends('app')
@section('content')
	<h1>{{$post->title}}</h1>
	<p>{{ $post->content }}</p>
	<legend>{{ $post->city }}, {{ $post->created_at }}</legend>
@endsection