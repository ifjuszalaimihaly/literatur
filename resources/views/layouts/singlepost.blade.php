@extends('layouts.app')
@section('content')
	<h1>{{$post->title}}</h1>
	<p>{{ $post->content }}</p>
	<legend>{{ $post->city }}, {{ $post->written_at }}</legend>
@endsection